<?php
/**
 * Footer template.
 *
 * @package Nolan_Showcase_Theme_X1
 */
?>
<footer class="site-footer">
	<div class="container footer-grid">
		<div class="footer-brand">
			<a class="brand brand--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="brand-mark" aria-hidden="true">N</span>
				<span class="brand-text">
					<strong><?php esc_html_e( 'Nolan Showcase Theme X1', 'nolan-showcase-theme-x1' ); ?></strong>
					<em><?php esc_html_e( 'Premium systems portfolio theme.', 'nolan-showcase-theme-x1' ); ?></em>
				</span>
			</a>
			<p class="footer-copy"><?php esc_html_e( 'Software development, WordPress systems, automation, analytics, and AI integration delivered with calm engineering rigor.', 'nolan-showcase-theme-x1' ); ?></p>
		</div>

		<div class="footer-nav">
			<p class="footer-label"><?php esc_html_e( 'Navigate', 'nolan-showcase-theme-x1' ); ?></p>
			<nav aria-label="<?php echo esc_attr__( 'Footer navigation', 'nolan-showcase-theme-x1' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'footer-menu',
						'container'      => false,
						'fallback_cb'    => 'nolan_showcase_theme_x1_footer_fallback_menu',
					)
				);
				?>
			</nav>
		</div>

		<div class="footer-widgets">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<?php else : ?>
				<p class="footer-label"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x1' ); ?></p>
				<p class="footer-copy"><?php esc_html_e( 'Add a Contact widget or customize this area to match your real intake flow.', 'nolan-showcase-theme-x1' ); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<div class="container footer-bottom">
		<span><?php echo esc_html( sprintf( __( '© %s Nolan Young', 'nolan-showcase-theme-x1' ), wp_date( 'Y' ) ) ); ?></span>
		<span><?php esc_html_e( 'Built as a classic WordPress theme.', 'nolan-showcase-theme-x1' ); ?></span>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

