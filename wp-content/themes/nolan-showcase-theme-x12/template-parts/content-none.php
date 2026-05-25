<?php
/**
 * Empty result template.
 *
 * Connects archive/search fallbacks to a helpful message and search form.
 * Assumes users should be able to recover from no matching content.
 *
 * @package Nolan_Showcase_Theme_X12
 */
?>
<section class="no-results">
	<h2><?php esc_html_e( 'Nothing found', 'nolan-showcase-theme-x12' ); ?></h2>
	<p><?php esc_html_e( 'Try a different search or visit the services page for website design, maintenance, fixes, WooCommerce, SEO, analytics, and automation help.', 'nolan-showcase-theme-x12' ); ?></p>
	<?php get_search_form(); ?>
</section>
