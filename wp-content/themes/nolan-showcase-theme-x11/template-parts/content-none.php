<?php
/**
 * Template part: empty state (no content found).
 *
 * Purpose:
 * - Provides a friendly fallback when there are no posts/results to display.
 *
 * @package Nolan_Showcase_Theme_X11
 */
?>

<section class="empty" data-reveal>
	<h2 class="empty__title"><?php esc_html_e( 'Nothing here yet.', 'nolan-showcase-theme-x11' ); ?></h2>
	<p class="empty__copy"><?php esc_html_e( 'Try searching, or browse the latest posts.', 'nolan-showcase-theme-x11' ); ?></p>
	<div class="empty__actions">
		<?php get_search_form(); ?>
	</div>
</section>
