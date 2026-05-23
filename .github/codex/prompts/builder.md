You are the BUILDER AGENT.

Implement the WordPress theme and static GitHub Pages preview described below.

Original user task:
{{TASK}}

Repository instructions:
- Read AGENTS.md.
- Build the theme in wp-content/themes/nolan-showcase-theme/.
- Build the static preview in preview/.
- Avoid unrelated files.
- Use WordPress escaping and enqueueing conventions.
- Do not add API keys, SSH, SFTP, production secrets, or deployment credentials.

Goal:
Create a production-quality WordPress classic theme and a static Pages preview that matches the same visual direction.

Theme structure:
- Classic PHP WordPress theme.
- Theme files under wp-content/themes/nolan-showcase-theme/.
- Static preview files under preview/.

Create or update these files at minimum:
- wp-content/themes/nolan-showcase-theme/style.css
- wp-content/themes/nolan-showcase-theme/functions.php
- wp-content/themes/nolan-showcase-theme/index.php
- wp-content/themes/nolan-showcase-theme/header.php
- wp-content/themes/nolan-showcase-theme/footer.php
- wp-content/themes/nolan-showcase-theme/front-page.php
- wp-content/themes/nolan-showcase-theme/page.php
- wp-content/themes/nolan-showcase-theme/single.php
- wp-content/themes/nolan-showcase-theme/archive.php
- wp-content/themes/nolan-showcase-theme/404.php
- wp-content/themes/nolan-showcase-theme/assets/css/theme.css
- wp-content/themes/nolan-showcase-theme/assets/js/theme.js
- wp-content/themes/nolan-showcase-theme/README.md
- preview/index.html
- preview/assets/css/preview.css
- preview/assets/js/preview.js

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

Static GitHub Pages preview requirements:
- The preview must be fully static.
- Use only HTML, CSS, and vanilla JavaScript.
- Do not rely on WordPress, PHP, Node, build tools, or external services.
- The preview should visually mirror the homepage direction closely enough for a sneak peek.

Verification commands:
- `php -l wp-content/themes/nolan-showcase-theme/*.php`
- `find wp-content/themes/nolan-showcase-theme -name "*.php" -type f -print0 | xargs -0 -n 1 php -l`
- Confirm `preview/index.html` exists.

Definition of done:
- The theme files exist and are complete.
- The preview files exist and render a coherent sneak peek.
- PHP syntax passes.
- Asset paths are valid.
- The PR summary explains what changed.
- Summarize every changed file.
