<?php
/**
 * Theme functions.
 *
 * @package Nolan_Showcase_Theme_01
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nolan_showcase_01_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-01', get_template_directory() . '/languages' );

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
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'nolan-showcase-theme-01' ),
			'footer'  => esc_html__( 'Footer Menu', 'nolan-showcase-theme-01' ),
		)
	);
}
add_action( 'after_setup_theme', 'nolan_showcase_01_setup' );

function nolan_showcase_01_register_sidebars() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nolan-showcase-theme-01' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in the sidebar.', 'nolan-showcase-theme-01' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nolan_showcase_01_register_sidebars' );

function nolan_showcase_01_asset_version( $relative_path ) {
	$filepath = get_theme_file_path( ltrim( $relative_path, '/' ) );
	$mtime    = file_exists( $filepath ) ? filemtime( $filepath ) : false;
	return $mtime ? (string) $mtime : null;
}

function nolan_showcase_01_enqueue_assets() {
	wp_enqueue_style(
		'nolan-showcase-theme-01',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		nolan_showcase_01_asset_version( 'assets/css/theme.css' )
	);

	wp_enqueue_script(
		'nolan-showcase-theme-01',
		get_theme_file_uri( 'assets/js/theme.js' ),
		array(),
		nolan_showcase_01_asset_version( 'assets/js/theme.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'nolan_showcase_01_enqueue_assets' );

function nolan_showcase_01_menu_links() {
	return array(
		'services'      => __( 'Services', 'nolan-showcase-theme-01' ),
		'why-us'        => __( 'Why Us', 'nolan-showcase-theme-01' ),
		'process'       => __( 'Process', 'nolan-showcase-theme-01' ),
		'projects'      => __( 'Projects', 'nolan-showcase-theme-01' ),
		'areas'         => __( 'Areas', 'nolan-showcase-theme-01' ),
		'testimonials'  => __( 'Testimonials', 'nolan-showcase-theme-01' ),
		'pricing'       => __( 'Pricing', 'nolan-showcase-theme-01' ),
		'contact'       => __( 'Contact', 'nolan-showcase-theme-01' ),
	);
}

function nolan_showcase_01_fallback_menu() {
	echo '<ul id="primary-menu" class="nav-menu">';
	foreach ( nolan_showcase_01_menu_links() as $target => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( home_url( '/#' . $target ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

function nolan_showcase_01_footer_fallback_menu() {
	echo '<ul class="footer-menu">';
	foreach ( nolan_showcase_01_menu_links() as $target => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( home_url( '/#' . $target ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

