<?php
/**
 * Nolan Showcase Theme X10 — theme bootstrap.
 *
 * Purpose:
 * - Registers theme supports, menus, and widget areas.
 * - Enqueues the local CSS/JS bundle with `filemtime()` cache busting.
 * - Provides small helper utilities used across templates (asset URLs, brand markup).
 * - Implements a lightweight contact form handler for the Contact page template.
 *
 * Key references (WordPress):
 * - Theme supports: https://developer.wordpress.org/themes/functionality/ (general)
 * - Enqueueing assets: https://developer.wordpress.org/themes/basics/including-css-javascript/
 * - `admin_post` form handlers: https://developer.wordpress.org/reference/hooks/admin_post_action/
 *
 * @package Nolan_Showcase_Theme_X10
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme version fallback used when `filemtime()` is unavailable.
 *
 * Purpose: Provide a stable cache-busting value for enqueued assets.
 * Pre: Theme files are readable.
 * Post: Constant is available to all theme functions.
 */
define( 'NOLAN_SHOWCASE_THEME_X10_VERSION', '1.0.0' );

/**
 * Return a theme asset URL for a relative path.
 *
 * Purpose: Centralize safe asset URL generation across templates.
 * Pre: `$relative_path` is a theme-relative path (stringable).
 * Post: Returns an escaped absolute URL for use in HTML attributes.
 *
 * @param string $relative_path Theme-relative file path (e.g. `assets/css/theme.css`).
 * @return string Escaped URL.
 */
function nolan_showcase_theme_x10_asset_url( $relative_path ) {
	return esc_url( get_theme_file_uri( ltrim( (string) $relative_path, '/' ) ) );
}

/**
 * Determine an asset version string using `filemtime()` when possible.
 *
 * Purpose: Cache bust theme assets while keeping deploys simple.
 * Pre: `$relative_path` points to a file inside the theme.
 * Post: Returns a version string suitable for enqueueing.
 *
 * @param string $relative_path Theme-relative file path.
 * @return string Version string.
 */
function nolan_showcase_theme_x10_asset_version( $relative_path ) {
	$path = get_theme_file_path( ltrim( (string) $relative_path, '/' ) );
	if ( $path && file_exists( $path ) ) {
		return (string) filemtime( $path );
	}
	return NOLAN_SHOWCASE_THEME_X10_VERSION;
}

/**
 * Register theme supports and menus.
 *
 * Purpose: Configure core theme capabilities for classic templates.
 * Pre: Runs on `after_setup_theme`.
 * Post: Theme supports and nav menus are registered.
 *
 * @return void
 */
function nolan_showcase_theme_x10_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-x10', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 56, 'width' => 220, 'flex-width' => true, 'flex-height' => true ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'search-form',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', 'nolan-showcase-theme-x10' ),
			'footer'  => __( 'Footer menu', 'nolan-showcase-theme-x10' ),
		)
	);
}
add_action( 'after_setup_theme', 'nolan_showcase_theme_x10_setup' );

/**
 * Set the `$content_width` global for embeds and media.
 *
 * Purpose: Provide a sane max width used by WordPress for oEmbed sizing.
 * Pre: Runs early on `after_setup_theme`.
 * Post: `$GLOBALS['content_width']` is set to an integer.
 *
 * @return void
 */
function nolan_showcase_theme_x10_content_width() {
	$GLOBALS['content_width'] = isset( $GLOBALS['content_width'] ) ? (int) $GLOBALS['content_width'] : 1200;
}
add_action( 'after_setup_theme', 'nolan_showcase_theme_x10_content_width', 0 );

/**
 * Register widget areas (sidebars).
 *
 * Purpose: Enable classic sidebar/footer widgets.
 * Pre: Runs on `widgets_init`.
 * Post: Widget area(s) are registered.
 *
 * @return void
 */
function nolan_showcase_theme_x10_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'nolan-showcase-theme-x10' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here.', 'nolan-showcase-theme-x10' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nolan_showcase_theme_x10_widgets_init' );

/**
 * Enqueue the theme's local stylesheet and script.
 *
 * Purpose: Load `assets/css/theme.css` and `assets/js/theme.js` with cache busting.
 * Pre: Runs on `wp_enqueue_scripts`.
 * Post: Theme assets are enqueued without jQuery dependency.
 *
 * @return void
 */
