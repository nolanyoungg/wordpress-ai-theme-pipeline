<?php
/**
 * Search results template.
 *
 * Connects WordPress search queries to accessible result headings and the
 * standard loop. Assumes the default search form is available.
 *
 * @package Nolan_Showcase_Theme_X12
 */

get_header();
?>
<section class="section">
	<div class="container content-layout">
		<div>
			<header class="archive-header">
				<h1><?php printf( esc_html__( 'Search results for: %s', 'nolan-showcase-theme-x12' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</section>
<?php
get_footer();
