<?php
/**
 * Footer template.
 *
 * @package Nolan_Showcase_Theme_X4
 */
?>
<footer class="site-footer">
	<div class="container footer-grid">
		<a class="brand brand--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="brand-mark" aria-hidden="true">E</span>
			<span class="brand-text">
				<strong><?php esc_html_e( 'EmeraldEdge Lawn Co.', 'nolan-showcase-theme-x4' ); ?></strong>
				<em><?php esc_html_e( 'Premium landscaping, seasonal plans, clean edges.', 'nolan-showcase-theme-x4' ); ?></em>
			</span>
		</a>

		<nav aria-label="<?php echo esc_attr__( 'Footer navigation', 'nolan-showcase-theme-x4' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'fallback_cb'    => 'nolan_showcase_x4_footer_fallback_menu',
				)
			);
			?>
		</nav>

		<div class="footer-note">
			<p><?php echo esc_html( sprintf( __( 'Licensed & insured • Built for %s', 'nolan-showcase-theme-x4' ), wp_date( 'Y' ) ) ); ?></p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

