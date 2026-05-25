/**
 * File purpose: Static preview navigation behavior for Nolan Showcase Theme X11.
 * References: preview HTML pages and assets/css/preview.css.
 * Behavior: Handles accessible mobile drawer and dropdown ARIA state without dependencies.
 * Return values: No exported values.
 */
(function () {
	'use strict';
	document.addEventListener('DOMContentLoaded', function () {
		var toggle = document.querySelector('.menu-toggle');
		var drawer = document.getElementById('mobile-menu');
		var items = document.querySelectorAll('.menu-item-has-children');

		function closeDrawer() {
			if (!toggle || !drawer) {
				return;
			}
			toggle.setAttribute('aria-expanded', 'false');
			drawer.hidden = true;
		}

		if (toggle && drawer) {
			toggle.addEventListener('click', function () {
				var open = toggle.getAttribute('aria-expanded') === 'true';
				toggle.setAttribute('aria-expanded', open ? 'false' : 'true');
				drawer.hidden = open;
				if (!open) {
					var first = drawer.querySelector('a');
					if (first) {
						first.focus({ preventScroll: true });
					}
				}
			});
		}

		items.forEach(function (item, index) {
			var link = item.querySelector(':scope > a');
			var menu = item.querySelector(':scope > .sub-menu');
			if (!link || !menu) {
				return;
			}
			menu.id = menu.id || 'preview-submenu-' + index;
			link.setAttribute('aria-haspopup', 'true');
			link.setAttribute('aria-expanded', 'false');
			link.setAttribute('aria-controls', menu.id);
			item.addEventListener('mouseenter', function () { link.setAttribute('aria-expanded', 'true'); });
			item.addEventListener('mouseleave', function () { link.setAttribute('aria-expanded', 'false'); });
			item.addEventListener('focusin', function () { link.setAttribute('aria-expanded', 'true'); });
			item.addEventListener('focusout', function (event) {
				if (!item.contains(event.relatedTarget)) {
					link.setAttribute('aria-expanded', 'false');
				}
			});
		});

		document.addEventListener('keydown', function (event) {
			if (event.key === 'Escape') {
				closeDrawer();
				items.forEach(function (item) {
					var link = item.querySelector(':scope > a');
					if (link) {
						link.setAttribute('aria-expanded', 'false');
					}
				});
			}
		});

		window.addEventListener('resize', function () {
			if (window.matchMedia('(min-width: 921px)').matches) {
				closeDrawer();
			}
		});
	});
}());
