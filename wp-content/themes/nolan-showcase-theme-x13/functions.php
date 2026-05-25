<?php
/**
 * Purpose: Theme setup, menus, widget areas, and asset loading.
 * WordPress role: Runs during theme bootstrap through WordPress hooks.
 * Related files: style.css, assets/css/theme.css, assets/js/theme.js, header.php.
 * Important behavior: Uses filemtime cache busting and avoids runtime dependencies.
 *
 * @package Nolan_Showcase_Theme_X13
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Purpose: Register classic theme features and navigation locations.
 * Pre: WordPress has loaded theme support APIs.
 * Post: Theme supports, menus, and editor defaults are available.
 * Return: void
 */
function nstx13_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-x13', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 260, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' )
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'nolan-showcase-theme-x13' ),
			'footer'  => esc_html__( 'Footer Menu', 'nolan-showcase-theme-x13' ),
		)
	);
}
add_action( 'after_setup_theme', 'nstx13_setup' );

/**
 * Purpose: Register the theme sidebar for posts and content pages.
 * Pre: WordPress widgets API is loaded.
 * Post: Sidebar is available in Appearance > Widgets.
 * Return: void
 */
function nstx13_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Agency Sidebar', 'nolan-showcase-theme-x13' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Widgets for posts, archives, and resource pages.', 'nolan-showcase-theme-x13' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nstx13_widgets_init' );

/**
 * Purpose: Enqueue local CSS and JavaScript with file modification cache busting.
 * Pre: Theme asset files exist in assets/css and assets/js.
 * Post: Front-end styles and scripts are loaded.
 * Return: void
 */
function nstx13_enqueue_assets() {
	$css_path = get_template_directory() . '/assets/css/theme.css';
	$js_path  = get_template_directory() . '/assets/js/theme.js';

	wp_enqueue_style(
		'nstx13-theme',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
		file_exists( $css_path ) ? filemtime( $css_path ) : '1.0.0'
	);

	wp_enqueue_script(
		'nstx13-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		file_exists( $js_path ) ? filemtime( $js_path ) : '1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'nstx13_enqueue_assets' );

/**
 * Purpose: Add dropdown indicators to menu items that have children.
 * Pre: WordPress is rendering nav menu items.
 * Post: Parent menu items expose an accessible visual dropdown hint.
 * Return: array Modified menu item classes.
 *
 * @param array    $classes Menu item classes.
 * @param WP_Post  $item    Menu item object.
 * @param stdClass $args    Menu args.
 * @return array
 */
function nstx13_nav_menu_css_class( $classes, $item, $args ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location && in_array( 'menu-item-has-children', $classes, true ) ) {
		$classes[] = 'has-dropdown';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'nstx13_nav_menu_css_class', 10, 3 );

/**
 * Purpose: Provide a fallback primary menu for fresh WordPress installs.
 * Pre: No custom menu has been assigned.
 * Post: Header still renders complete agency navigation.
 * Return: void
 */
function nstx13_primary_menu_fallback() {
	$items = array(
		'Home'       => home_url( '/' ),
		'Who We Are' => home_url( '/who-we-are/' ),
		'What We Do' => home_url( '/what-we-do/' ),
		'Our Work'   => home_url( '/work/' ),
		'Resources'  => home_url( '/resources/' ),
		'Contact'    => home_url( '/contact/' ),
	);
	echo '<ul id="primary-menu" class="primary-menu">';
	foreach ( $items as $label => $url ) {
		printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( $url ), esc_html( $label ) );
	}
	echo '</ul>';
}

/**
 * Purpose: Return reusable service data for templates.
 * Pre: Called from a theme template.
 * Post: Service cards can be rendered consistently.
 * Return: array Service definitions.
 *
 * @return array
 */
function nstx13_get_services() {
	return array(
		array( 'title' => 'WordPress Website Design', 'text' => 'Conversion-minded designs that make your brand feel clear, credible, and easy to act on.', 'url' => home_url( '/wordpress-website-design/' ) ),
		array( 'title' => 'WordPress Development', 'text' => 'Custom classic theme builds, plugin-aware integrations, clean templates, and maintainable code.', 'url' => home_url( '/wordpress-development/' ) ),
		array( 'title' => 'Website Maintenance', 'text' => 'Updates, monitoring, backups, content support, and practical care plans for growing sites.', 'url' => home_url( '/website-maintenance/' ) ),
		array( 'title' => 'Website Problem Fixes', 'text' => 'Focused troubleshooting for layout issues, broken forms, slow pages, errors, and launch blockers.', 'url' => home_url( '/website-problem-fixes/' ) ),
		array( 'title' => 'WooCommerce Services', 'text' => 'Storefront improvements, checkout clarity, product flows, reporting, and operational support.', 'url' => home_url( '/woocommerce-services/' ) ),
		array( 'title' => 'SEO, Analytics, and AI', 'text' => 'Technical SEO, tracking plans, chatbot integrations, automation, and performance optimization.', 'url' => home_url( '/what-we-do/' ) ),
	);
}
?>
