<?php
/**
 * Header template.
 *
 * @package Nolan_Showcase_Theme_01
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
<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-01' ); ?></a>
<header class="site-header" data-site-header>
	<div class="container header-shell">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr__( 'Home', 'nolan-showcase-theme-01' ); ?>">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<span class="brand-mark" aria-hidden="true">E</span>
				<span class="brand-text">
					<strong><?php esc_html_e( 'EmeraldEdge', 'nolan-showcase-theme-01' ); ?></strong>
					<em><?php esc_html_e( 'Landscaping & Lawn Care', 'nolan-showcase-theme-01' ); ?></em>
				</span>
				<?php
			}
			?>
		</a>

		<button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-menu">
			<span><?php esc_html_e( 'Menu', 'nolan-showcase-theme-01' ); ?></span>
		</button>

		<nav class="primary-nav" aria-label="<?php echo esc_attr__( 'Primary navigation', 'nolan-showcase-theme-01' ); ?>" data-primary-nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav-menu',
					'container'      => false,
					'fallback_cb'    => 'nolan_showcase_01_fallback_menu',
				)
			);
			?>
		</nav>
	</div>
</header>

