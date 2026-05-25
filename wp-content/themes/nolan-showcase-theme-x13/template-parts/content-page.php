<?php
/**
 * Purpose: Standard page content wrapper.
 * WordPress role: Used by page.php.
 * Related files: page.php, assets/css/theme.css.
 * Important behavior: Provides a polished hero and safe editable content output.
 *
 * @package Nolan_Showcase_Theme_X13
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
	<section class="page-hero compact">
		<p class="eyebrow"><?php esc_html_e( 'NolanWP', 'nolan-showcase-theme-x13' ); ?></p>
		<h1><?php the_title(); ?></h1>
	</section>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages();
		?>
	</div>
</article>
