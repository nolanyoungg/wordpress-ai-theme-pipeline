<?php
/**
 * Single post template.
 *
 * Connects blog/resource posts to the theme layout, comments, and single
 * content template part. Assumes standard WordPress posts.
 *
 * @package Nolan_Showcase_Theme_X12
 */

get_header();
?>
<section class="section">
	<div class="container content-layout">
		<div>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'single' );
				the_post_navigation();
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</section>
<?php
get_footer();
