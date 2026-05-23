You are the BUILDER AGENT.

Implement the WordPress theme and static GitHub Pages preview described below.

Original user task:
{{TASK}}

Repository instructions:
- Read AGENTS.md.
- Build the theme in {{THEME_DIR}}.
- Set the WordPress theme display name to {{THEME_DISPLAY_NAME}}.
- Build the static preview in `docs/themes/{{THEME_SLUG}}/` and update `docs/index.html`.
- Create a zip archive at {{THEME_ZIP}}.
- Avoid unrelated files.
- Use WordPress escaping and enqueueing conventions.
- Do not add API keys, SSH, SFTP, production secrets, or deployment credentials.

Goal:
Create a production-quality WordPress classic theme and a static Pages preview that matches the same visual direction.

Theme structure:
- Classic PHP WordPress theme.
- Theme files under {{THEME_DIR}}.
- Static preview files under `docs/themes/{{THEME_SLUG}}/`.

Create or update these files at minimum:
- {{THEME_DIR}}/style.css
- {{THEME_DIR}}/functions.php
- {{THEME_DIR}}/index.php
- {{THEME_DIR}}/header.php
- {{THEME_DIR}}/footer.php
- {{THEME_DIR}}/front-page.php
- {{THEME_DIR}}/page.php
- {{THEME_DIR}}/single.php
- {{THEME_DIR}}/archive.php
- {{THEME_DIR}}/search.php
- {{THEME_DIR}}/404.php
- {{THEME_DIR}}/comments.php
- {{THEME_DIR}}/template-parts/content.php
- {{THEME_DIR}}/template-parts/content-page.php
- {{THEME_DIR}}/template-parts/content-none.php
- {{THEME_DIR}}/assets/css/theme.css
- {{THEME_DIR}}/assets/js/theme.js
- {{THEME_DIR}}/README.md
- docs/index.html
- docs/themes/{{THEME_SLUG}}/index.html
- docs/themes/{{THEME_SLUG}}/assets/css/preview.css
- docs/themes/{{THEME_SLUG}}/assets/js/preview.js

Design requirements:
- Modern dark/navy and blue visual style.
- Sticky header.
- Clean text logo.
- Smooth scroll behavior.
- Scroll reveal animations with lightweight vanilla JavaScript.
- Polished cards, gradients, strong typography, responsive layout.
- No external CDN dependencies.

Homepage sections:
- Hero section with strong software/web development positioning
- Skill highlights
- Featured project cards
- AI/automation services section
- WordPress and WooCommerce experience section
- Analytics/tracking section
- Process section
- Contact CTA section

WordPress requirements:
- Use proper WordPress functions.
- Enqueue CSS and JS through functions.php.
- Add theme support for title-tag, post-thumbnails, custom-logo, html5, automatic-feed-links, responsive-embeds.
- Register one primary navigation menu.
- Register at least one footer menu.
- Use esc_html(), esc_attr(), esc_url(), and wp_kses_post() where appropriate.

Accessibility requirements:
- Semantic HTML.
- Keyboard-friendly navigation.
- Skip link.
- Clear focus states.
- Sufficient contrast.
- Proper aria labels where useful.

Security requirements:
- No hardcoded secrets, tokens, API keys, or private URLs.
- No remote CDNs.
- Fail gracefully if JavaScript is unavailable.
- Content that depends on reveal animations must remain visible without JavaScript.
- Theme counters should display a meaningful static value before JavaScript enhances them.

Zip archive requirement:
- Create a zip archive of the theme folder at {{THEME_ZIP}}.
- The zip should be ready to upload to WordPress for a quick test install.

Static GitHub Pages preview requirements:
- The preview must be fully static.
- Use only HTML, CSS, and vanilla JavaScript.
- Do not rely on WordPress, PHP, Node, build tools, or external services.
- The preview should visually mirror the homepage direction closely enough for a sneak peek.

Verification commands:
- `php -l {{THEME_DIR}}/*.php`
- `find {{THEME_DIR}} -name "*.php" -type f -print0 | xargs -0 -n 1 php -l`
- Confirm `docs/index.html` exists and links to `docs/themes/{{THEME_SLUG}}/index.html`.

Definition of done:
- The theme files exist and are complete.
- The preview files exist and render a coherent sneak peek.
- The zip archive exists.
- PHP syntax passes.
- Asset paths are valid.
- The PR summary explains what changed.
- Summarize every changed file.
