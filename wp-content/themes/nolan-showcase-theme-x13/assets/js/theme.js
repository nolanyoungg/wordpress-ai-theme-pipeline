/**
 * Purpose: Accessible navigation behavior for Nolan Showcase Theme X13.
 * WordPress role: Enqueued by functions.php in the footer.
 * Related files: header.php, assets/css/theme.css.
 * Important behavior: Toggles the mobile drawer, handles dropdown state, Escape close, and outside click close without trapping focus.
 */
(function () {
  'use strict';

  var body = document.body;
  var toggle = document.querySelector('.menu-toggle');
  var nav = document.getElementById('primary-navigation');
  var parents = document.querySelectorAll('.primary-menu .menu-item-has-children, .primary-menu .has-dropdown');

  function closeMenus() {
    parents.forEach(function (item) { item.classList.remove('is-open'); });
  }

  function setDrawer(open) {
    if (!toggle || !nav) return;
    body.classList.toggle('menu-open', open);
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  }

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      setDrawer(toggle.getAttribute('aria-expanded') !== 'true');
    });
  }

  parents.forEach(function (item) {
    var link = item.querySelector('a');
    if (!link) return;
    link.setAttribute('aria-haspopup', 'true');
    link.setAttribute('aria-expanded', 'false');
    link.addEventListener('click', function (event) {
      if (window.matchMedia('(max-width: 980px)').matches) {
        event.preventDefault();
        var open = item.classList.toggle('is-open');
        link.setAttribute('aria-expanded', open ? 'true' : 'false');
      }
    });
    item.addEventListener('mouseenter', function () { link.setAttribute('aria-expanded', 'true'); });
    item.addEventListener('mouseleave', function () { link.setAttribute('aria-expanded', 'false'); item.classList.remove('is-open'); });
    item.addEventListener('focusin', function () { item.classList.add('is-open'); link.setAttribute('aria-expanded', 'true'); });
    item.addEventListener('focusout', function () {
      window.setTimeout(function () {
        if (!item.contains(document.activeElement)) {
          item.classList.remove('is-open');
          link.setAttribute('aria-expanded', 'false');
        }
      }, 10);
    });
  });

  document.addEventListener('click', function (event) {
    if (nav && toggle && !nav.contains(event.target) && !toggle.contains(event.target)) {
      setDrawer(false);
      closeMenus();
    }
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      setDrawer(false);
      closeMenus();
      if (toggle) toggle.focus();
    }
  });
})();
