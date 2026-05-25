<?php
/**
 * File purpose: Site footer with nursery links, contact CTA, and WordPress footer hooks.
 * References: functions.php footer menu registration.
 * Behavior: Closes main content and prints footer navigation and contact details.
 * Return values: Outputs markup.
 *
 * @package Nolan_Showcase_Theme_05
 */
?>
</main>
<footer class="footer" role="contentinfo">
	<div class="container">
		<div class="footer-grid">
			<div>
				<a class="brand-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="brand-symbol" aria-hidden="true">F</span>
					<span>
						<span class="brand-name"><?php esc_html_e( 'Fernline Nursery', 'nolan-showcase-theme-05' ); ?></span>
						<span class="brand-tagline"><?php esc_html_e( 'Plants, planters, and care made simple.', 'nolan-showcase-theme-05' ); ?></span>
					</span>
				</a>
				<p><?php esc_html_e( 'Fernline Nursery curates plants, planters, bundles, and care guidance for homes and workspaces.', 'nolan-showcase-theme-05' ); ?></p>
			</div>
			<div>
				<h2><?php esc_html_e( 'Explore', 'nolan-showcase-theme-05' ); ?></h2>
				<ul class="footer-menu">
					<li><a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'About', 'nolan-showcase-theme-05' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Shop', 'nolan-showcase-theme-05' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Collections', 'nolan-showcase-theme-05' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Care', 'nolan-showcase-theme-05' ); ?></a></li>
				</ul>
			</div>
			<div>
				<h2><?php esc_html_e( 'Contact', 'nolan-showcase-theme-05' ); ?></h2>
				<ul class="footer-menu">
					<li><a href="mailto:hello@fernline.nursery"><?php esc_html_e( 'hello@fernline.nursery', 'nolan-showcase-theme-05' ); ?></a></li>
					<li><a href="tel:+15550198420"><?php esc_html_e( '(555) 019-8420', 'nolan-showcase-theme-05' ); ?></a></li>
					<li><?php esc_html_e( 'Local pickup and shipping support.', 'nolan-showcase-theme-05' ); ?></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Fernline Nursery', 'nolan-showcase-theme-05' ); ?>. <?php esc_html_e( 'All rights reserved.', 'nolan-showcase-theme-05' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Care Guides', 'nolan-showcase-theme-05' ); ?></a>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
