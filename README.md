# WordPress AI Theme Pipeline

This repository is a reusable pipeline for generating **versioned classic WordPress themes** with **static GitHub Pages previews** and **downloadable ZIP artifacts**.

Codex is used **manually/local** (via a normal ChatGPT Pro subscription) to generate code. This repo intentionally does **not** use the OpenAI API.

## Hard constraints (by design)

- No OpenAI API usage.
- No `OPENAI_API_KEY` requirements.
- No `openai/codex-action`.
- No paid AI API keys required; free build tooling (`npm`) is allowed.
- GitHub Actions are used only for validation, packaging ZIP files, and publishing GitHub Pages previews.
- GitHub Pages does not run PHP/WordPress; previews are static HTML under `docs/`.

## Repo structure

- WordPress themes: `wp-content/themes/nolan-showcase-theme-NN/`
- Generated theme zip output folder: `zippedTheme/` (generated packages; committed so you can download directly from the repo)
- GitHub Pages gallery and previews: `docs/`
  - Gallery: `docs/index.html`
  - Per-theme previews: `docs/themes/<theme-slug>/index.html`
- Workflows: `.github/workflows/validate-package-preview.yml`
- Local helpers:
  - `scripts/list-theme-versions.sh`
  - `scripts/validate-themes.sh`
  - React bundling (optional): `npm run build:react-bundles`

## Theme versioning

Current keeper themes:

- `wp-content/themes/nolan-showcase-theme-01`
- `wp-content/themes/nolan-showcase-theme-02`
- `wp-content/themes/nolan-showcase-theme-03`
- `wp-content/themes/nolan-showcase-theme-04`
- `wp-content/themes/nolan-showcase-theme-05`

New themes must always be created as a new folder:

- `wp-content/themes/nolan-showcase-theme-NN`

Never overwrite older versions.

## Create the next theme version (manual Codex)

1. Create a feature branch (never work directly on `main`).
2. Run Codex locally to generate the next theme folder and matching static preview:
   - The new theme must be created under `wp-content/themes/nolan-showcase-theme-NN/`.
   - The matching preview must be created under `docs/themes/nolan-showcase-theme-NN/`.
   - Update `docs/index.html` to include the new version.

By default, this workflow uses the planner step to rewrite your task into a structured builder prompt. If you want less rewriting, set one of these modes:

```bash
CODEX_WORKFLOW_MODE="passthrough" ...
```

This skips the planner and sends a light wrapper prompt to the builder.

```bash
CODEX_WORKFLOW_MODE="raw" ...
```

This skips the planner and passes your prompt through to the builder unchanged.
3. Run local validation:

```bash
bash scripts/validate-themes.sh
```

4. Commit changes and open a PR. Review before merging.

## Optional: React components (build step)

This repo supports optional React bundling using `esbuild` (no CDN runtime required). To opt into React for a theme or preview, create an entry file:

- Theme bundle: `wp-content/themes/<theme-slug>/assets/js/theme.entry.jsx` (outputs `assets/js/theme.js`)
- Preview bundle: `docs/themes/<theme-slug>/assets/js/preview.entry.jsx` (outputs `assets/js/preview.js`)

Then run:

```bash
npm install
npm run build:react-bundles
```

Note: this uses free, public npm packages at build time. No paid AI API keys are required.
The workflow also checks a small npm dependency allowlist and runs `npm audit --audit-level=high`.

CI will fail if bundling produces changes that aren’t committed.

## GitHub Actions: validation + ZIP artifacts

The workflow `.github/workflows/validate-package-preview.yml`:

- Detects all `wp-content/themes/nolan-showcase-theme-[0-9][0-9]` folders
- Validates required theme files and `style.css` theme header
- Runs `php -l` over all PHP files in each theme
- Verifies a committed zip exists for every detected theme: `zippedTheme/nolan-showcase-theme-NN.zip`
- Builds fresh zips in CI (into `tmpZips/`) and verifies they match the committed zip for any theme versions changed in the run
- Uploads the freshly-built zips as the `theme-zips` workflow artifact

Important: when you add a new theme version (or edit an existing theme version), you must regenerate and commit the matching zip(s) in `zippedTheme/`.

### Rebuilding a single theme ZIP (when CI fails)

If you edit `wp-content/themes/nolan-showcase-theme-NN/`, you must rebuild and commit the matching zip:

```bash
rm -f zippedTheme/nolan-showcase-theme-NN.zip
( cd wp-content/themes && zip -qr "../../zippedTheme/nolan-showcase-theme-NN.zip" "nolan-showcase-theme-NN" )
git add zippedTheme/nolan-showcase-theme-NN.zip
git commit -m "Rebuild zip for nolan-showcase-theme-NN"
git push
```

### Downloading a ZIP artifact

1. Open the GitHub Actions run for your PR or `main`.
2. Download the `theme-zips` artifact.
3. Upload the `nolan-showcase-theme-NN.zip` to WordPress (Appearance → Themes → Add New → Upload Theme).

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

