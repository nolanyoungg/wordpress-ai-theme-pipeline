<?php
/**
 * Purpose: Site header with skip link, logo, primary navigation, dropdowns, and CTA.
 * WordPress role: Included before template content by get_header().
 * Related files: functions.php, footer.php, assets/js/theme.js, assets/css/theme.css.
 * Important behavior: Mobile menu uses aria-expanded and aria-controls.
 *
 * @package Nolan_Showcase_Theme_X13
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
<a class="skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-x13' ); ?></a>
<header class="site-header" role="banner">
	<div class="header-shell">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="brand-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php bloginfo( 'name' ); ?>">
					<span>N</span><strong>NolanWP</strong>
				</a>
			<?php endif; ?>
		</div>
		<button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false">
			<span class="menu-toggle-lines" aria-hidden="true"></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'nolan-showcase-theme-x13' ); ?></span>
		</button>
		<nav id="primary-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'nolan-showcase-theme-x13' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => 'nstx13_primary_menu_fallback',
				)
			);
			?>
		</nav>
		<a class="header-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'nolan-showcase-theme-x13' ); ?></a>
	</div>
</header>
