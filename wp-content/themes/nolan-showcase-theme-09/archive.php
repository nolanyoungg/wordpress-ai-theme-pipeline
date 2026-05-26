<?php
/**
 * Archive template.
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="page-hero section-dark">
		<div class="container narrow">
			<p class="eyebrow"><?php esc_html_e( 'Archive', 'nolan-showcase-theme-09' ); ?></p>
			<h1><?php echo wp_kses_post( get_the_archive_title() ); ?></h1>
			<?php if ( get_the_archive_description() ) : ?>
				<p class="lede"><?php echo wp_kses_post( get_the_archive_description() ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<section class="section-light">
		<div class="container post-grid">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php nst09_render_post_summary(); ?>
				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>
			<?php else : ?>
				<article class="post-card">
					<h2><?php esc_html_e( 'Nothing found', 'nolan-showcase-theme-09' ); ?></h2>
					<p><?php esc_html_e( 'Try a different archive or return to the homepage.', 'nolan-showcase-theme-09' ); ?></p>
				</article>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php
get_footer();
