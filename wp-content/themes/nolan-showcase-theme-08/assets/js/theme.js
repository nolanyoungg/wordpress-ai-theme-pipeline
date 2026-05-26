(function () {
	'use strict';

	var toggle = document.querySelector('[data-nav-toggle]');
	var menu = document.querySelector('[data-nav-menu]');

	if (toggle && menu) {
		toggle.addEventListener('click', function () {
			var expanded = toggle.getAttribute('aria-expanded') === 'true';
			toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
			menu.classList.toggle('is-open', !expanded);
		});
	}

	var revealItems = document.querySelectorAll('.layer-card, .wide-card, .case-card, .process-row, .dashboard-stack');
	revealItems.forEach(function (item) {
		item.classList.add('reveal');
	});

	if ('IntersectionObserver' in window) {
		var observer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					observer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.15 });

		revealItems.forEach(function (item) {
			observer.observe(item);
		});
	} else {
		revealItems.forEach(function (item) {
			item.classList.add('is-visible');
		});
	}
}());
