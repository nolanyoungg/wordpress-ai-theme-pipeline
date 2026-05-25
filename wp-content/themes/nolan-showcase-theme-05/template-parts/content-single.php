<?php
/**
 * Template part: single post content.
 *
 * Purpose:
 * - Renders the main article body for `single.php` with consistent editorial spacing.
 *
 * @package Nolan_Showcase_Theme_05
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-content' ); ?>>
	<header class="single-content__head">
		<p class="single-content__meta"><?php echo esc_html( get_the_date() ); ?></p>
		<h1 class="single-content__title"><?php the_title(); ?></h1>
	</header>

	<div class="single-content__body entry-content">
		<?php
		the_content();
		wp_link_pages();
		?>
	</div>
</article>
