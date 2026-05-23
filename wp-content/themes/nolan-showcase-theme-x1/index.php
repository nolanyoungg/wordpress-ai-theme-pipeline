<?php
/**
 * Main template fallback.
 *
 * @package Nolan_Showcase_Theme_X1
 */

get_header();
?>
<main id="primary" class="site-main section">
	<div class="container">
		<header class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'Updates', 'nolan-showcase-theme-x1' ); ?></p>
			<h1><?php esc_html_e( 'Writing and notes', 'nolan-showcase-theme-x1' ); ?></h1>
			<p><?php esc_html_e( 'Short posts about systems delivery, WordPress platforms, automation, analytics, and practical AI integration.', 'nolan-showcase-theme-x1' ); ?></p>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="post-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				?>
			</div>

			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();

