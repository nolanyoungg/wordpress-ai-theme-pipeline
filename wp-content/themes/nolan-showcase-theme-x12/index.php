<?php
/**
 * Main fallback template.
 *
 * Connects to the WordPress template hierarchy for any route without a more
 * specific template. Assumes standard posts/pages and template parts handle
 * individual content markup.
 *
 * @package Nolan_Showcase_Theme_X12
 */

get_header();
?>
<section class="section">
	<div class="container content-layout">
		<div>
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
