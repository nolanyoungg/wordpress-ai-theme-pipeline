<?php
/**
 * Footer template.
 *
 * @package Nolan_Showcase_Theme_06
 */
?>
</main>
<footer class="site-footer" role="contentinfo">
	<div class="footer-inner">
		<div>
			<p class="footer-kicker"><?php esc_html_e( 'Nolan Showcase Theme 06', 'nolan-showcase-theme-06' ); ?></p>
			<h2><?php esc_html_e( 'A classic theme for confident studio portfolios.', 'nolan-showcase-theme-06' ); ?></h2>
		</div>
		<nav class="footer-nav" aria-label="<?php echo esc_attr_x( 'Footer navigation', 'aria label', 'nolan-showcase-theme-06' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 1,
				)
			);
			?>
		</nav>
		<p class="footer-meta">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : 'Atelier North' ); ?>. <?php esc_html_e( 'Built with local assets only.', 'nolan-showcase-theme-06' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

