<?php
/**
 * Footer template.
 *
 * @package Nolan_Showcase_Theme
 */
?>
<footer class="site-footer">
	<div class="container footer-grid">
		<div>
			<a class="brand brand--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="brand__mark" aria-hidden="true">NS</span>
				<span class="brand__text"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
			</a>
			<p><?php esc_html_e( 'Senior software, WordPress, automation, AI, analytics, and leadership work for teams that need clear systems and measurable outcomes.', 'nolan-showcase-theme' ); ?></p>
		</div>
		<nav class="footer-links" aria-label="<?php esc_attr_e( 'Footer navigation', 'nolan-showcase-theme' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'nav-menu nav-menu--footer',
					'container'      => false,
					'depth'          => 1,
					'fallback_cb'    => 'nolan_showcase_footer_fallback_menu',
				)
			);
			?>
		</nav>
	</div>
	<div class="footer-bottom">
		<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
