<?php
/**
 * Template part for displaying posts.
 *
 * @package Nolan_Showcase_Theme_X4
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card reveal' ); ?>>
	<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>

	<?php if ( is_singular() ) : ?>
		<h1 class="post-title"><?php the_title(); ?></h1>
	<?php else : ?>
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php endif; ?>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
				<?php the_post_thumbnail( 'large' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		if ( is_singular() ) {
			the_content();
		} else {
			the_excerpt();
		}

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nolan-showcase-theme-x4' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>

