<?php
/**
 * Template part for when no content is found.
 *
 * @package Nolan_Showcase_Theme_X2
 */
?>
<article class="post-card reveal">
	<p class="eyebrow"><?php esc_html_e( 'No results', 'nolan-showcase-theme-x2' ); ?></p>
	<h2><?php esc_html_e( 'Nothing matched your request.', 'nolan-showcase-theme-x2' ); ?></h2>
	<p><?php esc_html_e( 'Try a different search term, or browse the latest posts.', 'nolan-showcase-theme-x2' ); ?></p>
	<?php get_search_form(); ?>
</article>

