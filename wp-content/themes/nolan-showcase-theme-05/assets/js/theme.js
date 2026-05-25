/**
 * File purpose: Static preview interactions for Nolan Showcase Theme 05.
 * References: docs/themes/nolan-showcase-theme-05/*.html and preview.css.
 * Behavior: Handles desktop panels, mobile drawer, filters, carousel, testimonials, and reveal states.
 * Return values: None.
 */
(function () {
	'use strict';

	const q = (sel, ctx = document) => ctx.querySelector(sel);
	const qa = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));

	function setHidden(el, hidden) {
		if (!el) return;
		el.hidden = hidden;
	}

	function initReveal() {
		const items = qa('[data-reveal]');
		if (!items.length || !('IntersectionObserver' in window)) {
			items.forEach((item) => item.classList.add('is-in'));
			return;
		}
		const io = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-in');
					io.unobserve(entry.target);
				}
			});
		}, { threshold: 0.18 });
		items.forEach((item) => io.observe(item));
	}

	function initDesktopPanels() {
		const header = q('[data-preview-header]');
		if (!header) return;
		const triggers = qa('[data-menu-item]', header);
		const panels = qa('[data-menu-dropdown]', header);
		const backdrop = q('[data-menu-backdrop]', header);
		let openKey = null;

		function initRail(panel) {
			const railButtons = qa('[data-rail-item]', panel);
			const sections = qa('[data-rail-content]', panel);
			if (!railButtons.length || !sections.length) return;
			const activate = (key) => {
				railButtons.forEach((btn) => {
					const active = btn.dataset.railItem === key;
					btn.classList.toggle('is-active', active);
					btn.setAttribute('aria-selected', active ? 'true' : 'false');
				});
				sections.forEach((section) => {
					const active = section.dataset.railContent === key;
					section.classList.toggle('is-active', active);
					setHidden(section, !active);
				});
			};
			activate(railButtons[0].dataset.railItem);
			railButtons.forEach((btn) => {
				btn.addEventListener('mouseenter', () => activate(btn.dataset.railItem));
				btn.addEventListener('focus', () => activate(btn.dataset.railItem));
				btn.addEventListener('click', () => activate(btn.dataset.railItem));
			});
		}

		function closeAll() {
			openKey = null;
			triggers.forEach((btn) => btn.setAttribute('aria-expanded', 'false'));
			panels.forEach((panel) => setHidden(panel, true));
			setHidden(backdrop, true);
			document.body.classList.remove('is-locked');
		}

		function openPanel(key) {
			const trigger = q(`[data-menu-item="${key}"]`, header);
			const panel = q(`[data-menu-dropdown="${key}"]`, header);
			if (!trigger || !panel) return;
			openKey = key;
			triggers.forEach((btn) => btn.setAttribute('aria-expanded', btn === trigger ? 'true' : 'false'));
			panels.forEach((node) => setHidden(node, node !== panel));
			setHidden(backdrop, false);
			document.body.classList.add('is-locked');
			initRail(panel);
		}

		triggers.forEach((trigger) => {
			trigger.addEventListener('click', () => {
				const key = trigger.dataset.menuItem;
				if (openKey === key) closeAll(); else openPanel(key);
			});
			trigger.addEventListener('keydown', (event) => {
				if (event.key === 'Enter' || event.key === ' ') {
					event.preventDefault();
					trigger.click();
				}
				if (event.key === 'Escape') {
					event.preventDefault();
					closeAll();
				}
			});
		});

		if (backdrop) backdrop.addEventListener('click', closeAll);
		document.addEventListener('keydown', (event) => {
			if (event.key === 'Escape' && openKey) closeAll();
		});
		document.addEventListener('pointerdown', (event) => {
			if (!openKey) return;
			const panel = q(`[data-menu-dropdown="${openKey}"]`, header);
			const trigger = q(`[data-menu-item="${openKey}"]`, header);
			if (panel && (panel.contains(event.target) || trigger.contains(event.target) || header.contains(event.target))) return;
			closeAll();
		});
	}

	function initMobileMenu() {
		const toggle = q('[data-mobile-toggle]');
		const drawer = q('[data-mobile-drawer]');
		const closeBtn = q('[data-mobile-close]', drawer || document);
		if (!toggle || !drawer || !closeBtn) return;

		const accordions = qa('[data-mobile-trigger]', drawer);
		let lastFocus = null;

		function closeDrawer() {
			setHidden(drawer, true);
			toggle.setAttribute('aria-expanded', 'false');
			document.body.classList.remove('is-locked');
			accordions.forEach((btn) => {
				btn.setAttribute('aria-expanded', 'false');
				setHidden(q(`[data-mobile-panel="${btn.dataset.mobileTrigger}"]`, drawer), true);
			});
			if (lastFocus) lastFocus.focus({ preventScroll: true });
		}

		function openDrawer() {
			lastFocus = document.activeElement instanceof HTMLElement ? document.activeElement : null;
			setHidden(drawer, false);
			toggle.setAttribute('aria-expanded', 'true');
			document.body.classList.add('is-locked');
			closeBtn.focus({ preventScroll: true });
		}

		toggle.addEventListener('click', () => {
			if (drawer.hidden) openDrawer(); else closeDrawer();
		});
		closeBtn.addEventListener('click', closeDrawer);
		document.addEventListener('keydown', (event) => {
			if (event.key === 'Escape' && !drawer.hidden) closeDrawer();
		});

		accordions.forEach((btn) => {
			const panel = q(`[data-mobile-panel="${btn.dataset.mobileTrigger}"]`, drawer);
			if (!panel) return;
			btn.addEventListener('click', () => {
				const open = btn.getAttribute('aria-expanded') === 'true';
				accordions.forEach((other) => {
					other.setAttribute('aria-expanded', 'false');
					setHidden(q(`[data-mobile-panel="${other.dataset.mobileTrigger}"]`, drawer), true);
				});
				if (!open) {
					btn.setAttribute('aria-expanded', 'true');
					setHidden(panel, false);
				}
			});
		});
	}

	function initFilters() {
		const nav = q('[data-work-filters]');
		if (!nav) return;
		const buttons = qa('[data-filter]', nav);
		const cards = qa('[data-work-card]');
		if (!buttons.length || !cards.length) return;

		function applyFilter(value) {
			buttons.forEach((btn) => {
				const active = btn.dataset.filter === value;
				btn.classList.toggle('is-active', active);
				btn.setAttribute('aria-pressed', active ? 'true' : 'false');
			});
			cards.forEach((card) => {
				const visible = value === 'all' || card.dataset.cat === value;
				card.classList.toggle('is-hidden', !visible);
				card.dataset.hidden = visible ? 'false' : 'true';
			});
		}

		buttons.forEach((btn) => btn.addEventListener('click', () => applyFilter(btn.dataset.filter)));
		applyFilter('all');
	}

	function initCarousel() {
		const root = q('[data-carousel]');
		if (!root) return;
		const slides = qa('[data-carousel-slide]', root);
		const prev = q('[data-carousel-prev]', root);
		const next = q('[data-carousel-next]', root);
		const dotsWrap = q('[data-carousel-dots]', root);
		let current = 0;

		function show(index) {
			current = (index + slides.length) % slides.length;
			slides.forEach((slide, idx) => {
				const active = idx === current;
				slide.hidden = !active;
				slide.setAttribute('aria-hidden', active ? 'false' : 'true');
			});
			if (dotsWrap) {
				qa('button', dotsWrap).forEach((dot, idx) => dot.classList.toggle('is-active', idx === current));
			}
		}

		if (dotsWrap) {
			slides.forEach((_slide, idx) => {
				const dot = document.createElement('button');
				dot.type = 'button';
				dot.className = 'carousel__dot' + (idx === 0 ? ' is-active' : '');
				dot.setAttribute('aria-label', `Slide ${idx + 1}`);
				dot.addEventListener('click', () => show(idx));
				dotsWrap.appendChild(dot);
			});
		}
		if (prev) prev.addEventListener('click', () => show(current - 1));
		if (next) next.addEventListener('click', () => show(current + 1));
		show(0);
	}

	function initTestimonials() {
		const root = q('[data-testimonials]');
		if (!root) return;
		const panels = qa('[data-testimonial]', root);
		const buttons = qa('[data-testimonial-nav]', root);
		let current = 0;
		let timer = null;

		function show(index) {
			current = (index + panels.length) % panels.length;
			panels.forEach((panel, idx) => {
				const active = idx === current;
				panel.hidden = !active;
				panel.setAttribute('aria-hidden', active ? 'false' : 'true');
				panel.classList.toggle('is-active', active);
			});
			buttons.forEach((btn, idx) => btn.classList.toggle('is-active', idx === current));
		}

		function start() {
			if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
			stop();
			timer = window.setInterval(() => show(current + 1), 6500);
		}

		function stop() {
			if (timer) {
				window.clearInterval(timer);
				timer = null;
			}
		}

		buttons.forEach((btn, idx) => {
			btn.addEventListener('click', () => {
				show(idx);
				start();
			});
		});
		root.addEventListener('mouseenter', stop);
		root.addEventListener('mouseleave', start);
		root.addEventListener('focusin', stop);
		root.addEventListener('focusout', start);
		show(0);
		start();
	}

	document.addEventListener('DOMContentLoaded', () => {
		initReveal();
		initDesktopPanels();
		initMobileMenu();
		initFilters();
		initCarousel();
		initTestimonials();
	});
}());
