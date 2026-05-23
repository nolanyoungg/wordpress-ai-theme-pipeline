<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme_X2
 */

get_header();
?>
<main id="primary" class="site-main section">
	<div class="container content-list">
		<article class="post-card reveal">
			<p class="eyebrow"><?php esc_html_e( '404', 'nolan-showcase-theme-x2' ); ?></p>
			<h1><?php esc_html_e( 'This page does not exist.', 'nolan-showcase-theme-x2' ); ?></h1>
			<p><?php esc_html_e( 'Use the navigation above to return to the portfolio homepage.', 'nolan-showcase-theme-x2' ); ?></p>
			<?php get_search_form(); ?>
			<p><a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go Home', 'nolan-showcase-theme-x2' ); ?></a></p>
		</article>
	</div>
</main>
<?php
get_footer();

