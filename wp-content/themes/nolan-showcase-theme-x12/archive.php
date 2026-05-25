<?php
/**
 * Archive template.
 *
 * Connects category, tag, author, and date archives to WordPress loop output.
 * Assumes standard posts and optional sidebar widgets.
 *
 * @package Nolan_Showcase_Theme_X12
 */

get_header();
?>
<section class="section">
	<div class="container content-layout">
		<div>
			<header class="archive-header">
				<?php the_archive_title( '<h1>', '</h1>' ); ?>
				<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
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
