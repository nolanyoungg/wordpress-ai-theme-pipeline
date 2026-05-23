(function () {
	'use strict';

	document.documentElement.classList.remove('no-js');
	document.documentElement.classList.add('js');

	var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	var header = document.querySelector('[data-site-header]');
	function setHeaderState() {
		if (!header) {
			return;
		}
		header.classList.toggle('is-scrolled', window.scrollY > 8);
	}
	window.addEventListener('scroll', setHeaderState, { passive: true });
	setHeaderState();

	var toggle = document.querySelector('[data-nav-toggle]');
	var nav = document.querySelector('[data-primary-nav]');
	if (toggle && nav) {
		toggle.addEventListener('click', function () {
			var isOpen = nav.classList.toggle('is-open');
			toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
		});
	}

	document.addEventListener('click', function (event) {
		if (!nav || !toggle) {
			return;
		}
		var isOpen = nav.classList.contains('is-open');
		if (!isOpen) {
			return;
		}
		if (nav.contains(event.target) || toggle.contains(event.target)) {
			return;
		}
		nav.classList.remove('is-open');
		toggle.setAttribute('aria-expanded', 'false');
	});

	function smoothScrollToId(hash) {
		if (!hash || hash.charAt(0) !== '#') {
			return;
		}
		var target = document.querySelector(hash);
		if (!target) {
			return;
		}
		var offset = header ? header.getBoundingClientRect().height : 0;
		var top = target.getBoundingClientRect().top + window.scrollY - offset - 12;
		window.scrollTo({ top: top, behavior: reduceMotion ? 'auto' : 'smooth' });
	}

	document.addEventListener('click', function (event) {
		var anchor = event.target.closest('a[href^="#"]');
		if (!anchor) {
			return;
		}
		var hash = anchor.getAttribute('href');
		if (!hash || hash === '#') {
			return;
		}
		if (!document.querySelector(hash)) {
			return;
		}
		event.preventDefault();
		smoothScrollToId(hash);
		history.pushState(null, '', hash);
	});

	var revealItems = Array.prototype.slice.call(document.querySelectorAll('.reveal'));
	if ('IntersectionObserver' in window && !reduceMotion) {
		var observer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					observer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.18 });
		revealItems.forEach(function (item) { observer.observe(item); });
	} else {
		revealItems.forEach(function (item) { item.classList.add('is-visible'); });
	}

	document.querySelectorAll('[data-tilt-card]').forEach(function (card) {
		card.addEventListener('pointermove', function (event) {
			if (reduceMotion) {
				return;
			}
			var rect = card.getBoundingClientRect();
			var x = ((event.clientX - rect.left) / rect.width - 0.5) * 6;
			var y = ((event.clientY - rect.top) / rect.height - 0.5) * -6;
			card.style.transform = 'translateY(-4px) rotateX(' + y.toFixed(2) + 'deg) rotateY(' + x.toFixed(2) + 'deg)';
		});
		card.addEventListener('pointerleave', function () {
			card.style.transform = '';
		});
	});
}());

