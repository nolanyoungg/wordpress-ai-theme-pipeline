/**
 * Nolan Showcase Theme X10 — static preview interactions (vanilla JS, no jQuery).
 *
 * Purpose:
 * - Sticky header scrolled state.
 * - Accessible Nolan mega menu:
 *   - Desktop disclosure panels (solid background) with backdrop + scroll lock.
 *   - One panel open at a time; outside click + Escape closes.
 *   - Rail interaction: hover + keyboard focus updates the right content.
 * - Accessible mobile drawer:
 *   - Open/close via button, backdrop click, Escape.
 *   - Accordion sections for What We Do / Who We Are / Resources.
 * - Interactive front page:
 *   1) Featured Work filter chips (keyboard + animation).
 *   2) Spotlight carousel (buttons + ARIA state).
 *   3) Before/After reveal slider (range input).
 *   4) Testimonials rotator (buttons + pause on hover/focus; no autoplay on reduced motion).
 *   5) Scroll reveal (disabled for reduced motion).
 *   6) Optional count-up stats (no layout shift; disabled for reduced motion).
 *
 * Pre:
 * - Markup uses the required class naming and data attributes described in the X10 brief.
 *
 * Post:
 * - Progressive enhancement: the preview remains readable and navigable with JS disabled.
 */

