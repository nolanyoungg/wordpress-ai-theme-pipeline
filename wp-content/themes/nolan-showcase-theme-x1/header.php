<?php
/**
 * Header template.
 *
 * @package Nolan_Showcase_Theme_X1
 */
?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-x1' ); ?></a>

<header class="site-header" data-site-header>
	<div class="container header-shell">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr__( 'Go to homepage', 'nolan-showcase-theme-x1' ); ?>">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<span class="brand-mark" aria-hidden="true">N</span>
				<span class="brand-text">
					<strong><?php esc_html_e( 'Nolan', 'nolan-showcase-theme-x1' ); ?></strong>
					<em><?php esc_html_e( 'Software / WordPress / AI', 'nolan-showcase-theme-x1' ); ?></em>
				</span>
				<?php
			}
			?>
		</a>

		<button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-menu">
			<span class="nav-toggle__icon" aria-hidden="true"></span>
			<span class="nav-toggle__label"><?php esc_html_e( 'Menu', 'nolan-showcase-theme-x1' ); ?></span>
		</button>

		<nav class="primary-nav" aria-label="<?php echo esc_attr__( 'Primary navigation', 'nolan-showcase-theme-x1' ); ?>" data-primary-nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav-menu',
					'container'      => false,
					'fallback_cb'    => 'nolan_showcase_theme_x1_fallback_menu',
				)
			);
			?>
		</nav>
	</div>
</header>

