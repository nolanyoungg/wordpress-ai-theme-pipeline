/**
 * Handles accessible navigation interactions for Nolan Showcase Theme X12.
 *
 * Connects to header.php via data attributes. Assumes no jQuery and no remote
 * dependencies. Keeps desktop dropdowns and mobile drawer keyboard friendly.
 */
(function () {
	'use strict';

	const navToggle = document.querySelector('[data-nav-toggle]');
	const navDrawer = document.querySelector('[data-nav-drawer]');
	const dropdownTriggers = Array.from(document.querySelectorAll('[data-dropdown-trigger]'));

	function closeDropdowns(except) {
		dropdownTriggers.forEach((trigger) => {
			if (trigger === except) {
				return;
			}
			const panel = document.getElementById(trigger.getAttribute('aria-controls'));
			trigger.setAttribute('aria-expanded', 'false');
			if (panel) {
				panel.hidden = true;
			}
		});
	}

	if (navToggle && navDrawer) {
		navToggle.addEventListener('click', () => {
			const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
			navToggle.setAttribute('aria-expanded', String(!isOpen));
			navDrawer.classList.toggle('is-open', !isOpen);
			document.body.classList.toggle('nav-open', !isOpen);
		});
	}

	dropdownTriggers.forEach((trigger) => {
		const panel = document.getElementById(trigger.getAttribute('aria-controls'));
		if (!panel) {
			return;
		}
		trigger.addEventListener('click', () => {
			const isOpen = trigger.getAttribute('aria-expanded') === 'true';
			closeDropdowns(trigger);
			trigger.setAttribute('aria-expanded', String(!isOpen));
			panel.hidden = isOpen;
		});
		trigger.addEventListener('keydown', (event) => {
			if (event.key === 'Escape') {
				closeDropdowns();
				trigger.focus();
			}
		});
		panel.addEventListener('keydown', (event) => {
			if (event.key === 'Escape') {
				closeDropdowns();
				trigger.focus();
			}
		});
	});

	document.addEventListener('click', (event) => {
		if (!event.target.closest('.has-dropdown')) {
			closeDropdowns();
		}
	});
})();