- New theme folder created under `wp-content/themes/nolan-showcase-theme-NN/` (no edits to older versions unless required for tooling)
- `docs/themes/nolan-showcase-theme-NN/` preview exists and matches the theme design
- `docs/index.html` updated with the new theme link
- `scripts/validate-themes.sh` passes locally
- Workflow artifacts contain the expected `nolan-showcase-theme-NN.zip`

## Add A New Theme (Steps 1-4)

These steps are the repeatable path for adding a new theme version. Do not hardcode the `NN` number in your prompt; the repo workflow will pick the next available version and create a new folder.

1. Create a branch from `main`:

```bash
git checkout main
git pull
git checkout -b feature/theme-NN-short-name
```

2. Generate the next theme with Codex (GPT-5.2, effort High):

```bash
CODEX_RUN_MODEL="gpt-5.2" CODEX_RUN_REASONING_EFFORT="high" bash scripts/run-local-workflow.sh "Use model GPT-5.2 with effort High.

Create a new versioned classic WordPress theme using the NEXT available nolan-showcase-theme-NN folder under wp-content/themes/ (never overwrite or edit older versions unless absolutely required for shared tooling).

Also create a matching static GitHub Pages preview under docs/themes/nolan-showcase-theme-NN/ and update docs/index.html to link the new version.

Hard constraints:
- No OpenAI API usage, no OPENAI_API_KEY, no openai/codex-action.
- No paid AI API keys required; free build tooling (`npm`) is allowed.
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

3. Validate locally:

`scripts/validate-themes.sh` runs theme + preview checks and rebuilds ALL theme zips into `zippedTheme/`.

If you only changed one theme version, it is usually cleaner to rebuild just that zip (see “Rebuilding a single theme ZIP” above), then run:

```bash
bash scripts/validate-themes.sh
```

4. Commit, push, and open a PR:

```bash
git status
git add -A
git commit -m "Add Nolan Showcase Theme NN"
git push -u origin HEAD
gh pr create --base main --head "$(git branch --show-current)" --title "Add Nolan Showcase Theme NN" --body "Adds a new versioned theme folder, matching docs preview, and includes a regenerated committed zip in zippedTheme/. CI will verify the committed zip matches the theme source."
```

## Fresh Machine Example: Theme 06 PR

This is what creating the next `06` theme should look like from a fresh command prompt on any machine that already has GitHub CLI, Codex, PHP, Node/npm, and zip installed and authenticated.

```bash
git clone https://github.com/nolanyoungg/wordpress-ai-theme-pipeline.git
cd wordpress-ai-theme-pipeline
git checkout main
git pull origin main
git checkout -b feature/nolan-showcase-theme-06
npm install
```

Run the local Codex workflow. The script will detect the existing `01` through `05` folders and target `nolan-showcase-theme-06`.

```bash
CODEX_RUN_MODEL="gpt-5.2" CODEX_RUN_REASONING_EFFORT="high" bash scripts/run-local-workflow.sh "Create Nolan Showcase Theme 06 as a new production-quality classic WordPress theme.

Use the next versioned folder: wp-content/themes/nolan-showcase-theme-06.
Create the matching static GitHub Pages preview under docs/themes/nolan-showcase-theme-06.
Update docs/index.html so the newest theme appears first.
Regenerate zippedTheme/nolan-showcase-theme-06.zip.

Do not overwrite themes 01 through 05.
Do not require OPENAI_API_KEY.
Do not use remote CDNs.
Use local assets, safe WordPress escaping, proper enqueueing, accessible navigation, and a polished responsive design."
```

Validate, commit, push, and open the PR:

```bash
bash scripts/validate-themes.sh
git status
git add -A
git commit -m "Add Nolan Showcase Theme 06"
git push -u origin HEAD
gh pr create --base main --head "$(git branch --show-current)" --title "Add Nolan Showcase Theme 06" --body "Adds Nolan Showcase Theme 06, its static preview, gallery entry, and regenerated committed ZIP. Verification: bash scripts/validate-themes.sh"
```

After the PR checks pass, review the preview files and ZIP artifact, then merge the PR into `main`.

## Explain It Like I Am 5

Think of this repo like a shelf with five finished toy houses on it: Theme `01`, `02`, `03`, `04`, and `05`.

When you want a new toy house, you do not paint over an old one. You build a brand-new one and call it Theme `06`.

The WordPress theme is the real toy house. It lives here:

```text
wp-content/themes/nolan-showcase-theme-06/
```

The GitHub Pages preview is the picture of the toy house that people can see in a browser. It lives here:

```text
docs/themes/nolan-showcase-theme-06/
```

The ZIP file is the box you can hand to WordPress so WordPress can install the toy house. It lives here:

```text
zippedTheme/nolan-showcase-theme-06.zip
```

The gallery page is the front shelf label. It tells people which theme previews they can open:

```text
docs/index.html
```

The safe order is:

1. Start from the latest `main`.
2. Make a new branch.
3. Ask Codex to build the next numbered theme.
4. Run `bash scripts/validate-themes.sh`.
5. Commit everything.
6. Push the branch.
7. Open a pull request.
8. Merge only after GitHub says the checks passed.

If the checks fail, do not guess. Read the error, fix the exact missing or stale file, run validation again, commit the fix, and push again.