function nolan_showcase_theme_x10_enqueue_assets() {
	$style_rel = 'assets/css/theme.css';
	$js_rel    = 'assets/js/theme.js';

	wp_enqueue_style(
		'nolan-showcase-theme-x10',
		nolan_showcase_theme_x10_asset_url( $style_rel ),
		array(),
		nolan_showcase_theme_x10_asset_version( $style_rel )
	);

	wp_enqueue_script(
		'nolan-showcase-theme-x10',
		nolan_showcase_theme_x10_asset_url( $js_rel ),
		array(),
		nolan_showcase_theme_x10_asset_version( $js_rel ),
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nolan_showcase_theme_x10_enqueue_assets' );

/**
 * Provide the display brand name used in header/footer.
 *
 * Purpose: Keep brand naming consistent across templates.
 * Pre: None.
 * Post: Returns a translated string.
 *
 * @return string Brand name.
 */
function nolan_showcase_theme_x10_get_brand_name() {
	return __( 'MNY Photo', 'nolan-showcase-theme-x10' );
}

/**
 * Render a brand/logo link for the site header.
 *
 * Purpose: Prefer the WordPress Custom Logo when configured; otherwise show a local mark + text.
 * Pre: Called within template output.
 * Post: Echoes HTML markup.
 *
 * @return void
 */
function nolan_showcase_theme_x10_site_logo_markup() {
	$home = esc_url( home_url( '/' ) );

	if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
		echo '<div class="nolan-menu__brand nolan-menu__brand--custom-logo">';
		the_custom_logo();
		echo '</div>';
		return;
	}

	echo '<a class="nolan-menu__brand" href="' . $home . '">';
	$mark = nolan_showcase_theme_x10_asset_url( 'assets/images/logo-mark.svg' );
	echo '<span class="nolan-menu__brand-mark" aria-hidden="true"><img src="' . esc_url( $mark ) . '" width="28" height="28" alt="" decoding="async" loading="eager"></span>';
	echo '<span class="nolan-menu__brand-text">' . esc_html( nolan_showcase_theme_x10_get_brand_name() ) . '</span>';
	echo '</a>';
}

/**
 * Return the Contact page URL (pretty permalink).
 *
 * Purpose: Centralize canonical theme navigation URLs.
 * Pre: WordPress is loaded.
 * Post: Returns an escaped URL.
 *
 * @return string Contact page URL.
 */
function nolan_showcase_theme_x10_get_contact_url() {
	return esc_url( home_url( '/contact/' ) );
}

/**
 * Handle contact form submissions (admin-post endpoint).
 *
 * Purpose: Send a simple email to the site owner using WordPress mail configuration.
 * Pre: Request is a POST with nonce and expected fields.
 * Post: Sends mail via `wp_mail()` when valid and redirects back to the Contact page with a status flag.
 *
 * @return void
 */
function nolan_showcase_theme_x10_handle_contact_submission() {
	if ( 'POST' !== strtoupper( (string) ( $_SERVER['REQUEST_METHOD'] ?? '' ) ) ) {
		wp_safe_redirect( nolan_showcase_theme_x10_get_contact_url() );
		exit;
	}

	$redirect = wp_get_referer();
	if ( ! $redirect ) {
		$redirect = nolan_showcase_theme_x10_get_contact_url();
	}

	$nonce = isset( $_POST['nolan_contact_nonce'] ) ? (string) wp_unslash( $_POST['nolan_contact_nonce'] ) : '';
	if ( ! wp_verify_nonce( $nonce, 'nolan_showcase_theme_x10_contact' ) ) {
		wp_safe_redirect( add_query_arg( 'contact_error', 'nonce', $redirect ) );
		exit;
	}

	$honeypot = isset( $_POST['nolan_company'] ) ? (string) wp_unslash( $_POST['nolan_company'] ) : '';
	if ( '' !== trim( $honeypot ) ) {
		wp_safe_redirect( add_query_arg( 'contact_error', 'spam', $redirect ) );
		exit;
	}

	$name      = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
	$email     = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
	$phone     = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );
	$date      = sanitize_text_field( wp_unslash( $_POST['timeframe'] ?? '' ) );
	$location  = sanitize_text_field( wp_unslash( $_POST['location'] ?? '' ) );
	$message   = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );
	$consent   = sanitize_text_field( wp_unslash( $_POST['consent'] ?? '' ) );
	$has_email = is_email( $email );

	if ( '' === $name || ! $has_email || '' === $message ) {
		wp_safe_redirect( add_query_arg( 'contact_error', 'required', $redirect ) );
		exit;
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf(
		/* translators: 1: site name, 2: submitter name */
		__( '[%1$s] New inquiry from %2$s', 'nolan-showcase-theme-x10' ),
		wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES ),
		$name
	);

	$lines = array(
		'New inquiry received via the Contact page.',
		'',
		'Name: ' . $name,
		'Email: ' . $email,
		'Phone: ' . ( $phone ? $phone : '—' ),
		'Preferred timeframe: ' . ( $date ? $date : '—' ),
		'Location: ' . ( $location ? $location : '—' ),
		'Consent: ' . ( $consent ? $consent : '—' ),
		'',
		'Message:',
		$message,
	);

	$headers = array();
	$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';

	$sent = wp_mail( $to, $subject, implode( "\n", $lines ), $headers );
	if ( $sent ) {
		wp_safe_redirect( add_query_arg( 'contact_success', '1', $redirect ) );
		exit;
	}

	wp_safe_redirect( add_query_arg( 'contact_error', 'mail', $redirect ) );
	exit;
}
add_action( 'admin_post_nolan_showcase_theme_x10_contact', 'nolan_showcase_theme_x10_handle_contact_submission' );
add_action( 'admin_post_nopriv_nolan_showcase_theme_x10_contact', 'nolan_showcase_theme_x10_handle_contact_submission' );
