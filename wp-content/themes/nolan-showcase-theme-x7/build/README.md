# Build tooling (Gulp)

This theme commits compiled runtime assets so it works immediately without running any build commands:
- `../assets/css/main.css`
- `../assets/js/main.min.js`

If you want to regenerate assets locally:

## Setup
From this folder:

```bash
npm install
```

## Commands
```bash
npm run build      # production CSS + minified JS
npm run watch      # development watch + sourcemaps
npm run css:build  # CSS only
npm run js:build   # JS only
```

## Outputs
Build outputs are written to:
- `../assets/css/main.css`
- `../assets/js/main.min.js`

