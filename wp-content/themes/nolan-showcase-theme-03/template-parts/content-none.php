<?php
/**
 * No content template.
 *
 * @package Nolan_Showcase_Theme_03
 */

?>

<div class="empty-state">
	<p class="kicker"><?php esc_html_e( 'Nothing found', 'nolan-showcase-theme-03' ); ?></p>
	<h2><?php esc_html_e( 'No posts match this view.', 'nolan-showcase-theme-03' ); ?></h2>
	<p><?php esc_html_e( 'Try a different search, or browse the latest posts.', 'nolan-showcase-theme-03' ); ?></p>
	<div class="cluster">
		<a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go home', 'nolan-showcase-theme-03' ); ?></a>
		<a class="button button--secondary" href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ? get_post_type_archive_link( 'post' ) : home_url( '/' ) ); ?>"><?php esc_html_e( 'Latest posts', 'nolan-showcase-theme-03' ); ?></a>
	</div>
</div>

