<?php
/**
 * Site footer.
 *
 * @package Nolan_Showcase_Theme_08
 */
?>
<footer class="site-footer">
	<div class="container site-footer__grid">
		<div>
			<a class="brand brand--footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo nst08_asset_uri( 'assets/svg/logo-mark.svg' ); ?>" alt="" width="38" height="38">
				<span>
					<strong><?php echo esc_html( get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : 'Northstar Web Bureau' ); ?></strong>
					<small><?php esc_html_e( 'Managed website operations for serious teams.', 'nolan-showcase-theme-08' ); ?></small>
				</span>
			</a>
			<p><?php esc_html_e( 'A fictional premium agency brand focused on practical WordPress, WooCommerce, Shopify, analytics, performance, and AI workflow integration.', 'nolan-showcase-theme-08' ); ?></p>
		</div>
		<div>
			<h2><?php esc_html_e( 'Core services', 'nolan-showcase-theme-08' ); ?></h2>
			<ul>
				<li><?php esc_html_e( 'WordPress and WooCommerce builds', 'nolan-showcase-theme-08' ); ?></li>
				<li><?php esc_html_e( 'Shopify and Shopify Plus storefronts', 'nolan-showcase-theme-08' ); ?></li>
				<li><?php esc_html_e( 'Maintenance, rescue, analytics, and CRO', 'nolan-showcase-theme-08' ); ?></li>
			</ul>
		</div>
		<div>
			<h2><?php esc_html_e( 'Operating promise', 'nolan-showcase-theme-08' ); ?></h2>
			<p><?php esc_html_e( 'Every project includes an implementation plan, QA checklist, launch notes, and a plain-English handoff so owners know what changed and why.', 'nolan-showcase-theme-08' ); ?></p>
			<?php if ( is_active_sidebar( 'footer-insight' ) ) : ?>
				<?php dynamic_sidebar( 'footer-insight' ); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="container site-footer__bottom">
		<span><?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php esc_html_e( 'Northstar Web Bureau. Fictional agency concept.', 'nolan-showcase-theme-08' ); ?></span>
		<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy', 'nolan-showcase-theme-08' ); ?></a>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
