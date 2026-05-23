<?php
/**
 * Footer template.
 *
 * @package Nolan_Showcase_Theme_X3
 */
?>
<footer class="site-footer">
	<div class="container footer-grid">
		<div>
			<a class="brand brand--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="brand-mark" aria-hidden="true">N</span>
				<span class="brand-text">
					<strong><?php esc_html_e( 'Nolan Showcase Theme X3', 'nolan-showcase-theme-x3' ); ?></strong>
					<em><?php esc_html_e( 'Portfolio systems for serious web work.', 'nolan-showcase-theme-x3' ); ?></em>
				</span>
			</a>
		</div>
		<nav aria-label="<?php echo esc_attr__( 'Footer navigation', 'nolan-showcase-theme-x3' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'fallback_cb'    => 'nolan_showcase_x3_footer_fallback_menu',
				)
			);
			?>
		</nav>
		<p class="footer-note"><?php echo esc_html( sprintf( __( 'Built locally for %s.', 'nolan-showcase-theme-x3' ), wp_date( 'Y' ) ) ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
