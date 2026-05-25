(function () {
	"use strict";
	var toggle = document.querySelector("[data-menu-toggle]");
	var nav = document.querySelector("[data-site-nav]");
	var body = document.body;
	function setMenu(open) {
		if (!toggle || !nav) return;
		toggle.setAttribute("aria-expanded", open ? "true" : "false");
		nav.classList.toggle("is-open", open);
		body.classList.toggle("menu-open", open);
	}
	if (toggle && nav) {
		toggle.addEventListener("click", function () { setMenu(toggle.getAttribute("aria-expanded") !== "true"); });
		nav.addEventListener("click", function (event) { if (event.target && event.target.closest("a")) setMenu(false); });
		document.addEventListener("keydown", function (event) { if (event.key === "Escape") setMenu(false); });
		window.addEventListener("resize", function () { if (window.innerWidth > 940) setMenu(false); });
	}
	var revealList = document.querySelector("[data-reveal-list]");
	if (revealList && "IntersectionObserver" in window) {
		var items = Array.prototype.slice.call(revealList.children);
		var observer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add("is-visible");
					observer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.2 });
		items.forEach(function (item) { observer.observe(item); });
	} else if (revealList) {
		Array.prototype.forEach.call(revealList.children, function (item) { item.classList.add("is-visible"); });
	}
}());

