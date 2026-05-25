# Nolan Showcase Theme X11 (MNY Photo)

Premium, bright editorial/cinematic photography studio theme for **MNY Photo**.

## Overview

Nolan Showcase Theme X11 is a classic (PHP) WordPress theme designed to feel like a real premium photography studio website:

- Bright editorial palette (warm whites/ivories, champagne accents, charcoal text)
- Premium “Nolan” mega-header with solid, readable panels and keyboard-first interactions
- Highly interactive front page (progressive enhancement; content remains usable with JS disabled)
- No external runtime services: no CDNs, no API keys, no paid dependencies

## Folder structure

- `assets/css/theme.css` — production theme styles (enqueued)
- `assets/js/theme.js` — production theme scripts (enqueued)
- `assets/images/` — local demo photography + SVG marks (no hotlinks)
- `scss/` — source SCSS organization (not required at runtime; included for maintainability)
- `template-parts/` — reusable content blocks for classic templates
- `page-templates/` — fully designed page templates (not just `the_content()`)

## Features

- **Header + navigation**
  - Desktop: click-to-open mega panels with a full-page backdrop and body scroll lock
  - Left rail updates right content on hover and on keyboard focus (`Tab`)
  - Escape and outside click close; only one panel open at a time; `aria-expanded` stays accurate
  - Mobile: dedicated drawer + accordions for sections (solid background, accessible controls)
- **Homepage interactions (front page)**
  - Featured Work filter chips for the gallery grid
  - “Spotlight” carousel for featured stories (buttons, ARIA-friendly)
  - Before/After reveal using a range slider input
  - Testimonials rotator with pause-on-focus/hover and reduced-motion behavior
  - Scroll reveal (disabled when `prefers-reduced-motion` is enabled)
  - Optional count-up stats (no layout shift)
- **Contact form**
  - Styled inquiry form UI on the Contact template
  - Uses a WordPress-native `admin-post.php` handler and sends via `wp_mail()`

## Page templates

Create Pages in WordPress with these slugs and assign the matching templates:

- `/who-we-are/` → `page-templates/template-who-we-are.php`
- `/what-we-do/` → `page-templates/template-what-we-do.php`
- `/work/` → `page-templates/template-work.php`
- `/resources/` → `page-templates/template-resources.php`
- `/contact/` → `page-templates/template-contact.php`

## Header behavior (mega panels)

- Triggers are `button[data-menu-item="what-we-do"]`, `button[data-menu-item="who-we-are"]`, `button[data-menu-item="resources"]`
- Panels are `div[data-menu-dropdown="…"]` and are **solid** (non-transparent) for readability
- Inside a panel:
  - Rail buttons: `button[data-rail-item="<key>"]`
  - Content sections: `section[data-rail-content="<key>"]` (one visible at a time)

## Static preview (GitHub Pages)

This repository also ships a static HTML mirror of the theme for GitHub Pages:

- Gallery: `docs/index.html`
- X11 preview: `docs/themes/nolan-showcase-theme-x11/index.html` (plus companion pages)
- Preview assets are local: `docs/themes/nolan-showcase-theme-x11/assets/…`

## Accessibility notes

- Includes a skip link, semantic landmarks, and visible `:focus-visible` states
- Mega panels support keyboard focus switching (rail → content) and Escape/outside-click close
- Mobile drawer updates `aria-expanded` and avoids keyboard traps
- Respects `prefers-reduced-motion` for animations/reveals/auto-advance behavior

## No external runtime dependencies

- Theme and preview load **only local assets**
- No OpenAI usage, no `OPENAI_API_KEY`, no external APIs, no external fonts/CDNs

## Activation instructions

1. Copy `wp-content/themes/nolan-showcase-theme-x11/` into your WordPress install (or install from the ZIP in `zippedTheme/`).
2. In WordPress Admin → Appearance → Themes, activate **Nolan Showcase Theme X11**.
3. Create the Pages listed above and assign their templates.
4. In Appearance → Menus, assign a menu to the **Primary** and **Footer** locations (optional; the theme also provides direct links).
5. Configure email on your host if you want Contact form submissions delivered via `wp_mail()`.

## Demo photography

All images in `assets/images/` are local demo photography-style assets committed to this repository for theme/preview use (no external downloads, no hotlinks).
