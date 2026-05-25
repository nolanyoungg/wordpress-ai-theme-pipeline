<?php
/**
 * Purpose: Empty state for no content.
 * WordPress role: Used by loops with no posts.
 * Related files: index.php, archive.php, search.php.
 * Important behavior: Offers search and service navigation as recovery paths.
 *
 * @package Nolan_Showcase_Theme_X13
 */
?>
<section class="no-results">
	<h2><?php esc_html_e( 'Nothing matched that request.', 'nolan-showcase-theme-x13' ); ?></h2>
	<p><?php esc_html_e( 'Try a search or start with the service hub.', 'nolan-showcase-theme-x13' ); ?></p>
	<?php get_search_form(); ?>
	<a class="button button-secondary" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'View Services', 'nolan-showcase-theme-x13' ); ?></a>
</section>
