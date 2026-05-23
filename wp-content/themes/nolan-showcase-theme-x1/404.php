<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme_X1
 */

get_header();
?>
<main id="primary" class="site-main section">
	<div class="container prose">
		<article class="content-entry">
			<p class="eyebrow"><?php esc_html_e( '404', 'nolan-showcase-theme-x1' ); ?></p>
			<h1><?php esc_html_e( 'This page does not exist.', 'nolan-showcase-theme-x1' ); ?></h1>
			<p><?php esc_html_e( 'Try searching, or use the navigation to return to the homepage.', 'nolan-showcase-theme-x1' ); ?></p>
			<?php get_search_form(); ?>
			<p><a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go Home', 'nolan-showcase-theme-x1' ); ?></a></p>
		</article>
	</div>
</main>
<?php
get_footer();

