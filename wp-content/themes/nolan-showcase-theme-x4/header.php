<?php
/**
 * Header template.
 *
 * @package Nolan_Showcase_Theme_X4
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
<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-x4' ); ?></a>
<header class="site-header" data-site-header>
	<div class="container header-shell">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr__( 'Home', 'nolan-showcase-theme-x4' ); ?>">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<span class="brand-mark" aria-hidden="true">E</span>
				<span class="brand-text">
					<strong><?php esc_html_e( 'EmeraldEdge', 'nolan-showcase-theme-x4' ); ?></strong>
					<em><?php esc_html_e( 'Landscaping & Lawn Care', 'nolan-showcase-theme-x4' ); ?></em>
				</span>
				<?php
			}
			?>
		</a>

		<button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-menu">
			<span><?php esc_html_e( 'Menu', 'nolan-showcase-theme-x4' ); ?></span>
		</button>

		<nav class="primary-nav" aria-label="<?php echo esc_attr__( 'Primary navigation', 'nolan-showcase-theme-x4' ); ?>" data-primary-nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav-menu',
					'container'      => false,
					'fallback_cb'    => 'nolan_showcase_x4_fallback_menu',
				)
			);
			?>
		</nav>
	</div>
</header>

