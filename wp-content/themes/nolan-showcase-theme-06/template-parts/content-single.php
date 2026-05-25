<?php
/**
 * Single content template.
 *
 * @package Nolan_Showcase_Theme_06
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content-wrap' ); ?>>
	<header class="entry-header">
		<p class="post-meta"><?php nolan_showcase_06_posted_on(); ?></p>
		<h1><?php the_title(); ?></h1>
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-featured"><?php the_post_thumbnail( 'large' ); ?></div>
	<?php endif; ?>
	<div class="entry-content"><?php the_content(); ?></div>
</article>

