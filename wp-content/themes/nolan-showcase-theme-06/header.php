<?php
/**
 * Header template.
 *
 * @package Nolan_Showcase_Theme_06
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
<a class="skip-link" href="#site-content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-06' ); ?></a>
<header class="site-header">
	<div class="header-inner">
		<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="brand-mark" aria-hidden="true">06</span>
				<span>
					<span class="brand-name"><?php echo esc_html( get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : 'Atelier North' ); ?></span>
					<span class="brand-line"><?php esc_html_e( 'Spatial identity and interiors', 'nolan-showcase-theme-06' ); ?></span>
				</span>
			<?php endif; ?>
		</a>
		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" data-menu-toggle>
			<span class="menu-toggle__bars" aria-hidden="true"></span>
			<span class="menu-toggle__text"><?php esc_html_e( 'Menu', 'nolan-showcase-theme-06' ); ?></span>
		</button>
		<nav id="primary-navigation" class="primary-navigation" aria-label="<?php echo esc_attr_x( 'Primary navigation', 'aria label', 'nolan-showcase-theme-06' ); ?>" data-site-nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => 'nolan_showcase_06_primary_menu_fallback',
				)
			);
			?>
		</nav>
	</div>
</header>
<main id="site-content" class="site-main">

