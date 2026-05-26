<?php
/**
 * Main index template.
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="page-hero section-dark">
		<div class="container page-hero__grid">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Insights', 'nolan-showcase-theme-09' ); ?></p>
				<h1><?php esc_html_e( 'Field notes on websites that need to sell, load, and measure cleanly.', 'nolan-showcase-theme-09' ); ?></h1>
				<p class="lede"><?php esc_html_e( 'Read practical notes about WordPress, WooCommerce, Shopify, maintenance, rescue work, AI integration, analytics, and performance.', 'nolan-showcase-theme-09' ); ?></p>
			</div>
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
					<h2><?php esc_html_e( 'No posts yet', 'nolan-showcase-theme-09' ); ?></h2>
					<p><?php esc_html_e( 'Add posts to publish agency insights and technical notes.', 'nolan-showcase-theme-09' ); ?></p>
				</article>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php
get_footer();
