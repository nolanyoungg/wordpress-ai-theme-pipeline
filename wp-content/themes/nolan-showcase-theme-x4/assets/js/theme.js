(function () {
	"use strict";

	var header = document.querySelector("[data-site-header]");
	var navToggle = document.querySelector("[data-nav-toggle]");
	var primaryNav = document.querySelector("[data-primary-nav]");
	var revealNodes = Array.prototype.slice.call(document.querySelectorAll(".reveal"));

	document.documentElement.classList.add("has-js");

	function setNavState(isOpen) {
		if (!primaryNav || !navToggle) {
			return;
		}
		primaryNav.classList.toggle("is-open", isOpen);
		navToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
	}

	if (navToggle && primaryNav) {
		navToggle.addEventListener("click", function () {
			var isOpen = primaryNav.classList.contains("is-open");
			setNavState(!isOpen);
		});

		document.addEventListener("keydown", function (event) {
			if (event.key === "Escape") {
				setNavState(false);
			}
		});

		document.addEventListener("click", function (event) {
			if (!primaryNav.classList.contains("is-open")) {
				return;
			}
			if (primaryNav.contains(event.target) || navToggle.contains(event.target)) {
				return;
			}
			setNavState(false);
		});
	}

	function onScroll() {
		if (!header) {
			return;
		}
		header.classList.toggle("is-sticky", window.scrollY > 10);
	}
	window.addEventListener("scroll", onScroll, { passive: true });
	onScroll();

	document.addEventListener("click", function (event) {
		var link = event.target.closest("a[href^=\"#\"]");
		if (!link) {
			return;
		}
		var href = link.getAttribute("href");
		if (!href || href.length < 2) {
			return;
		}
		var target = document.querySelector(href);
		if (!target) {
			return;
		}
		event.preventDefault();
		target.scrollIntoView({ behavior: "smooth", block: "start" });
		setNavState(false);
	});

	function animateCounter(node) {
		var end = parseInt(node.getAttribute("data-counter"), 10);
		if (!end || end < 1) {
			return;
		}
		var start = 0;
		var duration = 900;
		var startTime = null;

		function tick(timestamp) {
			if (!startTime) {
				startTime = timestamp;
			}
			var progress = Math.min((timestamp - startTime) / duration, 1);
			var value = Math.floor(start + (end - start) * progress);
			node.textContent = String(value);
			if (progress < 1) {
				window.requestAnimationFrame(tick);
			}
		}

		window.requestAnimationFrame(tick);
	}

	if ("IntersectionObserver" in window) {
		var observer = new IntersectionObserver(
			function (entries) {
				entries.forEach(function (entry) {
					if (!entry.isIntersecting) {
						return;
					}
					entry.target.classList.add("is-visible");
					entry.target.querySelectorAll("[data-counter]").forEach(animateCounter);
					observer.unobserve(entry.target);
				});
			},
			{ threshold: 0.14 }
		);
		revealNodes.forEach(function (node) {
			observer.observe(node);
		});
	} else {
		revealNodes.forEach(function (node) {
			node.classList.add("is-visible");
			node.querySelectorAll("[data-counter]").forEach(animateCounter);
		});
	}
})();

