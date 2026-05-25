<?php
/**
 * File purpose: Site footer with service links, contact CTA, and WordPress footer hooks.
 * References: functions.php footer menu registration.
 * Behavior: Closes main content and prints footer navigation and contact details.
 * Return values: Outputs markup.
 *
 * @package Nolan_Showcase_Theme_X11
 */
?>
</main>
<footer class="site-footer" role="contentinfo">
	<div class="footer-shell">
		<section class="footer-cta" aria-labelledby="footer-cta-title">
			<div><p class="eyebrow"><?php esc_html_e( 'Ready for a better web platform?', 'nolan-showcase-theme-x11' ); ?></p><h2 id="footer-cta-title"><?php esc_html_e( 'Let us map the cleanest path from site friction to measurable growth.', 'nolan-showcase-theme-x11' ); ?></h2></div>
			<a class="button button-light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a Quote', 'nolan-showcase-theme-x11' ); ?></a>
		</section>
		<div class="footer-grid">
			<div><a class="brand-mark footer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="brand-symbol" aria-hidden="true">N</span><span><span class="brand-name"><?php bloginfo( 'name' ); ?></span><span class="brand-tagline"><?php esc_html_e( 'Design, development, support, and automation.', 'nolan-showcase-theme-x11' ); ?></span></span></a><p><?php esc_html_e( 'Nolan Showcase builds modern WordPress and WooCommerce experiences for service businesses, ecommerce teams, and growth-focused organizations.', 'nolan-showcase-theme-x11' ); ?></p></div>
			<nav aria-label="<?php esc_attr_e( 'Footer navigation', 'nolan-showcase-theme-x11' ); ?>"><h2><?php esc_html_e( 'Explore', 'nolan-showcase-theme-x11' ); ?></h2><?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'container' => false, 'fallback_cb' => 'nolan_showcase_x11_primary_menu_fallback', 'depth' => 1 ) ); ?></nav>
			<div><h2><?php esc_html_e( 'Services', 'nolan-showcase-theme-x11' ); ?></h2><ul class="footer-menu"><li><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Website Design and Development', 'nolan-showcase-theme-x11' ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Website Maintenance', 'nolan-showcase-theme-x11' ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'WooCommerce Services', 'nolan-showcase-theme-x11' ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'AI Website Automation', 'nolan-showcase-theme-x11' ); ?></a></li></ul></div>
			<div><h2><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x11' ); ?></h2><p><a href="mailto:hello@example.com"><?php esc_html_e( 'hello@example.com', 'nolan-showcase-theme-x11' ); ?></a></p><p><a href="tel:+15550198420"><?php esc_html_e( '(555) 019-8420', 'nolan-showcase-theme-x11' ); ?></a></p><p><?php esc_html_e( 'Remote delivery across the United States.', 'nolan-showcase-theme-x11' ); ?></p></div>
		</div>
		<div class="footer-bottom"><p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'nolan-showcase-theme-x11' ); ?></p><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x11' ); ?></a></div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
