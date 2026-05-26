<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme_08
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="page-hero section-dark">
		<div class="container">
			<p class="eyebrow"><?php esc_html_e( '404', 'nolan-showcase-theme-08' ); ?></p>
			<h1><?php esc_html_e( 'This page is off the launch checklist.', 'nolan-showcase-theme-08' ); ?></h1>
			<p class="lede"><?php esc_html_e( 'The link may have moved during a migration, cleanup, or content restructure. Head back to the homepage or use navigation to continue.', 'nolan-showcase-theme-08' ); ?></p>
			<div class="button-row">
				<?php echo wp_kses_post( nst08_button( 'Return home', home_url( '/' ) ) ); ?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
