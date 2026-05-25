<?php
/**
 * Default content template.
 *
 * @package Nolan_Showcase_Theme_06
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="post-card-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
	<?php endif; ?>
	<div class="post-card-body">
		<p class="post-meta"><?php nolan_showcase_06_posted_on(); ?></p>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-excerpt"><?php the_excerpt(); ?></div>
	</div>
</article>

