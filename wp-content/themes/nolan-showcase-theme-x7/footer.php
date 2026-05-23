<?php
/**
 * Footer template.
 *
 * @package Nolan_Showcase_Theme_X7
 */
?>

</div><!-- #content -->

<footer class="site-footer">
	<div class="site-footer__inner">
		<div class="site-footer__brand">
			<img class="site-footer__mark" src="<?php echo nolan_showcase_x7_asset( 'assets/images/logo-mark.svg' ); ?>" alt="" width="28" height="28" loading="lazy" decoding="async">
			<div>
				<p class="site-footer__name"><?php echo esc_html__( 'MNY Photo', 'nolan-showcase-theme-x7' ); ?></p>
				<p class="site-footer__tagline"><?php echo esc_html__( 'Premium photography for modern brands and once-in-a-lifetime days.', 'nolan-showcase-theme-x7' ); ?></p>
			</div>
		</div>

		<div class="site-footer__cols">
			<div class="site-footer__col">
				<h2 class="site-footer__title h6"><?php esc_html_e( 'Explore', 'nolan-showcase-theme-x7' ); ?></h2>
				<ul class="site-footer__list">
					<li><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'What We Do', 'nolan-showcase-theme-x7' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Who We Are', 'nolan-showcase-theme-x7' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x7' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x7' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x7' ); ?></a></li>
				</ul>
			</div>

			<div class="site-footer__col">
				<h2 class="site-footer__title h6"><?php esc_html_e( 'Details', 'nolan-showcase-theme-x7' ); ?></h2>
				<ul class="site-footer__list">
					<li><?php echo esc_html__( 'Based in New York City', 'nolan-showcase-theme-x7' ); ?></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire for availability', 'nolan-showcase-theme-x7' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Planning + wardrobe guides', 'nolan-showcase-theme-x7' ); ?></a></li>
				</ul>
			</div>

			<div class="site-footer__col">
				<h2 class="site-footer__title h6"><?php esc_html_e( 'Newsletter', 'nolan-showcase-theme-x7' ); ?></h2>
				<p class="site-footer__note"><?php echo esc_html__( 'Occasional notes on style, planning, and photography that feels timeless.', 'nolan-showcase-theme-x7' ); ?></p>
				<form class="footer-form" action="#" method="post">
					<label class="screen-reader-text" for="footer-email"><?php esc_html_e( 'Email address', 'nolan-showcase-theme-x7' ); ?></label>
					<input id="footer-email" name="email" type="email" placeholder="<?php echo esc_attr__( 'Email address', 'nolan-showcase-theme-x7' ); ?>" autocomplete="email">
					<button class="btn btn-secondary btn-small" type="submit"><?php esc_html_e( 'Join', 'nolan-showcase-theme-x7' ); ?></button>
				</form>
				<p class="site-footer__fineprint"><?php echo esc_html__( 'Demo form — connect your email platform of choice.', 'nolan-showcase-theme-x7' ); ?></p>
			</div>
		</div>
	</div>

	<div class="site-footer__bottom">
		<p class="site-footer__copyright">
			<?php
			echo esc_html(
				sprintf(
					/* translators: %s: Year. */
					__( '© %s MNY Photo. All rights reserved.', 'nolan-showcase-theme-x7' ),
					gmdate( 'Y' )
				)
			);
			?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

