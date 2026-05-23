<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="section archive-intro">
		<div class="container">
			<p class="eyebrow"><?php esc_html_e( '404', 'nolan-showcase-theme' ); ?></p>
			<h1><?php esc_html_e( 'That page could not be found.', 'nolan-showcase-theme' ); ?></h1>
		</div>
	</section>
	<section class="section section--compact">
		<div class="container">
			<article class="post-card reveal">
				<p><?php esc_html_e( 'Use the navigation above or return to the homepage to continue browsing the portfolio.', 'nolan-showcase-theme' ); ?></p>
				<p><a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return Home', 'nolan-showcase-theme' ); ?></a></p>
			</article>
		</div>
	</section>
</main>
<?php
get_footer();
