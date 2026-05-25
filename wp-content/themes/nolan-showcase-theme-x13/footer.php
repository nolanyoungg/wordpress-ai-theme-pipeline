<?php
/**
 * Purpose: Footer content, secondary navigation, contact prompts, and WordPress footer hook.
 * WordPress role: Included after template content by get_footer().
 * Related files: header.php, functions.php, assets/css/theme.css.
 * Important behavior: Keeps footer links local and avoids external runtime dependencies.
 *
 * @package Nolan_Showcase_Theme_X13
 */
?>
<footer class="site-footer" role="contentinfo">
	<div class="footer-grid">
		<section>
			<a class="brand-mark footer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>N</span><strong>NolanWP</strong></a>
			<p><?php esc_html_e( 'Premium WordPress design, development, care, analytics, performance, and AI website services for business owners who want a calmer web partner.', 'nolan-showcase-theme-x13' ); ?></p>
		</section>
		<section>
			<h2><?php esc_html_e( 'Services', 'nolan-showcase-theme-x13' ); ?></h2>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'What We Do', 'nolan-showcase-theme-x13' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/website-maintenance/' ) ); ?>"><?php esc_html_e( 'Maintenance', 'nolan-showcase-theme-x13' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/ai-chatbot-integration/' ) ); ?>"><?php esc_html_e( 'AI Integrations', 'nolan-showcase-theme-x13' ); ?></a></li>
			</ul>
		</section>
		<section>
			<h2><?php esc_html_e( 'Company', 'nolan-showcase-theme-x13' ); ?></h2>
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
		</section>
		<section>
			<h2><?php esc_html_e( 'Ready when you are', 'nolan-showcase-theme-x13' ); ?></h2>
			<p><?php esc_html_e( 'Tell us what is working, what is stuck, and what needs to happen next.', 'nolan-showcase-theme-x13' ); ?></p>
			<a class="button button-light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a Quote', 'nolan-showcase-theme-x13' ); ?></a>
		</section>
	</div>
	<div class="footer-bottom">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Built for reliable WordPress growth.', 'nolan-showcase-theme-x13' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
