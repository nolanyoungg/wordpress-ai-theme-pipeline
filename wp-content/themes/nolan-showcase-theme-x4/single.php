<?php
/**
 * Single post template.
 *
 * @package Nolan_Showcase_Theme_X4
 */

get_header();
?>
<main id="content" class="site-main">
	<section class="section">
		<div class="container content-layout">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'nolan-showcase-theme-x4' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'nolan-showcase-theme-x4' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
			?>
		</div>
	</section>
</main>
<?php
get_footer();

