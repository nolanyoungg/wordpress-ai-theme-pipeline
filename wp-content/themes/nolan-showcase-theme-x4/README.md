# Nolan Showcase Theme X4

Premium classic WordPress theme for a landscaping / lawn care business site.

## Highlights

- Dark, near-black palette with emerald + lime accents and glassmorphism-like cards.
- Accessible navigation with skip link, focus-visible styles, and a real mobile menu button.
- Vanilla JS behaviors: sticky header, mobile nav toggle, smooth scroll, and scroll reveal (content stays visible without JS).
- Static homepage design in `front-page.php`, plus standard templates for posts, pages, archives, search, and 404.

## Theme structure

- `style.css`: WordPress theme header metadata (front-end styles are in `assets/css/theme.css`).
- `functions.php`: theme supports, menus, sidebar, and asset enqueueing with `filemtime()` cache busting.
- `front-page.php`: landscaping homepage sections (Services → Why us → Process → Projects → Areas → Testimonials → Pricing → Contact).
- `template-parts/`: reusable post/page/empty templates.
- `assets/`: local CSS/JS/SVG placeholders (no CDN usage).

## Customization tips

- Replace placeholder business name, phone, email, and service areas in `front-page.php`.
- Upload a real logo via **Appearance → Customize → Site Identity** (custom logo support is enabled).
- Create menus via **Appearance → Menus**, or rely on the built-in section anchor fallback menu.

