# WordPress AI Theme Pipeline

This repository scaffolds a controlled AI-assisted WordPress theme workflow:

1. Manually run the AI Development Pipeline workflow.
2. Planner Agent writes `.ai/builder-prompt.md`.
3. Builder Agent creates or updates the theme.
4. Verification checks theme structure and PHP syntax.
5. Reviewer Agent writes `.ai/reviewer-report.md`.
6. GitHub opens a pull request.
7. You review and merge the pull request into `main`.
8. Staging deploys automatically.
9. Production waits for approval through the `production` GitHub Environment.

## Initial Theme Target

The first generated theme should be created at:

```text
wp-content/themes/nolan-showcase-theme/
```

The repository intentionally commits only `wp-content/themes/.gitkeep` at first. The AI pipeline creates the real theme files in a pull request.

## Required GitHub Secret

Add this repository secret:

```text
OPENAI_API_KEY
```

## Staging Deployment Secrets

Add these repository or `staging` environment secrets:

```text
STAGING_SSH_HOST
STAGING_SSH_USER
STAGING_SSH_PRIVATE_KEY
STAGING_THEME_PATH
```

Example staging theme path:

```text
/srv/htdocs/wp-content/themes/nolan-showcase-theme
```

## Production Deployment Secrets

Prefer adding production secrets to the protected `production` environment:

```text
PRODUCTION_SSH_HOST
PRODUCTION_SSH_USER
PRODUCTION_SSH_PRIVATE_KEY
PRODUCTION_THEME_PATH
```

Example production theme path:

```text
/srv/htdocs/wp-content/themes/nolan-showcase-theme
```

## GitHub Environments

Create these environments in GitHub:

- `staging`: automatic deploys from `main`.
- `production`: required reviewer enabled, reviewer set to you, branch restricted to `main`.

For the first deployment test, consider disabling or commenting out the production job until staging SSH access and paths are confirmed.

## First Workflow Task

Run:

```text
Actions -> AI Development Pipeline -> Run workflow
```

Use `main` as `base_branch`, then paste this task:

```text
Build a new production-quality WordPress theme named "Nolan Showcase Theme" inside:

wp-content/themes/nolan-showcase-theme/

The theme should be a polished web/software developer portfolio theme with a strong blue visual style, premium interactions, and sections that show software development, WordPress development, automation, AI integration, analytics/tracking, and technical leadership.

Build this as a complete standalone WordPress theme.

Requirements:

1. Theme identity
- Theme Name: Nolan Showcase Theme
- Theme URI: blank or local placeholder
- Author: Nolan Young
- Description: A high-impact WordPress portfolio theme for a software developer and web developer.
- Version: 1.0.0
- Text Domain: nolan-showcase-theme

2. Required files
Create at minimum:
- style.css
- functions.php
- index.php
- header.php
- footer.php
- front-page.php
- page.php
- single.php
- archive.php
- 404.php
- assets/css/theme.css
- assets/js/theme.js
- screenshot placeholder instructions in README.md
- README.md

3. Design
- Use a modern dark/navy and blue visual style.
- Include a sticky header.
- Include a clean sample text logo.
- Include smooth scroll behavior.
- Include scroll reveal animations using lightweight vanilla JavaScript.
- Include polished cards, gradients, strong typography, and responsive layout.
- Avoid external CDN dependencies.

4. Homepage sections
The front page should include:
- Hero section with strong software/web development positioning
- Skill highlights
- Featured project cards
- AI/automation services section
- WordPress and WooCommerce experience section
- Analytics/tracking section
- Process section
- Contact CTA section

5. WordPress functionality
- Use proper WordPress functions.
- Enqueue CSS and JS through functions.php.
- Add theme support for title-tag, post-thumbnails, custom-logo, html5, automatic-feed-links, responsive-embeds.
- Register one primary navigation menu.
- Register at least one footer menu.
- Avoid hardcoded unsafe output where WordPress escaping is needed.
- Use esc_html(), esc_attr(), esc_url(), and wp_kses_post() where appropriate.

6. Accessibility
- Semantic HTML.
- Keyboard-friendly navigation.
- Skip link.
- Clear focus states.
- Sufficient contrast.
- Proper aria labels where useful.

7. Performance
- No heavy frameworks.
- No remote fonts unless locally declared or system fonts are used.
- CSS and JS should be lightweight.
- JavaScript should fail gracefully.

8. Review
After implementation, summarize every changed file.
Also include manual testing steps for activating the theme in WordPress.
```

## Manual PR Review Checklist

Before merging the AI-generated pull request, check:

1. Did the AI only create or update the theme files?
2. Did it avoid touching unrelated repo files?
3. Does `style.css` have a valid WordPress theme header?
4. Does `functions.php` enqueue CSS and JS properly?
5. Do all PHP files pass syntax checks?
6. Are links and asset paths correct?
7. Does the theme have a skip link?
8. Does the mobile nav work?
9. Does the homepage look like a premium software/web portfolio?
10. Is the reviewer report clean enough to merge?

## After Merge

When the pull request is merged into `main`:

1. `deploy.yml` starts automatically.
2. The theme is copied to staging.
3. The production job waits on the `production` GitHub Environment.
4. GitHub asks for production approval.
5. After approval, the theme is copied to production.
