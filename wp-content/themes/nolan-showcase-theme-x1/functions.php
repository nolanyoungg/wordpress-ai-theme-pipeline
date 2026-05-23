<?php
/**
 * Theme functions.
 *
 * @package Nolan_Showcase_Theme_X1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NOLAN_SHOWCASE_THEME_X1_VERSION', '1.0.0' );

function nolan_showcase_theme_x1_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-x1', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 96,
			'width'       => 260,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'nolan-showcase-theme-x1' ),
			'footer'  => esc_html__( 'Footer Menu', 'nolan-showcase-theme-x1' ),
		)
	);
}
add_action( 'after_setup_theme', 'nolan_showcase_theme_x1_setup' );

function nolan_showcase_theme_x1_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'nolan-showcase-theme-x1' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Widgets displayed in the site footer.', 'nolan-showcase-theme-x1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'nolan_showcase_theme_x1_widgets_init' );

function nolan_showcase_theme_x1_asset_version( $relative_path ) {
	$absolute_path = get_template_directory() . '/' . ltrim( $relative_path, '/' );
	if ( file_exists( $absolute_path ) ) {
		return (string) filemtime( $absolute_path );
	}
	return NOLAN_SHOWCASE_THEME_X1_VERSION;
}

function nolan_showcase_theme_x1_enqueue_assets() {
	wp_enqueue_style(
		'nolan-showcase-theme-x1',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
		nolan_showcase_theme_x1_asset_version( 'assets/css/theme.css' )
	);

	wp_enqueue_script(
		'nolan-showcase-theme-x1',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		nolan_showcase_theme_x1_asset_version( 'assets/js/theme.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'nolan_showcase_theme_x1_enqueue_assets' );

function nolan_showcase_theme_x1_menu_links() {
	return array(
		'work'         => __( 'Work', 'nolan-showcase-theme-x1' ),
		'services'     => __( 'Services', 'nolan-showcase-theme-x1' ),
		'wordpress'    => __( 'WordPress', 'nolan-showcase-theme-x1' ),
		'automation'   => __( 'Automation', 'nolan-showcase-theme-x1' ),
		'analytics'    => __( 'Analytics', 'nolan-showcase-theme-x1' ),
		'ai'           => __( 'AI', 'nolan-showcase-theme-x1' ),
		'leadership'   => __( 'Leadership', 'nolan-showcase-theme-x1' ),
		'process'      => __( 'Process', 'nolan-showcase-theme-x1' ),
		'contact'      => __( 'Contact', 'nolan-showcase-theme-x1' ),
	);
}

function nolan_showcase_theme_x1_fallback_menu() {
	echo '<ul id="primary-menu" class="nav-menu">';
	foreach ( nolan_showcase_theme_x1_menu_links() as $target => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( home_url( '/#' . $target ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

function nolan_showcase_theme_x1_footer_fallback_menu() {
	echo '<ul class="footer-menu">';
	foreach ( nolan_showcase_theme_x1_menu_links() as $target => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( home_url( '/#' . $target ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

