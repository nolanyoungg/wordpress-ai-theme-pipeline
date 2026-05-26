<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="page-hero section-dark">
		<div class="container page-hero__grid">
			<div>
				<p class="eyebrow"><?php esc_html_e( '404', 'nolan-showcase-theme-09' ); ?></p>
				<h1><?php esc_html_e( 'This page is off the map.', 'nolan-showcase-theme-09' ); ?></h1>
				<p class="lede"><?php esc_html_e( 'The link may have changed during a migration, cleanup, or rebuild. Return home or use the navigation to find the right service.', 'nolan-showcase-theme-09' ); ?></p>
				<?php echo wp_kses_post( nst09_button( 'Return home', home_url( '/' ) ) ); ?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
