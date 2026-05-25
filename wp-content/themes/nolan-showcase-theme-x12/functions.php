<?php
/**
 * Theme bootstrap for Nolan Showcase Theme X12.
 *
 * Connects to WordPress theme setup, menu registration, widget registration,
 * asset enqueueing, and small helper functions used by classic PHP templates.
 * Assumes assets are local to this theme and no runtime API integration exists.
 *
 * @package Nolan_Showcase_Theme_X12
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NOLAN_SHOWCASE_X12_VERSION', '1.0.0' );

/**
 * Purpose: Return a local theme asset URL.
 * Pre: $relative_path is a theme-relative asset path.
 * Post: A safe URL string is returned.
 * Return: string
 *
 * @param string $relative_path Theme-relative path.
 */
function nolan_showcase_x12_asset_url( $relative_path ) {
	return esc_url( get_theme_file_uri( ltrim( (string) $relative_path, '/' ) ) );
}

/**
 * Purpose: Return a filemtime-based asset version when possible.
 * Pre: $relative_path points to a theme file.
 * Post: Cache-busting version is returned.
 * Return: string
 *
 * @param string $relative_path Theme-relative path.
 */
function nolan_showcase_x12_asset_version( $relative_path ) {
	$path = get_theme_file_path( ltrim( (string) $relative_path, '/' ) );
	return file_exists( $path ) ? (string) filemtime( $path ) : NOLAN_SHOWCASE_X12_VERSION;
}

/**
 * Purpose: Register classic theme supports and navigation menus.
 * Pre: Runs on after_setup_theme.
 * Post: Theme supports and menus are available in WordPress.
 * Return: void
 */
function nolan_showcase_x12_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-x12', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 48, 'width' => 220, 'flex-width' => true, 'flex-height' => true ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', 'search-form', 'style', 'script' ) );
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'nolan-showcase-theme-x12' ),
			'footer'  => __( 'Footer Menu', 'nolan-showcase-theme-x12' ),
		)
	);
}
add_action( 'after_setup_theme', 'nolan_showcase_x12_setup' );

/**
 * Purpose: Set content width for embeds and large media.
 * Pre: Runs during theme setup.
 * Post: WordPress has a max content width hint.
 * Return: void
 */
function nolan_showcase_x12_content_width() {
	$GLOBALS['content_width'] = isset( $GLOBALS['content_width'] ) ? (int) $GLOBALS['content_width'] : 1180;
}
add_action( 'after_setup_theme', 'nolan_showcase_x12_content_width', 0 );

/**
 * Purpose: Register the theme sidebar.
 * Pre: Runs on widgets_init.
 * Post: Sidebar can be managed in wp-admin.
 * Return: void
 */
function nolan_showcase_x12_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'nolan-showcase-theme-x12' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Widgets for blog, archive, and page sidebars.', 'nolan-showcase-theme-x12' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nolan_showcase_x12_widgets_init' );

/**
 * Purpose: Enqueue local CSS and JavaScript without jQuery.
 * Pre: Runs on wp_enqueue_scripts.
 * Post: Theme assets are loaded in the browser.
 * Return: void
 */
function nolan_showcase_x12_enqueue_assets() {
	wp_enqueue_style( 'nolan-showcase-theme-x12', nolan_showcase_x12_asset_url( 'assets/css/theme.css' ), array(), nolan_showcase_x12_asset_version( 'assets/css/theme.css' ) );
	wp_enqueue_script( 'nolan-showcase-theme-x12', nolan_showcase_x12_asset_url( 'assets/js/theme.js' ), array(), nolan_showcase_x12_asset_version( 'assets/js/theme.js' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nolan_showcase_x12_enqueue_assets' );

/**
 * Purpose: Return the public brand name.
 * Pre: None.
 * Post: Brand text is translated.
 * Return: string
 */
function nolan_showcase_x12_brand_name() {
	return __( 'Nolan Digital Studio', 'nolan-showcase-theme-x12' );
}

/**
 * Purpose: Render the site brand link.
 * Pre: Called from header.php.
 * Post: Custom logo or local mark is printed.
 * Return: void
 */
function nolan_showcase_x12_site_brand() {
	if ( has_custom_logo() ) {
		the_custom_logo();
		return;
	}
	echo '<a class="site-brand" href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . esc_url( nolan_showcase_x12_asset_url( 'assets/images/brand-mark.svg' ) ) . '" alt="" width="38" height="38"><span>' . esc_html( nolan_showcase_x12_brand_name() ) . '</span></a>';
}

/**
 * Purpose: Provide default primary navigation when no menu is assigned.
 * Pre: Used as wp_nav_menu fallback_cb.
 * Post: A usable menu is printed.
 * Return: void
 */
function nolan_showcase_x12_default_menu() {
	$items = array(
		'who-we-are' => __( 'About', 'nolan-showcase-theme-x12' ),
		'what-we-do' => __( 'Services', 'nolan-showcase-theme-x12' ),
		'work'       => __( 'Work', 'nolan-showcase-theme-x12' ),
		'resources'  => __( 'Resources', 'nolan-showcase-theme-x12' ),
	);
	echo '<ul class="primary-menu">';
	foreach ( $items as $slug => $label ) {
		echo '<li><a href="' . esc_url( home_url( '/' . $slug . '/' ) ) . '">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}
