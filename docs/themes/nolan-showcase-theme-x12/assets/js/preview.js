/**
 * Static preview navigation for Nolan Showcase Theme X12.
 *
 * Mirrors the WordPress theme behavior with no framework or runtime service.
 */
(function () {
	'use strict';
	const navToggle = document.querySelector('[data-nav-toggle]');
	const navDrawer = document.querySelector('[data-nav-drawer]');
	const triggers = Array.from(document.querySelectorAll('[data-dropdown-trigger]'));
	const closeDropdowns = (except) => triggers.forEach((trigger) => {
		if (trigger === except) return;
		const panel = document.getElementById(trigger.getAttribute('aria-controls'));
		trigger.setAttribute('aria-expanded', 'false');
		if (panel) panel.hidden = true;
	});
	if (navToggle && navDrawer) {
		navToggle.addEventListener('click', () => {
			const open = navToggle.getAttribute('aria-expanded') === 'true';
			navToggle.setAttribute('aria-expanded', String(!open));
			navDrawer.classList.toggle('is-open', !open);
		});
	}
	triggers.forEach((trigger) => {
		const panel = document.getElementById(trigger.getAttribute('aria-controls'));
		if (!panel) return;
		trigger.addEventListener('click', () => {
			const open = trigger.getAttribute('aria-expanded') === 'true';
			closeDropdowns(trigger);
			trigger.setAttribute('aria-expanded', String(!open));
			panel.hidden = open;
		});
		[trigger, panel].forEach((node) => node.addEventListener('keydown', (event) => {
			if (event.key === 'Escape') {
				closeDropdowns();
				trigger.focus();
			}
		}));
	});
	document.addEventListener('click', (event) => {
		if (!event.target.closest('.has-dropdown')) closeDropdowns();
	});
})();
