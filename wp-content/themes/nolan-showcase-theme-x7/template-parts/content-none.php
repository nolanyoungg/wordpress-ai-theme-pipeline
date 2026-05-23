<?php
/**
 * No content fallback.
 *
 * @package Nolan_Showcase_Theme_X7
 */
?>

<section class="no-results not-found card card--padded">
	<h2 class="h4"><?php esc_html_e( 'Nothing found', 'nolan-showcase-theme-x7' ); ?></h2>
	<p class="muted"><?php esc_html_e( 'Try a different search, or explore the pages below.', 'nolan-showcase-theme-x7' ); ?></p>
	<div class="cluster">
		<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x7' ); ?></a>
		<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x7' ); ?></a>
		<a class="btn btn-text" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x7' ); ?></a>
	</div>
</section>

