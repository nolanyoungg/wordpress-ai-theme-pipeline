<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme_X4
 */

get_header();
?>
<main id="content" class="site-main">
	<section class="section">
		<div class="container">
			<div class="empty-state reveal">
				<h1><?php esc_html_e( 'Page not found', 'nolan-showcase-theme-x4' ); ?></h1>
				<p><?php esc_html_e( 'The page you’re looking for isn’t here. Try searching, or head back home.', 'nolan-showcase-theme-x4' ); ?></p>
				<div class="empty-actions">
					<?php get_search_form(); ?>
					<a class="button button-secondary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go to homepage', 'nolan-showcase-theme-x4' ); ?></a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

