<?php
/**
 * Template part: default content card for archives and lists.
 *
 * Purpose:
 * - Renders a post summary card used by `index.php`, `archive.php`, and search results.
 * - Keeps list views consistent with the theme’s editorial card system.
 *
 * @package Nolan_Showcase_Theme_X10
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?> data-reveal>
	<header class="post-card__head">
		<h2 class="post-card__title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="post-card__meta">
			<span><?php echo esc_html( get_the_date() ); ?></span>
			<span aria-hidden="true">•</span>
			<span>
				<?php
				$cats = get_the_category_list( ', ' );
				echo $cats ? wp_kses_post( $cats ) : esc_html__( 'Uncategorized', 'nolan-showcase-theme-x10' );
				?>
			</span>
		</p>
	</header>

	<div class="post-card__excerpt">
		<?php the_excerpt(); ?>
	</div>

	<a class="btn btn-text" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-x10' ); ?></a>
</article>
