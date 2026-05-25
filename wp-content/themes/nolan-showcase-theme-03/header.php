<?php
/**
 * Header template.
 *
 * @package Nolan_Showcase_Theme_03
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

<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-03' ); ?></a>

<header class="site-header" data-site-header>
	<div class="container header-shell">
		<div class="brand">
			<a class="brand-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr__( 'MNY Photo home', 'nolan-showcase-theme-03' ); ?>">
				<span class="brand-mark" aria-hidden="true">
					<?php
					$custom_logo_id = (int) get_theme_mod( 'custom_logo' );
					if ( $custom_logo_id ) {
						echo wp_kses_post( wp_get_attachment_image( $custom_logo_id, 'full', false, array( 'class' => 'brand-logo' ) ) );
					} else {
						nolan_showcase_03_brand_mark();
					}
					?>
				</span>
				<span class="brand-text">
					<strong><?php esc_html_e( 'MNY Photo', 'nolan-showcase-theme-03' ); ?></strong>
					<em><?php esc_html_e( 'Premium editorial photography', 'nolan-showcase-theme-03' ); ?></em>
				</span>
			</a>
		</div>

		<button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-menu">
			<span class="nav-toggle__label"><?php esc_html_e( 'Menu', 'nolan-showcase-theme-03' ); ?></span>
		</button>

		<nav class="primary-nav" aria-label="<?php echo esc_attr__( 'Primary navigation', 'nolan-showcase-theme-03' ); ?>" data-primary-nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav-menu',
					'container'      => false,
					'fallback_cb'    => 'nolan_showcase_03_primary_menu_fallback',
				)
			);
			?>

			<a class="nav-cta button button--small button--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
				<?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-03' ); ?>
			</a>
		</nav>
	</div>
</header>
