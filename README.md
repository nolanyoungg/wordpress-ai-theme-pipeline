# WordPress AI Theme Pipeline

This repository is a reusable pipeline for generating **versioned classic WordPress themes** with **static GitHub Pages previews** and **downloadable ZIP artifacts**.

Codex is used **manually/local** (via a normal ChatGPT Pro subscription) to generate code. This repo intentionally does **not** use the OpenAI API.

## Hard constraints (by design)

- No OpenAI API usage.
- No `OPENAI_API_KEY` requirements.
- No `openai/codex-action`.
- GitHub Actions are used only for validation, packaging ZIP files, and publishing GitHub Pages previews.
- GitHub Pages does not run PHP/WordPress; previews are static HTML under `docs/`.

## Repo structure

- WordPress themes: `wp-content/themes/nolan-showcase-theme-x1/`, `...-x2/`, `...-x3/`, etc.
- GitHub Pages gallery and previews: `docs/`
  - Gallery: `docs/index.html`
  - Per-theme previews: `docs/themes/<theme-slug>/index.html`
- Workflows: `.github/workflows/validate-package-preview.yml`
- Local helpers:
  - `scripts/list-theme-versions.sh`
  - `scripts/validate-themes.sh`

## Theme versioning

Themes must always be created as a new folder:

- `wp-content/themes/nolan-showcase-theme-x1`
- `wp-content/themes/nolan-showcase-theme-x2`
- `wp-content/themes/nolan-showcase-theme-x3`

Never overwrite older versions.

## Create the next theme version (manual Codex)

1. Create a feature branch (never work directly on `main`).
2. Run Codex locally to generate the next theme folder and matching static preview:
   - The new theme must be created under `wp-content/themes/nolan-showcase-theme-xN/`.
   - The matching preview must be created under `docs/themes/nolan-showcase-theme-xN/`.
   - Update `docs/index.html` to include the new version.
3. Run local validation:

```bash
bash scripts/validate-themes.sh
```

4. Commit changes and open a PR. Review before merging.

## GitHub Actions: validation + ZIP artifacts

The workflow `.github/workflows/validate-package-preview.yml`:

- Detects all `wp-content/themes/nolan-showcase-theme-x*` folders
- Validates required theme files and `style.css` theme header
- Runs `php -l` over all PHP files in each theme
- Builds `dist/nolan-showcase-theme-xN.zip` (folder included in zip)
- Uploads zip files as workflow artifacts

### Downloading a ZIP artifact

1. Open the GitHub Actions run for your PR or `main`.
2. Download the `theme-zips` artifact.
3. Upload the `nolan-showcase-theme-xN.zip` to WordPress (Appearance → Themes → Add New → Upload Theme).

## GitHub Pages: static previews

This repo deploys `docs/` to GitHub Pages through GitHub Actions.

To enable Pages:

1. Repo Settings → Pages
2. Source: **GitHub Actions**

After a successful run on `main`, the gallery is available at:

```text
https://nolanyoungg.github.io/wordpress-ai-theme-pipeline/
```

## PR review checklist

- New theme folder created under `wp-content/themes/nolan-showcase-theme-xN/` (no edits to older versions unless required for tooling)
- `docs/themes/nolan-showcase-theme-xN/` preview exists and matches the theme design
- `docs/index.html` updated with the new theme link
- `scripts/validate-themes.sh` passes locally
- Workflow artifacts contain the expected `nolan-showcase-theme-xN.zip`
