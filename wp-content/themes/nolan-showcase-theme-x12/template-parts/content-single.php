<?php
/**
 * Single post content template.
 *
 * Connects individual posts to title, metadata, featured image, full content,
 * and taxonomy links using WordPress template tags.
 *
 * @package Nolan_Showcase_Theme_X12
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-single' ); ?>>
	<header class="page-header">
		<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
		<h1><?php the_title(); ?></h1>
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="featured-media"><?php the_post_thumbnail( 'large' ); ?></div>
	<?php endif; ?>
	<div class="entry-content"><?php the_content(); ?></div>
	<footer class="entry-footer"><?php the_tags( '<span>', esc_html__( ', ', 'nolan-showcase-theme-x12' ), '</span>' ); ?></footer>
</article>
