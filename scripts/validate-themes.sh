#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
THEMES_DIR="$ROOT_DIR/wp-content/themes"
DOCS_DIR="$ROOT_DIR/docs"

if ! command -v php >/dev/null 2>&1; then
  echo "php is required on PATH for validation." >&2
  exit 1
fi

if ! command -v zip >/dev/null 2>&1; then
  echo "zip is required on PATH for packaging." >&2
  exit 1
fi

themes=()
while IFS= read -r t; do
  themes+=("$t")
done < <("$ROOT_DIR/scripts/list-theme-versions.sh")

if [ "${#themes[@]}" -eq 0 ]; then
  echo "No themes found matching nolan-showcase-theme-x* under $THEMES_DIR" >&2
  exit 1
fi

required_files=(
  "style.css"
  "functions.php"
  "index.php"
  "header.php"
  "footer.php"
  "front-page.php"
  "page.php"
  "single.php"
  "archive.php"
  "search.php"
  "404.php"
  "comments.php"
  "template-parts/content.php"
  "template-parts/content-page.php"
  "template-parts/content-none.php"
  "assets/css/theme.css"
  "assets/js/theme.js"
  "README.md"
)

if [ ! -f "$DOCS_DIR/index.html" ]; then
  echo "Missing docs/index.html" >&2
  exit 1
fi

echo "Validating themes:"
printf '  - %s\n' "${themes[@]}"

for theme_slug in "${themes[@]}"; do
  theme_dir="$THEMES_DIR/$theme_slug"
  preview_dir="$DOCS_DIR/themes/$theme_slug"

  echo "==> $theme_slug"

  for rel in "${required_files[@]}"; do
    if [ ! -f "$theme_dir/$rel" ]; then
      echo "Missing required file: $theme_dir/$rel" >&2
      exit 1
    fi
  done

  if ! grep -q "^Theme Name:" "$theme_dir/style.css"; then
    echo "Missing Theme Name header: $theme_dir/style.css" >&2
    exit 1
  fi

  while IFS= read -r -d '' php_file; do
    php -l "$php_file" >/dev/null
  done < <(find "$theme_dir" -name "*.php" -type f -print0)

  for f in \
    "$preview_dir/index.html" \
    "$preview_dir/assets/css/preview.css" \
    "$preview_dir/assets/js/preview.js"
  do
    if [ ! -f "$f" ]; then
      echo "Missing preview file: $f" >&2
      exit 1
    fi
  done
done

dist="$ROOT_DIR/dist"
mkdir -p "$dist"
rm -f "$dist"/nolan-showcase-theme-x*.zip

echo "Packaging zips into $dist/"
(
  cd "$THEMES_DIR"
  for theme_slug in "${themes[@]}"; do
    zip -qr "$dist/$theme_slug.zip" "$theme_slug"
  done
)

echo "OK"

