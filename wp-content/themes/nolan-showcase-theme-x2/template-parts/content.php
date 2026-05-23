<?php
/**
 * Template part for displaying posts.
 *
 * @package Nolan_Showcase_Theme_X2
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card reveal' ); ?>>
	<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nolan-showcase-theme-x2' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>

