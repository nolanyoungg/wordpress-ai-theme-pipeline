<?php
/**
 * Purpose: Not found error template.
 * WordPress role: Displays when no matching content exists.
 * Related files: header.php, footer.php, searchform.php.
 * Important behavior: Provides useful recovery links and search.
 *
 * @package Nolan_Showcase_Theme_X13
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="page-hero compact not-found">
		<p class="eyebrow"><?php esc_html_e( 'Page not found', 'nolan-showcase-theme-x13' ); ?></p>
		<h1><?php esc_html_e( 'That page moved, but your next step does not have to be a dead end.', 'nolan-showcase-theme-x13' ); ?></h1>
		<p><?php esc_html_e( 'Search the site or head back to the service hub.', 'nolan-showcase-theme-x13' ); ?></p>
		<?php get_search_form(); ?>
		<a class="button" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'View Services', 'nolan-showcase-theme-x13' ); ?></a>
	</section>
</main>
<?php get_footer(); ?>
