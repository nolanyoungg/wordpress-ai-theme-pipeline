<?php
/**
 * Site header.
 *
 * @package Nolan_Showcase_Theme_08
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-08' ); ?></a>
<header class="site-header" data-header>
	<div class="container site-header__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<img src="<?php echo nst08_asset_uri( 'assets/svg/logo-mark.svg' ); ?>" alt="" width="42" height="42">
			<span>
				<strong><?php echo esc_html( get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : 'Northstar Web Bureau' ); ?></strong>
				<small><?php esc_html_e( 'WordPress + Shopify systems', 'nolan-showcase-theme-08' ); ?></small>
			</span>
		</a>
		<button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-menu">
			<span><?php esc_html_e( 'Menu', 'nolan-showcase-theme-08' ); ?></span>
		</button>
		<nav class="primary-nav" id="primary-menu" data-nav-menu aria-label="<?php echo esc_attr__( 'Primary navigation', 'nolan-showcase-theme-08' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
			<?php if ( ! has_nav_menu( 'primary' ) ) : ?>
				<ul class="menu">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'nolan-showcase-theme-08' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php esc_html_e( 'Process', 'nolan-showcase-theme-08' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Work', 'nolan-showcase-theme-08' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'nolan-showcase-theme-08' ); ?></a></li>
				</ul>
			<?php endif; ?>
		</nav>
	</div>
</header>
