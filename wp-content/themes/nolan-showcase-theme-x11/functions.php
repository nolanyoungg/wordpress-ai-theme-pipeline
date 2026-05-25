<?php
/**
 * File purpose: Theme bootstrap for Nolan Showcase Theme X11.
 * References: assets/css/theme.css, assets/js/theme.js, header.php, footer.php.
 * Behavior: Registers theme supports, menus, sidebar, and cache-busted local assets.
 * Return values: WordPress hooks execute registered callbacks; direct file access exits.
 *
 * @package Nolan_Showcase_Theme_X11
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Purpose: Configure WordPress theme supports and navigation locations.
 * Pre: WordPress has loaded the after_setup_theme hook.
 * Post: Theme supports and menus are registered for use in templates.
 * Return: void
 */
function nolan_showcase_x11_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-x11', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', array( 'height' => 72, 'width' => 240, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'nolan-showcase-theme-x11' ),
			'footer'  => esc_html__( 'Footer Menu', 'nolan-showcase-theme-x11' ),
		)
	);
}
add_action( 'after_setup_theme', 'nolan_showcase_x11_setup' );

/**
 * Purpose: Register the theme sidebar for blog and page layouts.
 * Pre: WordPress has loaded the widgets_init hook.
 * Post: Sidebar is available in the WordPress widgets screen.
 * Return: void
 */
function nolan_showcase_x11_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'nolan-showcase-theme-x11' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Widgets displayed beside blog, archive, and search content.', 'nolan-showcase-theme-x11' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nolan_showcase_x11_widgets_init' );

/**
 * Purpose: Return a cache-busted asset version based on file modification time.
 * Pre: $relative_path is a theme-relative file path.
 * Post: No state is changed.
 * Return: string File modification timestamp, or theme version fallback.
 *
 * @param string $relative_path Theme-relative asset path.
 */
function nolan_showcase_x11_asset_version( $relative_path ) {
	$file_path = get_template_directory() . '/' . ltrim( $relative_path, '/' );
	return file_exists( $file_path ) ? (string) filemtime( $file_path ) : '1.0.0';
}

/**
 * Purpose: Enqueue local CSS and JavaScript without framework dependencies.
 * Pre: WordPress has loaded the wp_enqueue_scripts hook.
 * Post: Theme stylesheet and script are queued with filemtime cache busting.
 * Return: void
 */
function nolan_showcase_x11_enqueue_assets() {
	wp_enqueue_style( 'nolan-showcase-x11-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), nolan_showcase_x11_asset_version( 'assets/css/theme.css' ) );
	wp_enqueue_script( 'nolan-showcase-x11-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), nolan_showcase_x11_asset_version( 'assets/js/theme.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'nolan_showcase_x11_enqueue_assets' );

/**
 * Purpose: Print an accessible fallback primary menu when no menu is assigned.
 * Pre: Called inside header navigation markup.
 * Post: Outputs escaped fallback links and one dropdown for core service sections.
 * Return: void
 */
function nolan_showcase_x11_primary_menu_fallback() {
	echo '<ul class="primary-menu">';
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/' ) ), esc_html__( 'Home', 'nolan-showcase-theme-x11' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/who-we-are/' ) ), esc_html__( 'Who We Are', 'nolan-showcase-theme-x11' ) );
	echo '<li class="menu-item-has-children">';
	printf( '<a href="%1$s">%2$s</a>', esc_url( home_url( '/what-we-do/' ) ), esc_html__( 'What We Do', 'nolan-showcase-theme-x11' ) );
	echo '<ul class="sub-menu">';
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/what-we-do/#design' ) ), esc_html__( 'Website Design and Development', 'nolan-showcase-theme-x11' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/what-we-do/#maintenance' ) ), esc_html__( 'Website Maintenance', 'nolan-showcase-theme-x11' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/what-we-do/#automation' ) ), esc_html__( 'AI Website Automation', 'nolan-showcase-theme-x11' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/what-we-do/#commerce' ) ), esc_html__( 'WooCommerce Services', 'nolan-showcase-theme-x11' ) );
	echo '</ul></li>';
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/work/' ) ), esc_html__( 'Work', 'nolan-showcase-theme-x11' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/resources/' ) ), esc_html__( 'Resources', 'nolan-showcase-theme-x11' ) );
	printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( home_url( '/contact/' ) ), esc_html__( 'Contact', 'nolan-showcase-theme-x11' ) );
	echo '</ul>';
}

/**
 * Purpose: Return an escaped URI for a bundled theme image.
 * Pre: $filename is a file in assets/images.
 * Post: No state is changed.
 * Return: string Escaped image URL.
 *
 * @param string $filename Local image filename.
 */
function nolan_showcase_x11_image_uri( $filename ) {
	return esc_url( get_template_directory_uri() . '/assets/images/' . ltrim( $filename, '/' ) );
}
