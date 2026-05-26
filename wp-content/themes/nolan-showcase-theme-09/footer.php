<?php
/**
 * Site footer.
 *
 * @package Nolan_Showcase_Theme_09
 */
?>
<footer class="site-footer">
	<div class="container site-footer__grid">
		<div>
			<a class="brand brand--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo nst09_asset_uri( 'assets/images/logo-mark.svg' ); ?>" alt="" width="40" height="40">
				<span>
					<strong><?php echo esc_html( get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : 'Civic Pixel Works' ); ?></strong>
					<small><?php esc_html_e( 'Premium WordPress, WooCommerce, Shopify, and analytics support.', 'nolan-showcase-theme-09' ); ?></small>
				</span>
			</a>
			<p><?php esc_html_e( 'A practical technical partner for businesses that need a website that sells, loads, measures, and survives routine change.', 'nolan-showcase-theme-09' ); ?></p>
		</div>
		<nav aria-label="<?php echo esc_attr__( 'Footer navigation', 'nolan-showcase-theme-09' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
			<?php if ( ! has_nav_menu( 'footer' ) ) : ?>
				<ul class="footer-menu">
					<li><a href="<?php echo esc_url( home_url( '/website-maintenance/' ) ); ?>"><?php esc_html_e( 'Maintenance', 'nolan-showcase-theme-09' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/ai-website-integration/' ) ); ?>"><?php esc_html_e( 'AI integration', 'nolan-showcase-theme-09' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/analytics-performance/' ) ); ?>"><?php esc_html_e( 'Analytics', 'nolan-showcase-theme-09' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'nolan-showcase-theme-09' ); ?></a></li>
				</ul>
			<?php endif; ?>
		</nav>
		<div>
			<?php if ( is_active_sidebar( 'footer-proof' ) ) : ?>
				<?php dynamic_sidebar( 'footer-proof' ); ?>
			<?php else : ?>
				<p class="eyebrow"><?php esc_html_e( 'Operating standard', 'nolan-showcase-theme-09' ); ?></p>
				<p><?php esc_html_e( 'Every engagement includes scope notes, QA evidence, launch controls, and clear next-step recommendations.', 'nolan-showcase-theme-09' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div class="container site-footer__bottom">
		<span><?php echo esc_html( sprintf( __( '© %1$s Civic Pixel Works', 'nolan-showcase-theme-09' ), gmdate( 'Y' ) ) ); ?></span>
		<span><?php esc_html_e( 'Built for accountable website operations.', 'nolan-showcase-theme-09' ); ?></span>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
