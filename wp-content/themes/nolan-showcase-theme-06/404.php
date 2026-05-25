<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme_06
 */

get_header();
?>
<section class="section content-section">
	<div class="entry-content-wrap not-found">
		<p class="eyebrow"><?php esc_html_e( '404', 'nolan-showcase-theme-06' ); ?></p>
		<h1><?php esc_html_e( 'That page could not be found.', 'nolan-showcase-theme-06' ); ?></h1>
		<p><?php esc_html_e( 'Try a search or return to the homepage.', 'nolan-showcase-theme-06' ); ?></p>
		<?php get_search_form(); ?>
		<a class="button button-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back Home', 'nolan-showcase-theme-06' ); ?></a>
	</div>
</section>
<?php
get_footer();

