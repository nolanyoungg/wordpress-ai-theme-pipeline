<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package Nolan_Showcase_Theme_01
 */
?>
<section class="empty-state reveal">
	<h2><?php esc_html_e( 'Nothing found', 'nolan-showcase-theme-01' ); ?></h2>
	<p><?php esc_html_e( 'Try a search or explore the latest posts.', 'nolan-showcase-theme-01' ); ?></p>
	<?php get_search_form(); ?>
</section>

