<?php
/**
 * Standard loop content template.
 *
 * Connects posts in index, archive, and search templates to post_class(),
 * permalink output, titles, excerpts, and featured images.
 *
 * @package Nolan_Showcase_Theme_X12
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'loop-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
	<?php endif; ?>
	<header>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-meta"><?php echo esc_html( get_the_date() ); ?></p>
	</header>
	<div class="entry-summary"><?php the_excerpt(); ?></div>
</article>
