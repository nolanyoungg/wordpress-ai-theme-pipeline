<?php
/**
 * Archive template.
 *
 * @package Nolan_Showcase_Theme
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="section archive-intro">
		<div class="container">
			<p class="eyebrow"><?php esc_html_e( 'Archive', 'nolan-showcase-theme' ); ?></p>
			<h1><?php the_archive_title(); ?></h1>
			<div class="archive-description"><?php the_archive_description(); ?></div>
		</div>
	</section>
	<section class="section section--compact">
		<div class="container post-list">
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'post-card reveal' ); ?>>
						<p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p>
						<h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
						<div class="post-card__summary"><?php echo wp_kses_post( get_the_excerpt() ); ?></div>
					</article>
				<?php endwhile; ?>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<article class="post-card">
					<h2><?php esc_html_e( 'No posts found', 'nolan-showcase-theme' ); ?></h2>
				</article>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php
get_footer();
