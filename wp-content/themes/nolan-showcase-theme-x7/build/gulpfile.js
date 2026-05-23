/* eslint-disable no-console */
const path = require('path');

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cleanCSS = require('gulp-clean-css');
const terser = require('gulp-terser');
const rename = require('gulp-rename');
const gulpIf = require('gulp-if');

const themeRoot = path.resolve(__dirname, '..');
const isProd = process.env.NODE_ENV === 'production';

const paths = {
	scssEntry: path.join(themeRoot, 'scss', 'main.scss'),
	scssWatch: path.join(themeRoot, 'scss', '**', '*.scss'),
	cssOutDir: path.join(themeRoot, 'assets', 'css'),
	jsEntry: path.join(themeRoot, 'assets', 'js', 'main.js'),
	jsWatch: path.join(themeRoot, 'assets', 'js', '*.js'),
	jsOutDir: path.join(themeRoot, 'assets', 'js')
};

function styles() {
	return gulp
		.src(paths.scssEntry, { allowEmpty: true })
		.pipe(gulpIf(!isProd, sourcemaps.init()))
		.pipe(
			sass({
				outputStyle: 'expanded'
			}).on('error', sass.logError)
		)
		.pipe(postcss([autoprefixer()]))
		.pipe(gulpIf(isProd, cleanCSS({ level: 2 })))
		.pipe(gulpIf(!isProd, sourcemaps.write('.')))
		.pipe(rename('main.css'))
		.pipe(gulp.dest(paths.cssOutDir));
}

function scripts() {
	return gulp
		.src(paths.jsEntry, { allowEmpty: true })
		.pipe(gulpIf(!isProd, sourcemaps.init()))
		.pipe(gulpIf(isProd, terser({ compress: true, mangle: true })))
		.pipe(gulpIf(!isProd, sourcemaps.write('.')))
		.pipe(rename('main.min.js'))
		.pipe(gulp.dest(paths.jsOutDir));
}

function watch() {
	gulp.watch(paths.scssWatch, styles);
	gulp.watch(paths.jsWatch, scripts);
}

const build = gulp.series(styles, scripts);

exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.build = build;
exports.default = build;

