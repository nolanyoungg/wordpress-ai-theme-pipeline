<?php
/**
 * Content not found template.
 *
 * @package Nolan_Showcase_Theme_04
 */
?>

<section class="empty" data-reveal>
	<h2 class="empty__title"><?php esc_html_e( 'Nothing here yet.', 'nolan-showcase-theme-04' ); ?></h2>
	<p class="empty__copy"><?php esc_html_e( 'Try searching, or browse the latest posts.', 'nolan-showcase-theme-04' ); ?></p>
	<div class="empty__actions">
		<?php get_search_form(); ?>
	</div>
</section>

