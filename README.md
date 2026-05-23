# WordPress AI Theme Pipeline

This repository scaffolds a controlled AI-assisted WordPress theme workflow:

1. Manually run the AI Development Pipeline workflow.
2. Planner Agent writes `.ai/builder-prompt.md`.
3. Builder Agent creates or updates the WordPress theme.
4. Builder Agent also creates a static GitHub Pages preview.
5. Verification checks theme structure, PHP syntax, and preview files.
6. Reviewer Agent writes `.ai/reviewer-report.md`.
7. GitHub opens a pull request.
8. You review and merge the pull request into `main`.
9. GitHub Pages publishes a static sneak peek of the theme.

The static preview is only a visual preview. GitHub Pages cannot run WordPress PHP templates. The full WordPress theme is still built in `wp-content/themes/nolan-showcase-theme/`.

## Initial Theme Target

The first generated theme should be created at:

```text
wp-content/themes/nolan-showcase-theme/
```

The GitHub Pages preview should be created at:

```text
preview/
```

The repository intentionally commits only `wp-content/themes/.gitkeep` at first. The AI pipeline creates the real theme files and preview files in a pull request.

## Required GitHub Secret

Only one repository secret is required:

```text
OPENAI_API_KEY
```

No SSH, SFTP, staging, or production secrets are required for this version.

## GitHub Pages Setup

GitHub Pages uses the built-in `GITHUB_TOKEN` through the workflow. You do not need to create a secret for it.

In GitHub, go to:

```text
Settings -> Pages
```

Set:

```text
Source: GitHub Actions
```

After the first successful merge to `main`, the preview should be published at:

```text
https://nolanyoungg.github.io/wordpress-ai-theme-pipeline/
```

## First Workflow Task

Run:

```text
Actions -> AI Development Pipeline -> Run workflow
```

Use `main` as `base_branch`, then paste this task:

```text
Build a new production-quality WordPress theme named "Nolan Showcase Theme" inside:

wp-content/themes/nolan-showcase-theme/

Also build a static GitHub Pages sneak peek inside:

preview/

The theme should be a polished web/software developer portfolio theme with a strong blue visual style, premium interactions, and sections that show software development, WordPress development, automation, AI integration, analytics/tracking, and technical leadership.

Build this as a complete standalone WordPress theme, plus a static preview that visually mirrors the homepage for GitHub Pages.

Requirements:

1. Theme identity
- Theme Name: Nolan Showcase Theme
- Theme URI: blank or local placeholder
- Author: Nolan Young
- Description: A high-impact WordPress portfolio theme for a software developer and web developer.
- Version: 1.0.0
- Text Domain: nolan-showcase-theme

2. Required WordPress theme files
Create at minimum:
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

3. Required GitHub Pages preview files
Create at minimum:
- preview/index.html
- preview/assets/css/preview.css
- preview/assets/js/preview.js

The preview must be static HTML, CSS, and vanilla JavaScript. It should not require WordPress, PHP, Node, build tools, remote CDNs, API keys, SSH, SFTP, or external services.

4. Design
- Use a modern dark/navy and blue visual style.
- Include a sticky header.
- Include a clean sample text logo.
- Include smooth scroll behavior.
- Include scroll reveal animations using lightweight vanilla JavaScript.
- Include polished cards, gradients, strong typography, and responsive layout.
- Avoid external CDN dependencies.

5. Homepage sections
The front page and static preview should include:
- Hero section with strong software/web development positioning
- Skill highlights
- Featured project cards
- AI/automation services section
- WordPress and WooCommerce experience section
- Analytics/tracking section
- Process section
- Contact CTA section

6. WordPress functionality
- Use proper WordPress functions.
- Enqueue CSS and JS through functions.php.
- Add theme support for title-tag, post-thumbnails, custom-logo, html5, automatic-feed-links, responsive-embeds.
- Register one primary navigation menu.
- Register at least one footer menu.
- Avoid hardcoded unsafe output where WordPress escaping is needed.
- Use esc_html(), esc_attr(), esc_url(), and wp_kses_post() where appropriate.

7. Accessibility
- Semantic HTML.
- Keyboard-friendly navigation.
- Skip link.
- Clear focus states.
- Sufficient contrast.
- Proper aria labels where useful.

8. Performance
- No heavy frameworks.
- No remote fonts unless locally declared or system fonts are used.
- CSS and JS should be lightweight.
- JavaScript should fail gracefully.

9. Review
After implementation, summarize every changed file.
Also include manual testing steps for activating the theme in WordPress and checking the static preview.
```

## Manual PR Review Checklist

Before merging the AI-generated pull request, check:

1. Did the AI only create or update the theme and preview files?
2. Did it avoid touching unrelated repo files?
3. Does `style.css` have a valid WordPress theme header?
4. Does `functions.php` enqueue CSS and JS properly?
5. Do all PHP files pass syntax checks?
6. Are links and asset paths correct?
7. Does the theme have a skip link?
8. Does the mobile nav work?
9. Does `preview/index.html` visually match the theme direction?
10. Does the homepage look like a premium software/web portfolio?
11. Is the reviewer report clean enough to merge?

## After Merge

When the pull request is merged into `main`:

1. `deploy.yml` starts automatically if `preview/` or the generated theme changed.
2. The `preview/` directory is uploaded as a GitHub Pages artifact.
3. GitHub Pages publishes the static preview.
4. You can inspect the sneak peek in the browser.

No production WordPress deployment happens in this version.
