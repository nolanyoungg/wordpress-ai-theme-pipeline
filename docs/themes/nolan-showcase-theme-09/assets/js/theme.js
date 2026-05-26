(function () {
	'use strict';

	var toggle = document.querySelector('[data-nav-toggle]');
	var menu = document.querySelector('[data-nav-menu]');

	if (!toggle || !menu) {
		return;
	}

	toggle.addEventListener('click', function () {
		var isOpen = menu.classList.toggle('is-open');
		toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
	});

	document.addEventListener('keydown', function (event) {
		if (event.key === 'Escape' && menu.classList.contains('is-open')) {
			menu.classList.remove('is-open');
			toggle.setAttribute('aria-expanded', 'false');
			toggle.focus();
		}
	});
})();
