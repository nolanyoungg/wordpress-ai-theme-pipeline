<?php
/**
 * Single post template.
 *
 * Purpose:
 * - Renders a single blog post with navigation and optional comments.
 *
 * @package Nolan_Showcase_Theme_05
 */

get_header();
?>

<section class="section section--tight">
	<div class="container container--narrow">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation(
				array(
					'prev_text' => __( 'Previous: %title', 'nolan-showcase-theme-05' ),
					'next_text' => __( 'Next: %title', 'nolan-showcase-theme-05' ),
				)
			);

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		?>
	</div>
</section>

<?php
get_footer();
