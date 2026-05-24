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
- Generated theme zip output folder: `zippedTheme/` (generated packages; committed so you can download directly from the repo)
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
- Builds fresh theme zips and checks they match committed `zippedTheme/nolan-showcase-theme-xN.zip` when a theme version changes
- Uploads zip files as the `theme-zips` workflow artifact

### Rebuilding a single theme ZIP (when CI fails)

If you edit `wp-content/themes/nolan-showcase-theme-xN/`, you must rebuild and commit the matching zip:

```bash
rm -f zippedTheme/nolan-showcase-theme-xN.zip
( cd wp-content/themes && zip -qr "../../zippedTheme/nolan-showcase-theme-xN.zip" "nolan-showcase-theme-xN" )
git add zippedTheme/nolan-showcase-theme-xN.zip
git commit -m "Rebuild zip for nolan-showcase-theme-xN"
git push
```

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

## Add A New Theme (Steps 1-4)

These steps are the repeatable path for adding a new theme version. Do not hardcode the `xN` number in your prompt; the repo workflow will pick the next available version and create a new folder.

1. Create a branch from `main`:

```bash
git checkout main
git pull
git checkout -b feature/theme-xN-short-name
```

2. Generate the next theme with Codex (GPT-5.2, effort High):

```bash
CODEX_RUN_MODEL="gpt-5.2" CODEX_RUN_REASONING_EFFORT="high" bash scripts/run-local-workflow.sh "Use model GPT-5.2 with effort High.

Create a new versioned classic WordPress theme using the NEXT available nolan-showcase-theme-xN folder under wp-content/themes/ (never overwrite or edit older versions unless absolutely required for shared tooling).

Also create a matching static GitHub Pages preview under docs/themes/nolan-showcase-theme-xN/ and update docs/index.html to link the new version.

Hard constraints:
- No OpenAI API usage, no OPENAI_API_KEY, no openai/codex-action.
- No external services.
- No CDN dependencies required for the WordPress theme (all assets local).

Theme requirements:
- Include the required templates and template-parts (page/single/archive/search/404/comments + template-parts/*).
- Enqueue assets/css/theme.css and assets/js/theme.js from PHP (theme.css/theme.js must exist and be non-trivial).
- Keep the WordPress theme and the static preview separate (wp-content/ vs docs/).
- Follow WordPress escaping and accessibility best practices."
```

To use a different model/effort for Step 2, you only need one of these command styles:

```bash
CODEX_RUN_MODEL="gpt-5.5" CODEX_RUN_REASONING_EFFORT="high" bash scripts/run-local-workflow.sh "..."
```

```bash
CODEX_RUN_MODEL="gpt-5.5" CODEX_RUN_REASONING_EFFORT="medium" bash scripts/run-local-workflow.sh "..."
```

```bash
CODEX_RUN_MODEL="gpt-5.2" CODEX_RUN_REASONING_EFFORT="high" bash scripts/run-local-workflow.sh "..."
```

```bash
CODEX_RUN_MODEL="gpt-5.2" CODEX_RUN_REASONING_EFFORT="medium" bash scripts/run-local-workflow.sh "..."
```

```bash
CODEX_RUN_MODEL="codex-mini-latest" CODEX_RUN_REASONING_EFFORT="medium" bash scripts/run-local-workflow.sh "..."
```

3. Validate locally (also builds fresh zips into `zippedTheme/`):

- Run: `bash scripts/validate-themes.sh`

4. Commit, push, and open a PR:

```bash
git status
git add -A
git commit -m "Add Nolan Showcase Theme XN"
git push -u origin HEAD
gh pr create --base main --head "$(git branch --show-current)" --title "Add Nolan Showcase Theme XN" --body "Adds a new versioned theme folder, matching docs preview, and relies on Actions to generate ZIPs into zippedTheme/ (artifact: theme-zips)."
```
