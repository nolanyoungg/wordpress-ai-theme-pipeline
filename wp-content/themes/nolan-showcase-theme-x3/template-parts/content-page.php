<?php
/**
 * Template part for displaying pages.
 *
 * @package Nolan_Showcase_Theme_X3
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-entry' ); ?>>
	<h1><?php the_title(); ?></h1>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nolan-showcase-theme-x3' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>

