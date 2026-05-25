<?php
/**
 * Global footer template.
 *
 * Connects to footer navigation, dynamic sidebar capability through WordPress,
 * and wp_footer(). Assumes contact links are placeholders for business intake
 * and contain no secrets or external service dependency.
 *
 * @package Nolan_Showcase_Theme_X12
 */
?>
</main>
<footer class="site-footer">
	<div class="container footer-grid">
		<section>
			<h2><?php echo esc_html( nolan_showcase_x12_brand_name() ); ?></h2>
			<p><?php esc_html_e( 'Premium WordPress design, maintenance, automation, WooCommerce, SEO, analytics, and practical AI website enhancements for growing businesses.', 'nolan-showcase-theme-x12' ); ?></p>
			<a class="button button-light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a Quote', 'nolan-showcase-theme-x12' ); ?></a>
		</section>
		<section>
			<h2><?php esc_html_e( 'Services', 'nolan-showcase-theme-x12' ); ?></h2>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/website-design-and-development/' ) ); ?>"><?php esc_html_e( 'Website Design', 'nolan-showcase-theme-x12' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/website-maintenance/' ) ); ?>"><?php esc_html_e( 'Maintenance', 'nolan-showcase-theme-x12' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/ai-chatbot-integration/' ) ); ?>"><?php esc_html_e( 'AI Chatbot Integration', 'nolan-showcase-theme-x12' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/woocommerce-services/' ) ); ?>"><?php esc_html_e( 'WooCommerce', 'nolan-showcase-theme-x12' ); ?></a></li>
			</ul>
		</section>
		<section>
			<h2><?php esc_html_e( 'Company', 'nolan-showcase-theme-x12' ); ?></h2>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => 'footer-menu',
					'fallback_cb'    => false,
				)
			);
			?>
		</section>
	</div>
	<div class="container footer-bottom">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( nolan_showcase_x12_brand_name() ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
