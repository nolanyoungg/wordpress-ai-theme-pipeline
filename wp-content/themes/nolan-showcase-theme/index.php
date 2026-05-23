<?php
/**
 * Main template.
 *
 * @package Nolan_Showcase_Theme
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="section archive-intro">
		<div class="container">
			<p class="eyebrow"><?php esc_html_e( 'Nolan Showcase Theme', 'nolan-showcase-theme' ); ?></p>
			<h1><?php esc_html_e( 'Insights, builds, and technical notes.', 'nolan-showcase-theme' ); ?></h1>
		</div>
	</section>
	<section class="section section--compact">
		<div class="container post-list">
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card reveal' ); ?>>
						<p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p>
						<h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
						<div class="post-card__summary"><?php echo wp_kses_post( get_the_excerpt() ); ?></div>
					</article>
				<?php endwhile; ?>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<article class="post-card">
					<h2><?php esc_html_e( 'No posts yet', 'nolan-showcase-theme' ); ?></h2>
					<p><?php esc_html_e( 'Add posts in WordPress to populate this section.', 'nolan-showcase-theme' ); ?></p>
				</article>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php
get_footer();
