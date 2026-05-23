<?php
/**
 * Template part for displaying pages.
 *
 * @package Nolan_Showcase_Theme_X2
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card reveal' ); ?>>
	<h1><?php the_title(); ?></h1>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nolan-showcase-theme-x2' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>

