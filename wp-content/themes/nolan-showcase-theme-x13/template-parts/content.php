<?php
/**
 * Purpose: Card-style post excerpt.
 * WordPress role: Used inside archive and index loops.
 * Related files: index.php, archive.php, search.php.
 * Important behavior: Escapes titles and links while using WordPress excerpt output.
 *
 * @package Nolan_Showcase_Theme_X13
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?><a class="post-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a><?php endif; ?>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
	<div class="entry-summary"><?php the_excerpt(); ?></div>
	<a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-x13' ); ?></a>
</article>
