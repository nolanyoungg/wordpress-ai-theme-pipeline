<?php
/**
 * File purpose: Site header, skip link, branding, desktop navigation, and mobile drawer trigger.
 * References: functions.php menu registration and assets/js/theme.js menu behavior.
 * Behavior: Outputs accessible landmarks and WordPress head hooks for every template.
 * Return values: Outputs markup.
 *
 * @package Nolan_Showcase_Theme_X11
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#site-content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-x11' ); ?></a>
<header class="site-header" role="banner">
	<div class="header-shell">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="brand-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span class="brand-symbol" aria-hidden="true">N</span>
					<span><span class="brand-name"><?php bloginfo( 'name' ); ?></span><span class="brand-tagline"><?php esc_html_e( 'Web systems for ambitious teams', 'nolan-showcase-theme-x11' ); ?></span></span>
				</a>
			<?php endif; ?>
		</div>
		<nav class="desktop-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'nolan-showcase-theme-x11' ); ?>">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'primary-menu', 'container' => false, 'fallback_cb' => 'nolan_showcase_x11_primary_menu_fallback', 'depth' => 2 ) ); ?>
		</nav>
		<a class="header-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x11' ); ?></a>
		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu"><span class="menu-toggle-lines" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e( 'Open menu', 'nolan-showcase-theme-x11' ); ?></span></button>
	</div>
	<nav id="mobile-menu" class="mobile-drawer" aria-label="<?php esc_attr_e( 'Mobile navigation', 'nolan-showcase-theme-x11' ); ?>" hidden>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'mobile-menu', 'container' => false, 'fallback_cb' => 'nolan_showcase_x11_primary_menu_fallback', 'depth' => 2 ) ); ?>
		<a class="mobile-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Plan a Project', 'nolan-showcase-theme-x11' ); ?></a>
	</nav>
</header>
<main id="site-content" class="site-main">
