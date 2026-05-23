<?php
/**
 * Theme functions.
 *
 * @package Nolan_Showcase_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NOLAN_SHOWCASE_VERSION', '1.0.0' );

function nolan_showcase_setup() {
	load_theme_textdomain( 'nolan-showcase-theme', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'nolan-showcase-theme' ),
			'footer'  => esc_html__( 'Footer Menu', 'nolan-showcase-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'nolan_showcase_setup' );

function nolan_showcase_enqueue_assets() {
	wp_enqueue_style(
		'nolan-showcase-theme',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
		NOLAN_SHOWCASE_VERSION
	);

	wp_enqueue_script(
		'nolan-showcase-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		NOLAN_SHOWCASE_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'nolan_showcase_enqueue_assets' );

function nolan_showcase_fallback_menu() {
	$links = array(
		'services' => __( 'Capabilities', 'nolan-showcase-theme' ),
		'work'     => __( 'Work', 'nolan-showcase-theme' ),
		'process'  => __( 'Process', 'nolan-showcase-theme' ),
		'contact'  => __( 'Contact', 'nolan-showcase-theme' ),
	);

	echo '<ul id="primary-menu" class="nav-menu">';
	foreach ( $links as $target => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( '#' . $target ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

function nolan_showcase_footer_fallback_menu() {
	$links = array(
		'services' => __( 'Capabilities', 'nolan-showcase-theme' ),
		'work'     => __( 'Featured Work', 'nolan-showcase-theme' ),
		'contact'  => __( 'Contact', 'nolan-showcase-theme' ),
	);

	echo '<ul class="nav-menu nav-menu--footer">';
	foreach ( $links as $target => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( home_url( '/#' . $target ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}
