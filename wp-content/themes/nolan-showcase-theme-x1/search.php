<?php
/**
 * Search results template.
 *
 * @package Nolan_Showcase_Theme_X1
 */

get_header();
?>
<main id="primary" class="site-main section">
	<div class="container prose">
		<header class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'Search', 'nolan-showcase-theme-x1' ); ?></p>
			<h1>
				<?php
				printf(
					/* translators: %s: Search query. */
					esc_html__( 'Results for “%s”', 'nolan-showcase-theme-x1' ),
					esc_html( get_search_query() )
				);
				?>
			</h1>
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

