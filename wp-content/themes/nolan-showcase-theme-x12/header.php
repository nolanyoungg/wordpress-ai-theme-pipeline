<?php
/**
 * Global document header and navigation.
 *
 * Connects to WordPress document helpers, body classes, wp_head(), custom logo,
 * registered menus, and the JavaScript disclosure/dropdown behavior. Assumes
 * dropdown content is representative service navigation and links to normal
 * WordPress pages.
 *
 * @package Nolan_Showcase_Theme_X12
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
<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-x12' ); ?></a>
<header class="site-header" data-site-header>
	<div class="container header-grid">
		<?php nolan_showcase_x12_site_brand(); ?>
		<nav class="main-nav" aria-label="<?php echo esc_attr_x( 'Primary navigation', 'aria label', 'nolan-showcase-theme-x12' ); ?>">
			<button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-navigation"><?php esc_html_e( 'Menu', 'nolan-showcase-theme-x12' ); ?></button>
			<div id="primary-navigation" class="nav-drawer" data-nav-drawer>
				<ul class="primary-menu">
					<li><a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'About', 'nolan-showcase-theme-x12' ); ?></a></li>
					<li class="has-dropdown">
						<button type="button" class="dropdown-trigger" data-dropdown-trigger aria-expanded="false" aria-controls="services-menu"><?php esc_html_e( 'Services', 'nolan-showcase-theme-x12' ); ?></button>
						<div id="services-menu" class="dropdown-panel" data-dropdown-panel hidden>
							<a href="<?php echo esc_url( home_url( '/website-design-and-development/' ) ); ?>"><?php esc_html_e( 'Website Design and Development', 'nolan-showcase-theme-x12' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/website-maintenance/' ) ); ?>"><?php esc_html_e( 'Website Maintenance', 'nolan-showcase-theme-x12' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/website-problem-fixes/' ) ); ?>"><?php esc_html_e( 'Website Problem Fixes', 'nolan-showcase-theme-x12' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/ai-chatbot-integration/' ) ); ?>"><?php esc_html_e( 'AI Chatbot Integration', 'nolan-showcase-theme-x12' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/ai-website-automation/' ) ); ?>"><?php esc_html_e( 'AI Website Automation', 'nolan-showcase-theme-x12' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/woocommerce-services/' ) ); ?>"><?php esc_html_e( 'WooCommerce Services', 'nolan-showcase-theme-x12' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/seo-and-analytics/' ) ); ?>"><?php esc_html_e( 'SEO and Analytics', 'nolan-showcase-theme-x12' ); ?></a>
						</div>
					</li>
					<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x12' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x12' ); ?></a></li>
				</ul>
			</div>
		</nav>
		<a class="button button-primary header-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x12' ); ?></a>
	</div>
</header>
<main id="content" class="site-main">
