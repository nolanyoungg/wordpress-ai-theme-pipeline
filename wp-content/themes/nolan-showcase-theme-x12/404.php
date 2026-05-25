<?php
/**
 * Not found template.
 *
 * Connects 404 responses to a useful recovery path with search and navigation
 * suggestions. Assumes no custom routing is required.
 *
 * @package Nolan_Showcase_Theme_X12
 */

get_header();
?>
<section class="section">
	<div class="container narrow">
		<h1><?php esc_html_e( 'That page is not available.', 'nolan-showcase-theme-x12' ); ?></h1>
		<p><?php esc_html_e( 'The link may have moved. Try searching or return to the homepage to continue.', 'nolan-showcase-theme-x12' ); ?></p>
		<?php get_search_form(); ?>
		<a class="button button-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return Home', 'nolan-showcase-theme-x12' ); ?></a>
	</div>
</section>
<?php
get_footer();
