<?php
/**
 * Purpose: Single post article layout.
 * WordPress role: Used by single.php.
 * Related files: comments.php, sidebar.php.
 * Important behavior: Preserves editor content and shows post metadata.
 *
 * @package Nolan_Showcase_Theme_X13
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-content' ); ?>>
	<header class="page-hero compact">
		<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
		<h1><?php the_title(); ?></h1>
	</header>
	<?php if ( has_post_thumbnail() ) : ?><div class="single-featured"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
	<div class="entry-content"><?php the_content(); wp_link_pages(); ?></div>
	<footer class="entry-footer"><?php the_tags( '<span>', esc_html__( ', ', 'nolan-showcase-theme-x13' ), '</span>' ); ?></footer>
</article>
