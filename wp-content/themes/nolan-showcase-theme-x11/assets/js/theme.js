/**
 * File purpose: Accessible navigation and small interaction behaviors for Nolan Showcase Theme X11.
 * References: header.php markup and assets/css/theme.css states.
 * Behavior: Handles mobile drawer, dropdown ARIA state, escape-to-close, and focus cleanup.
 * Return values: No exported values; behavior runs after DOMContentLoaded.
 */
(function () {
	'use strict';
	document.addEventListener('DOMContentLoaded', function () {
		var toggle = document.querySelector('.menu-toggle');
		var drawer = document.getElementById('mobile-menu');
		var navItems = document.querySelectorAll('.desktop-nav .menu-item-has-children, .mobile-drawer .menu-item-has-children');
		function closeDrawer() {
			if (!toggle || !drawer) { return; }
			toggle.setAttribute('aria-expanded', 'false');
			drawer.hidden = true;
			document.body.classList.remove('mobile-menu-open');
		}
		function openDrawer() {
			if (!toggle || !drawer) { return; }
			toggle.setAttribute('aria-expanded', 'true');
			drawer.hidden = false;
			document.body.classList.add('mobile-menu-open');
			var firstLink = drawer.querySelector('a, button');
			if (firstLink) { firstLink.focus({ preventScroll: true }); }
		}
		if (toggle && drawer) {
			toggle.addEventListener('click', function () {
				if (toggle.getAttribute('aria-expanded') === 'true') { closeDrawer(); } else { openDrawer(); }
			});
		}
		navItems.forEach(function (item, index) {
			var link = item.querySelector(':scope > a');
			var submenu = item.querySelector(':scope > .sub-menu');
			if (!link || !submenu) { return; }
			submenu.id = submenu.id || 'submenu-' + index;
			link.setAttribute('aria-haspopup', 'true');
			link.setAttribute('aria-expanded', 'false');
			link.setAttribute('aria-controls', submenu.id);
			item.addEventListener('mouseenter', function () { link.setAttribute('aria-expanded', 'true'); });
			item.addEventListener('mouseleave', function () { link.setAttribute('aria-expanded', 'false'); });
			item.addEventListener('focusin', function () { link.setAttribute('aria-expanded', 'true'); });
			item.addEventListener('focusout', function (event) { if (!item.contains(event.relatedTarget)) { link.setAttribute('aria-expanded', 'false'); } });
		});
		document.addEventListener('keydown', function (event) {
			if (event.key !== 'Escape') { return; }
			closeDrawer();
			document.querySelectorAll('[aria-expanded="true"]').forEach(function (node) {
				if (node.matches('.menu-item-has-children > a')) { node.setAttribute('aria-expanded', 'false'); }
			});
			if (toggle) { toggle.focus({ preventScroll: true }); }
		});
		window.addEventListener('resize', function () { if (window.matchMedia('(min-width: 921px)').matches) { closeDrawer(); } });
	});
}());
