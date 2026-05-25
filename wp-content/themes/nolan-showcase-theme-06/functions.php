<?php
/**
 * Theme bootstrap for Nolan Showcase Theme 06.
 *
 * @package Nolan_Showcase_Theme_06
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nolan_showcase_06_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-06', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 96,
			'width'       => 280,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'nolan-showcase-theme-06' ),
			'footer'  => esc_html__( 'Footer Menu', 'nolan-showcase-theme-06' ),
		)
	);
}
add_action( 'after_setup_theme', 'nolan_showcase_06_setup' );

function nolan_showcase_06_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'nolan-showcase-theme-06' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Widgets displayed beside archive and single content.', 'nolan-showcase-theme-06' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nolan_showcase_06_widgets_init' );

function nolan_showcase_06_asset_version( $relative_path ) {
	$file_path = get_template_directory() . '/' . ltrim( $relative_path, '/' );
	return file_exists( $file_path ) ? (string) filemtime( $file_path ) : '1.0.0';
}

function nolan_showcase_06_enqueue_assets() {
	wp_enqueue_style( 'nolan-showcase-06-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), nolan_showcase_06_asset_version( 'assets/css/theme.css' ) );
	wp_enqueue_script( 'nolan-showcase-06-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), nolan_showcase_06_asset_version( 'assets/js/theme.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'nolan_showcase_06_enqueue_assets' );

function nolan_showcase_06_primary_menu_fallback() {
	echo '<ul id="primary-menu" class="primary-menu">';
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/' ) ), esc_html__( 'Home', 'nolan-showcase-theme-06' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/work/' ) ), esc_html__( 'Work', 'nolan-showcase-theme-06' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/studio/' ) ), esc_html__( 'Studio', 'nolan-showcase-theme-06' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/journal/' ) ), esc_html__( 'Journal', 'nolan-showcase-theme-06' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/contact/' ) ), esc_html__( 'Contact', 'nolan-showcase-theme-06' ) );
	echo '</ul>';
}

function nolan_showcase_06_posted_on() {
	printf(
		'<time datetime="%1$s">%2$s</time>',
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() )
	);
}

