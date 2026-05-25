<?php
/**
 * Page content template.
 *
 * @package Nolan_Showcase_Theme_06
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content-wrap' ); ?>>
	<header class="entry-header"><h1><?php the_title(); ?></h1></header>
	<div class="entry-content"><?php the_content(); ?></div>
</article>

