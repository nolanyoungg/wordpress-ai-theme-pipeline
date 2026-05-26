/* Nolan Showcase Theme 07 - production interactions, no external libraries. */
(() => {
	'use strict';

	const q = (selector, root = document) => root.querySelector(selector);
	const qa = (selector, root = document) => Array.from(root.querySelectorAll(selector));
	const reduceMotion = () => window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	const esc = (value) => {
		const stringValue = String(value || '');
		return window.CSS && CSS.escape ? CSS.escape(stringValue) : stringValue.replace(/[^a-zA-Z0-9_-]/g, '\\$&');
	};

	let lockCount = 0;
	function lockBody(lock) {
		lockCount = Math.max(0, lockCount + (lock ? 1 : -1));
		document.documentElement.classList.toggle('is-scroll-locked', lockCount > 0);
		document.body.classList.toggle('is-scroll-locked', lockCount > 0);
	}

	function setExpanded(button, expanded) {
		if (button) button.setAttribute('aria-expanded', expanded ? 'true' : 'false');
	}

	function initHeaderScrolledState() {
		const header = q('.nolan-header');
		if (!header) return;
		const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 10);
		onScroll();
		window.addEventListener('scroll', onScroll, { passive: true });
	}

	function initRailPanels(root = document) {
		qa('[data-menu-dropdown], [data-nolan-menu-panel]', root).forEach((panel) => {
			const railItems = qa('[data-rail-item], [data-nolan-panel-tab]', panel);
			const panes = qa('[data-rail-content], [data-nolan-panel-content]', panel);
			if (!railItems.length || !panes.length) return;

			const getRailKey = (el) => el.getAttribute('data-rail-item') || el.getAttribute('data-nolan-panel-tab');
			const getPaneKey = (el) => el.getAttribute('data-rail-content') || el.getAttribute('data-nolan-panel-content');
			const activate = (key) => {
				railItems.forEach((item) => {
					const active = getRailKey(item) === key;
					item.classList.toggle('is-active', active);
					item.setAttribute('aria-selected', active ? 'true' : 'false');
				});
				panes.forEach((pane) => {
					const active = getPaneKey(pane) === key;
					pane.classList.toggle('is-active', active);
					pane.hidden = !active;
					pane.setAttribute('aria-hidden', active ? 'false' : 'true');
				});
			};

			activate(getRailKey(railItems[0]));
			railItems.forEach((item) => {
				const key = getRailKey(item);
				item.addEventListener('mouseenter', () => activate(key));
				item.addEventListener('focus', () => activate(key));
				item.addEventListener('click', () => activate(key));
				item.addEventListener('keydown', (event) => {
					if (event.key === 'Enter' || event.key === ' ') {
						event.preventDefault();
						activate(key);
					}
				});
			});
		});
	}

	function initHeaderMenu() {
		const root = q('[data-nolan-menu]');
		if (!root) return;
		const triggers = qa('[data-menu-item], [data-nolan-menu-trigger]', root);
		const panels = qa('[data-menu-dropdown], [data-nolan-menu-panel]', root);
		const backdrop = q('[data-nolan-menu-backdrop]', root);
		let activeKey = null;
		let locked = false;

		const keyOfTrigger = (trigger) => trigger.getAttribute('data-menu-item') || trigger.getAttribute('data-nolan-menu-trigger');
		const keyOfPanel = (panel) => panel.getAttribute('data-menu-dropdown') || panel.getAttribute('data-nolan-menu-panel');
		const getPanel = (key) => panels.find((panel) => keyOfPanel(panel) === key);
		const getTrigger = (key) => triggers.find((trigger) => keyOfTrigger(trigger) === key);

		const closeAll = ({ returnFocus = false } = {}) => {
			const previousTrigger = activeKey ? getTrigger(activeKey) : null;
			activeKey = null;
			triggers.forEach((trigger) => {
				trigger.classList.remove('is-active');
				setExpanded(trigger, false);
			});
			panels.forEach((panel) => {
				panel.classList.remove('is-open');
				panel.classList.add('is-hidden');
				panel.hidden = true;
				panel.setAttribute('aria-hidden', 'true');
			});
			if (backdrop) backdrop.hidden = true;
			if (locked) {
				lockBody(false);
				locked = false;
			}
			if (returnFocus && previousTrigger) previousTrigger.focus({ preventScroll: true });
		};

		const openPanel = (key) => {
			const panel = getPanel(key);
			const trigger = getTrigger(key);
			if (!panel || !trigger) return;
			activeKey = key;
			triggers.forEach((candidate) => {
				const active = candidate === trigger;
				candidate.classList.toggle('is-active', active);
				setExpanded(candidate, active);
			});
			panels.forEach((candidate) => {
				const active = candidate === panel;
				candidate.classList.toggle('is-open', active);
				candidate.classList.toggle('is-hidden', !active);
				candidate.hidden = !active;
				candidate.setAttribute('aria-hidden', active ? 'false' : 'true');
			});
			if (backdrop) backdrop.hidden = false;
			if (!locked) {
				lockBody(true);
				locked = true;
			}
		};

		triggers.forEach((trigger) => {
			const key = keyOfTrigger(trigger);
			trigger.addEventListener('click', () => {
				if (activeKey === key) closeAll();
				else openPanel(key);
			});
		});

		document.addEventListener('keydown', (event) => {
			if (event.key === 'Escape' && activeKey) {
				event.preventDefault();
				closeAll({ returnFocus: true });
			}
		});

		document.addEventListener('pointerdown', (event) => {
			if (!activeKey) return;
			const panel = getPanel(activeKey);
			const trigger = getTrigger(activeKey);
			if ((panel && panel.contains(event.target)) || (trigger && trigger.contains(event.target))) return;
			closeAll();
		});

		if (backdrop) backdrop.addEventListener('click', () => closeAll());
		closeAll();
		window.nolanTheme07CloseHeaderMenu = closeAll;
	}

	function initMobileDrawer() {
		const root = q('[data-nolan-menu]');
		if (!root) return;
		const openButton = q('[data-nolan-mobile-open]', root);
		const drawer = q('[data-nolan-mobile-menu]', root);
		const closeButton = q('[data-nolan-mobile-close]', root);
		const backdrop = q('[data-nolan-menu-backdrop]', root);
		if (!openButton || !drawer) return;
		let open = false;

		const setOpen = (next) => {
			open = !!next;
			drawer.classList.toggle('is-open', open);
			drawer.setAttribute('aria-hidden', open ? 'false' : 'true');
			setExpanded(openButton, open);
			if (backdrop) backdrop.hidden = !open;
			lockBody(open);
			if (open) {
				const target = q('button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])', drawer);
				if (target) target.focus({ preventScroll: true });
			}
		};

		openButton.addEventListener('click', () => {
			if (window.nolanTheme07CloseHeaderMenu) window.nolanTheme07CloseHeaderMenu();
			setOpen(!open);
		});
		if (closeButton) closeButton.addEventListener('click', () => setOpen(false));
		if (backdrop) backdrop.addEventListener('click', () => open && setOpen(false));
		document.addEventListener('keydown', (event) => {
			if (event.key === 'Escape' && open) {
				event.preventDefault();
				setOpen(false);
				openButton.focus({ preventScroll: true });
			}
		});

		qa('[data-nolan-mobile-trigger]', drawer).forEach((trigger) => {
			const key = trigger.getAttribute('data-nolan-mobile-trigger');
			const panel = q(`[data-nolan-mobile-panel-content="${esc(key)}"]`, drawer);
			if (!panel) return;
			const expand = (expanded) => {
				setExpanded(trigger, expanded);
				panel.hidden = !expanded;
			};
			expand(false);
			trigger.addEventListener('click', () => expand(trigger.getAttribute('aria-expanded') !== 'true'));
		});
	}

	function initPortfolioFilter(root = document) {
		const buttons = qa('.filter-nav__btn, [data-filter-button]', root);
		const cards = qa('[data-work-card]', root);
		if (!buttons.length || !cards.length) return;
		const filter = (key) => {
			buttons.forEach((button) => {
				const active = (button.getAttribute('data-filter') || button.getAttribute('data-filter-button')) === key;
				button.classList.toggle('is-active', active);
				button.setAttribute('aria-pressed', active ? 'true' : 'false');
			});
			cards.forEach((card) => {
				const cat = (card.getAttribute('data-cat') || '').toLowerCase();
				const show = key === 'all' || cat === key;
				card.hidden = !show;
				card.dataset.hidden = show ? 'false' : 'true';
			});
		};
		buttons.forEach((button) => button.addEventListener('click', () => filter(button.getAttribute('data-filter') || button.getAttribute('data-filter-button') || 'all')));
		filter('all');
	}

	function initCarousel(root = document) {
		qa('[data-carousel]', root).forEach((carousel) => {
			const slides = qa('[data-carousel-slide]', carousel);
			const prev = q('[data-carousel-prev]', carousel);
			const next = q('[data-carousel-next]', carousel);
			if (!slides.length) return;
			let index = 0;
			const show = (nextIndex) => {
				index = (nextIndex + slides.length) % slides.length;
				slides.forEach((slide, i) => {
					const active = i === index;
					slide.classList.toggle('is-active', active);
					slide.hidden = !active;
					slide.setAttribute('aria-hidden', active ? 'false' : 'true');
				});
			};
			if (prev) prev.addEventListener('click', () => show(index - 1));
			if (next) next.addEventListener('click', () => show(index + 1));
			show(0);
		});
	}

	function initBeforeAfter(root = document) {
		qa('[data-before-after]', root).forEach((block) => {
			const range = q('input[type="range"]', block);
			const after = q('[data-after-image]', block);
			if (!range || !after) return;
			const update = () => after.style.clipPath = `inset(0 ${100 - Number(range.value)}% 0 0)`;
			range.addEventListener('input', update);
			update();
		});
	}

	function initTestimonials(root = document) {
		qa('[data-testimonials]', root).forEach((rotator) => {
			const items = qa('[data-testimonial]', rotator);
			const prev = q('[data-testimonial-prev]', rotator);
			const next = q('[data-testimonial-next]', rotator);
			if (!items.length) return;
			let index = 0;
			let timer = null;
			const show = (nextIndex) => {
				index = (nextIndex + items.length) % items.length;
				items.forEach((item, i) => {
					item.hidden = i !== index;
					item.classList.toggle('is-active', i === index);
				});
			};
			const stop = () => {
				if (timer) window.clearInterval(timer);
				timer = null;
			};
			const start = () => {
				if (reduceMotion() || timer) return;
				timer = window.setInterval(() => show(index + 1), 7000);
			};
			if (prev) prev.addEventListener('click', () => { stop(); show(index - 1); });
			if (next) next.addEventListener('click', () => { stop(); show(index + 1); });
			rotator.addEventListener('mouseenter', stop);
			rotator.addEventListener('focusin', stop);
			rotator.addEventListener('mouseleave', start);
			rotator.addEventListener('focusout', start);
			show(0);
			start();
		});
	}

	function initScrollReveal(root = document) {
		const items = qa('[data-reveal]', root);
		if (!items.length) return;
		if (reduceMotion() || !('IntersectionObserver' in window)) {
			items.forEach((item) => item.classList.add('is-in'));
			return;
		}
		const observer = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) return;
				entry.target.classList.add('is-in');
				observer.unobserve(entry.target);
			});
		}, { threshold: 0.12 });
		items.forEach((item) => observer.observe(item));
	}

	function initSmoothAnchors(root = document) {
		if (reduceMotion()) return;
		qa('a[href^="#"]', root).forEach((anchor) => {
			anchor.addEventListener('click', (event) => {
				const target = q(anchor.getAttribute('href'));
				if (!target) return;
				event.preventDefault();
				target.scrollIntoView({ behavior: 'smooth', block: 'start' });
			});
		});
	}

	function ready(callback) {
		if (document.readyState !== 'loading') callback();
		else document.addEventListener('DOMContentLoaded', callback);
	}

	ready(() => {
		initHeaderScrolledState();
		initRailPanels();
		initHeaderMenu();
		initMobileDrawer();
		initPortfolioFilter();
		initCarousel();
		initBeforeAfter();
		initTestimonials();
		initScrollReveal();
		initSmoothAnchors();
	});
})();
