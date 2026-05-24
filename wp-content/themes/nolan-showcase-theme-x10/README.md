# Nolan Showcase Theme X10 (MNY Photo)

Premium, bright editorial/cinematic photography studio theme for **MNY Photo**.

## Notes

- Classic WordPress theme (PHP templates). No external services, no CDNs, no API keys.
- Assets live under `assets/` and are enqueued via `functions.php` with `filemtime()` cache busting.
- The navigation includes a premium Nolan menu system (desktop mega panels with rail interactions + mobile drawer) with keyboard support.
- The Contact page template posts to a WordPress-native handler (`admin-post.php`) and sends email via `wp_mail()` (configure mail/SMPP on your host as needed).

## Recommended Pages (slugs)

Create these Pages in WordPress and assign the matching templates:

- `/who-we-are/` → **Who We Are**
- `/what-we-do/` → **What We Do**
- `/work/` → **Work**
- `/resources/` → **Resources**
- `/contact/` → **Contact**

## Demo photography

All images in `assets/images/` are locally generated demo photography-style images created for this repository (no external downloads, no hotlinks).