(() => {
	'use strict';

	/** @param {string} sel @param {ParentNode} [ctx] */
	const q = (sel, ctx = document) => ctx.querySelector(sel);
	/** @param {string} sel @param {ParentNode} [ctx] */
	const qa = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));

	/** @param {unknown} val */
	const esc = (val) => {
		const str = String(val ?? '');
		if (window.CSS && typeof window.CSS.escape === 'function') return window.CSS.escape(str);
		return str.replace(/[^a-zA-Z0-9_-]/g, '\\$&');
	};

	/** @param {Element|null} el @param {Element|null} container */
	const isWithin = (el, container) => {
		if (!el || !container) return false;
		return el === container || container.contains(el);
	};

	/** @returns {boolean} */
	const prefersReducedMotion = () => {
		try {
			return !!(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);
		} catch {
			return false;
		}
	};

	/**
	 * Toggle scroll locking on the body and compensate for scrollbar width.
	 *
	 * @param {boolean} locked
	 * @returns {void}
	 */
	function setScrollLocked(locked) {
		const body = document.body;
		if (!body) return;

		const alreadyLocked = body.classList.contains('is-scroll-locked');
		if (locked === alreadyLocked) return;

		if (locked) {
			const scrollbar = Math.max(0, window.innerWidth - document.documentElement.clientWidth);
			body.classList.add('is-scroll-locked');
			body.style.overflow = 'hidden';
			if (scrollbar) body.style.paddingRight = `${scrollbar}px`;
			return;
		}

		body.classList.remove('is-scroll-locked');
		body.style.overflow = '';
		body.style.paddingRight = '';
	}

	/**
	 * Apply sticky header scrolled styling.
	 *
	 * @returns {void}
	 */
	function initHeaderScrolledState() {
		const header = q('.nolan-header');
		if (!header) return;

		const onScroll = () => header.classList.toggle('is-scrolled', (window.scrollY || 0) > 10);
		onScroll();
		window.addEventListener('scroll', onScroll, { passive: true });
	}

	/**
	 * Initialize rail behavior inside mega panels.
	 *
	 * @param {HTMLElement} panel
	 * @returns {void}
	 */
	function initRail(panel) {
		const railButtons = qa('button[data-rail-item]', panel);
		const contentSections = qa('section[data-rail-content]', panel);
		if (!railButtons.length || !contentSections.length) return;

		/** @param {string} key */
		const setActive = (key) => {
			railButtons.forEach((btn) => {
				const active = btn.dataset.railItem === key;
				btn.classList.toggle('is-active', active);
				btn.setAttribute('aria-selected', active ? 'true' : 'false');
			});
			contentSections.forEach((section) => {
				const active = section.dataset.railContent === key;
				section.classList.toggle('is-active', active);
				section.hidden = !active;
			});
		};

		const firstKey = railButtons[0]?.dataset.railItem;
		if (firstKey) setActive(firstKey);

		railButtons.forEach((btn, idx) => {
			const key = btn.dataset.railItem;
			if (!key) return;

			const activate = () => setActive(key);
			btn.addEventListener('mouseenter', activate);
			btn.addEventListener('focus', activate);
			btn.addEventListener('click', activate);

			btn.addEventListener('keydown', (e) => {
				if (e.key === 'Enter' || e.key === ' ') {
					e.preventDefault();
					activate();
					return;
				}
				if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
					e.preventDefault();
					const next = e.key === 'ArrowDown' ? idx + 1 : idx - 1;
					const target = railButtons[(next + railButtons.length) % railButtons.length];
					if (target) target.focus();
				}
			});
		});
	}

	/**
	 * Initialize desktop mega menu.
	 *
	 * @returns {{ closeAll: () => void }}
	 */
	function initMegaMenu() {
		const header = q('.nolan-header');
		if (!header) return { closeAll: () => {} };

		const triggers = qa('button[data-menu-item]', header);
		const panelsWrap = q('[data-nolan-menu-panels]', header);
		const panels = panelsWrap ? qa('div[data-menu-dropdown]', panelsWrap) : [];
		const backdrop = q('[data-nolan-menu-backdrop]', header);

		if (!triggers.length || !panels.length || !backdrop) return { closeAll: () => {} };

		let openKey = null;

		/** @param {string} key */
		const getTrigger = (key) => q(`button[data-menu-item="${esc(key)}"]`, header);
		/** @param {string} key */
		const getPanel = (key) => q(`div[data-menu-dropdown="${esc(key)}"]`, panelsWrap);

		const closeAll = () => {
			openKey = null;
			triggers.forEach((t) => {
				t.classList.remove('is-active');
				t.setAttribute('aria-expanded', 'false');
			});
			panels.forEach((p) => {
				p.hidden = true;
				p.classList.remove('is-open');
			});
			backdrop.hidden = true;
			setScrollLocked(false);
		};

		/** @param {string} key */
		const open = (key) => {
			const trigger = getTrigger(key);
			const panel = getPanel(key);
			if (!trigger || !panel) return;

			if (openKey && openKey !== key) closeAll();
			openKey = key;

			triggers.forEach((t) => {
				const active = t === trigger;
				t.classList.toggle('is-active', active);
				t.setAttribute('aria-expanded', active ? 'true' : 'false');
			});

			panels.forEach((p) => {
				const active = p === panel;
				p.hidden = !active;
				p.classList.toggle('is-open', active);
			});

			backdrop.hidden = false;
			setScrollLocked(true);

			initRail(panel);
		};

		/** @param {string} key */
		const toggle = (key) => {
			if (!key) return;
			if (openKey === key) return closeAll();
			open(key);
		};

		triggers.forEach((btn) => {
			const key = btn.dataset.menuItem;
			if (!key) return;

			btn.addEventListener('click', () => toggle(key));
			btn.addEventListener('keydown', (e) => {
				if (e.key === 'Enter' || e.key === ' ') {
					e.preventDefault();
					toggle(key);
				}
				if (e.key === 'Escape') {
					e.preventDefault();
					closeAll();
					btn.focus();
				}
			});
		});

		backdrop.addEventListener('click', closeAll);

		document.addEventListener('keydown', (e) => {
			if (e.key !== 'Escape' || !openKey) return;
			e.preventDefault();
			const activeTrigger = openKey ? getTrigger(openKey) : null;
			closeAll();
			if (activeTrigger) activeTrigger.focus();
		});

		document.addEventListener('pointerdown', (e) => {
			if (!openKey) return;
			const panel = openKey ? getPanel(openKey) : null;
			const trigger = openKey ? getTrigger(openKey) : null;
			if (isWithin(e.target, panel) || isWithin(e.target, trigger) || isWithin(e.target, header)) return;
			closeAll();
		});

		return { closeAll };
	}

	/**
	 * Initialize mobile drawer + accordions.
	 *
	 * @param {() => void} closeDesktop
	 * @returns {{ close: () => void }}
	 */
	function initMobileMenu(closeDesktop) {
		const header = q('.nolan-header');
		if (!header) return { close: () => {} };

		const openBtn = q('[data-nolan-mobile-open]', header);
		const closeBtn = q('[data-nolan-mobile-close]', header);
		const drawer = q('[data-nolan-mobile-menu]', header);
		const backdrop = q('[data-nolan-menu-backdrop]', header);
		if (!openBtn || !drawer || !backdrop) return { close: () => {} };

		let isOpen = false;
		let lastActive = null;

		const focusFirst = () => {
			const focusable = q('a,button,input,select,textarea,[tabindex]:not([tabindex="-1"])', drawer);
			if (focusable) focusable.focus({ preventScroll: true });
		};

		/** @param {boolean} next */
		const setOpen = (next) => {
			isOpen = !!next;
			drawer.classList.toggle('is-open', isOpen);
			drawer.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
			openBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
			backdrop.hidden = !isOpen;
			setScrollLocked(isOpen);

			if (isOpen) {
				closeDesktop();
				lastActive = document.activeElement;
				focusFirst();
				return;
			}

			if (lastActive && lastActive instanceof HTMLElement) {
				lastActive.focus({ preventScroll: true });
			} else {
				openBtn.focus({ preventScroll: true });
			}
		};

		const open = () => setOpen(true);
		const close = () => setOpen(false);

		openBtn.addEventListener('click', () => (isOpen ? close() : open()));
		if (closeBtn) closeBtn.addEventListener('click', close);
		backdrop.addEventListener('click', () => {
			if (!isOpen) return;
			close();
		});

		document.addEventListener('keydown', (e) => {
			if (e.key !== 'Escape' || !isOpen) return;
			e.preventDefault();
			close();
		});

		qa('[data-nolan-mobile-trigger]', drawer).forEach((trigger) => {
			const key = trigger.dataset.nolanMobileTrigger;
			const panel = key ? q(`[data-nolan-mobile-panel-content="${esc(key)}"]`, drawer) : null;
			if (!panel) return;

			const setExpanded = (expanded) => {
				trigger.setAttribute('aria-expanded', expanded ? 'true' : 'false');
				panel.hidden = !expanded;
			};

			setExpanded(false);

			trigger.addEventListener('click', () => setExpanded(trigger.getAttribute('aria-expanded') !== 'true'));
			trigger.addEventListener('keydown', (e) => {
				if (e.key === 'Enter' || e.key === ' ') {
					e.preventDefault();
					trigger.click();
				}
			});
		});

		if (prefersReducedMotion()) {
			drawer.style.transition = 'none';
		}

		return { close };
	}

	/**
	 * Featured work filter chips.
	 *
	 * Markup contract:
	 * - Container: `[data-work-filters]`
	 * - Chip buttons: `button[data-filter]` with `aria-pressed`
	 * - Cards: `[data-work-card]` with `data-cat="portrait|weddings|..."` and `data-hidden="false|true"`
	 *
	 * @returns {void}
	 */
	function initWorkFilter() {
		const root = q('[data-work-filters]');
		if (!root) return;

		const buttons = qa('button[data-filter]', root);
		const cards = qa('[data-work-card]');
		if (!buttons.length || !cards.length) return;

		/** @param {string} filter */
		const setFilter = (filter) => {
			buttons.forEach((btn) => {
				const active = (btn.dataset.filter || 'all') === filter;
				btn.classList.toggle('is-active', active);
				btn.setAttribute('aria-pressed', active ? 'true' : 'false');
			});

			cards.forEach((card) => {
				const cat = (card.getAttribute('data-cat') || '').toLowerCase();
				const show = filter === 'all' || cat === filter;
				card.dataset.hidden = show ? 'false' : 'true';
				card.style.pointerEvents = show ? '' : 'none';
			});
		};

		setFilter(buttons.find((b) => b.dataset.filter === 'all') ? 'all' : (buttons[0]?.dataset.filter || 'all'));
		buttons.forEach((btn) => btn.addEventListener('click', () => setFilter(btn.dataset.filter || 'all')));

		root.addEventListener('keydown', (e) => {
			if (e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') return;
			const currentIdx = buttons.findIndex((b) => b.classList.contains('is-active'));
			if (currentIdx < 0) return;
			e.preventDefault();
			const dir = e.key === 'ArrowRight' ? 1 : -1;
			const next = buttons[(currentIdx + dir + buttons.length) % buttons.length];
			if (next) next.focus();
		});
	}

	/**
	 * Spotlight carousel.
	 *
	 * Markup contract:
	 * - Root: `[data-carousel]`
	 * - Slides: `[data-carousel-slide]`
	 * - Prev/Next: buttons `[data-carousel-prev]` / `[data-carousel-next]`
	 * - Dots: buttons `[data-carousel-dot]` with `data-slide`
	 *
	 * @returns {void}
	 */
	function initCarousel() {
		const root = q('[data-carousel]');
		if (!root) return;

		const slides = qa('[data-carousel-slide]', root);
		if (!slides.length) return;

		const prev = q('[data-carousel-prev]', root);
		const next = q('[data-carousel-next]', root);
		const dots = qa('[data-carousel-dot]', root);

		let idx = 0;

		/** @param {number} nextIdx */
		const show = (nextIdx) => {
			idx = (nextIdx + slides.length) % slides.length;
			slides.forEach((s, i) => {
				const active = i === idx;
				s.hidden = !active;
				s.setAttribute('aria-hidden', active ? 'false' : 'true');
			});
			dots.forEach((d) => {
				const active = Number(d.dataset.slide || 0) === idx;
				d.classList.toggle('is-active', active);
				d.setAttribute('aria-pressed', active ? 'true' : 'false');
			});
		};

		show(0);

		if (prev) prev.addEventListener('click', () => show(idx - 1));
		if (next) next.addEventListener('click', () => show(idx + 1));
		dots.forEach((d) => d.addEventListener('click', () => show(Number(d.dataset.slide || 0))));
	}

	/**
	 * Before/After reveal (range slider).
	 *
	 * Markup contract:
	 * - Root: `[data-before-after]` with a CSS variable `--ba` in percent.
	 * - Input: `input[type="range"][data-before-after-range]`
	 *
	 * @returns {void}
	 */
	function initBeforeAfter() {
		const root = q('[data-before-after]');
		if (!root) return;
		const range = q('input[type="range"][data-before-after-range]', root);
		if (!range) return;

		const apply = () => {
			const val = Number(range.value || 50);
			root.style.setProperty('--ba', `${val}%`);
			range.setAttribute('aria-valuenow', String(val));
		};

		apply();
		range.addEventListener('input', apply);
	}

	/**
	 * Testimonials rotator.
	 *
	 * Markup contract:
	 * - Root: `[data-testimonials]`
	 * - Items: `[data-testimonial]`
	 * - Buttons: `button[data-testimonial-btn]` with `data-slide`
	 *
	 * @returns {void}
	 */
	function initTestimonialsRotator() {
		const root = q('[data-testimonials]');
		if (!root) return;

		const items = qa('[data-testimonial]', root);
		const buttons = qa('button[data-testimonial-btn]', root);
		if (!items.length || !buttons.length) return;

		let idx = 0;
		let timer = null;
		const allowAuto = !prefersReducedMotion();

		/** @param {number} nextIdx */
		const show = (nextIdx) => {
			idx = (nextIdx + items.length) % items.length;
			items.forEach((item, i) => {
				const active = i === idx;
				item.hidden = !active;
				item.setAttribute('aria-hidden', active ? 'false' : 'true');
			});
			buttons.forEach((b) => {
				const active = Number(b.dataset.slide || 0) === idx;
				b.classList.toggle('is-active', active);
				b.setAttribute('aria-pressed', active ? 'true' : 'false');
			});
		};

		const stop = () => {
			if (!timer) return;
			window.clearInterval(timer);
			timer = null;
		};

		const start = () => {
			if (!allowAuto || timer) return;
			timer = window.setInterval(() => show(idx + 1), 7000);
		};

		show(0);
		start();

		buttons.forEach((b) => b.addEventListener('click', () => show(Number(b.dataset.slide || 0))));
		root.addEventListener('mouseenter', stop);
		root.addEventListener('mouseleave', start);
		root.addEventListener('focusin', stop);
		root.addEventListener('focusout', start);
	}

	/**
	 * Scroll reveal using IntersectionObserver.
	 *
	 * @returns {void}
	 */
	function initReveal() {
		const els = qa('[data-reveal]');
		if (!els.length) return;

		if (prefersReducedMotion() || !('IntersectionObserver' in window)) {
			els.forEach((el) => el.classList.add('is-in'));
			return;
		}

		const obs = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (!entry.isIntersecting) return;
					entry.target.classList.add('is-in');
					obs.unobserve(entry.target);
				});
			},
			{ threshold: 0.12 }
		);

		els.forEach((el) => obs.observe(el));
	}

	/**
	 * Optional stats count-up (disabled for reduced motion).
	 *
	 * Markup contract:
	 * - Elements: `[data-countup]` with `data-to="number"`
	 *
	 * @returns {void}
	 */
	function initCountUp() {
		if (prefersReducedMotion()) return;
		const items = qa('[data-countup]');
		if (!items.length) return;

		const startFor = (el) => {
			const to = Number(el.getAttribute('data-to') || 0);
			if (!Number.isFinite(to) || to <= 0) return;

			let current = 0;
			const steps = 36;
			const inc = Math.max(1, Math.round(to / steps));
			const tick = () => {
				current = Math.min(to, current + inc);
				el.textContent = String(current);
				if (current >= to) return;
				window.requestAnimationFrame(tick);
			};

			window.requestAnimationFrame(tick);
		};

		if (!('IntersectionObserver' in window)) {
			items.forEach(startFor);
			return;
		}

		const obs = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (!entry.isIntersecting) return;
					startFor(entry.target);
					obs.unobserve(entry.target);
				});
			},
			{ threshold: 0.35 }
		);
		items.forEach((el) => obs.observe(el));
	}

	/**
	 * Run initializers when the document is ready.
	 *
	 * @param {() => void} fn
	 * @returns {void}
	 */
	function ready(fn) {
		if (document.readyState !== 'loading') fn();
		else document.addEventListener('DOMContentLoaded', fn);
	}

	ready(() => {
		initHeaderScrolledState();
		const desktop = initMegaMenu();
		const mobile = initMobileMenu(desktop.closeAll);

		window.addEventListener('resize', () => {
			mobile.close();
			desktop.closeAll();
		});

		initWorkFilter();
		initCarousel();
		initBeforeAfter();
		initTestimonialsRotator();
		initReveal();
		initCountUp();
	});
})();
