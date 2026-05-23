# AGENTS.md

## Project purpose

This repository is used to build, review, and deploy WordPress theme work through a controlled AI-assisted GitHub workflow.

## Repository layout

- WordPress themes belong in `wp-content/themes/`.
- The first generated theme should be created at:
  `wp-content/themes/nolan-showcase-theme/`
- A static GitHub Pages preview should be created at:
  `preview/`
- Do not modify WordPress core files.
- Do not commit uploads, cache files, backups, or environment files.

## WordPress theme rules

- Build a production-quality WordPress theme.
- Use safe WordPress escaping functions where applicable:
  - `esc_html()`
  - `esc_attr()`
  - `esc_url()`
  - `wp_kses_post()`
- Use proper enqueueing through `functions.php`.
- Do not hardcode production secrets, tokens, API keys, or private URLs.
- Do not rely on remote CDNs unless explicitly requested.
- Prefer local assets inside the theme.
- Keep templates readable and maintainable.

## GitHub Pages preview rules

- GitHub Pages cannot execute WordPress PHP templates.
- Build the full WordPress theme in `wp-content/themes/nolan-showcase-theme/`.
- Also build a static visual preview in `preview/` so GitHub Pages can show a sneak peek of the theme.
- The preview should mirror the homepage design and interactions as closely as possible using static HTML, CSS, and vanilla JavaScript.
- The preview must not require build tools, remote CDNs, API keys, SSH, SFTP, or external services.
- Required preview entry file: `preview/index.html`.

## AI workflow rules

- Make the smallest safe change that satisfies the task.
- Avoid unrelated refactors.
- Do not push directly to `main`.
- All work must go through a pull request.
- Explain changed files clearly.
- Include verification steps performed.
- Flag any work that could not be completed.
- The only required repository secret for the AI pipeline is `OPENAI_API_KEY`.

## Review priorities

Review in this order:

1. Correctness
2. Security
3. WordPress compatibility
4. Accessibility
5. Performance
6. Maintainability
7. Visual polish

## Definition of done

A task is done only when:

- The requested files are created or updated.
- The theme has a valid WordPress theme header.
- A static GitHub Pages preview exists at `preview/index.html`.
- PHP files pass syntax checks.
- Obvious broken links, missing assets, and invalid paths are avoided.
- The PR summary explains what changed.
