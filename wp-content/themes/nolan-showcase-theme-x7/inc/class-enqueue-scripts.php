<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Nolan_Showcase_Theme_X7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Nolan_Showcase_X7_Enqueue_Scripts {
	/**
	 * Bootstrap hooks.
	 *
	 * @return void
	 */
	public static function init() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_assets' ) );
	}

	/**
	 * Enqueue theme assets with cache busting.
	 *
	 * @return void
	 */
	public static function enqueue_assets() {
		// Standardized paths used across the pipeline (required by CI checks).
		$css_rel = 'assets/css/theme.css';
		$js_rel  = 'assets/js/theme.js';

		$css_path = NOLAN_SHOWCASE_X7_DIR . $css_rel;
		$js_path  = NOLAN_SHOWCASE_X7_DIR . $js_rel;

		if ( file_exists( $css_path ) ) {
			wp_enqueue_style(
				'nolan-showcase-theme-x7-theme',
				NOLAN_SHOWCASE_X7_URI . $css_rel,
				array(),
				(string) filemtime( $css_path )
			);
		} else {
			wp_enqueue_style(
				'nolan-showcase-theme-x7-style',
				get_stylesheet_uri(),
				array(),
				(string) NOLAN_SHOWCASE_X7_VERSION
			);
		}

		if ( file_exists( $js_path ) ) {
			wp_enqueue_script(
				'nolan-showcase-theme-x7-theme',
				NOLAN_SHOWCASE_X7_URI . $js_rel,
				array(),
				(string) filemtime( $js_path ),
				true
			);
		}
	}
}
