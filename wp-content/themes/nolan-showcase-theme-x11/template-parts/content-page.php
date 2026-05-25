<?php
/**
 * Template part: page content.
 *
 * Purpose:
 * - Renders the title and body for standard WordPress pages using the theme’s typography.
 *
 * @package Nolan_Showcase_Theme_X11
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
	<header class="page-content__head">
		<h1 class="page-content__title"><?php the_title(); ?></h1>
	</header>

	<div class="page-content__body entry-content">
		<?php
		the_content();
		wp_link_pages();
		?>
	</div>
</article>
