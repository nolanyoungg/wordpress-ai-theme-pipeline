<?php
/**
 * Search template.
 *
 * @package Nolan_Showcase_Theme_06
 */

get_header();
?>
<section class="section posts-section">
	<header class="section-head">
		<p class="eyebrow"><?php esc_html_e( 'Search', 'nolan-showcase-theme-06' ); ?></p>
		<h1><?php printf( esc_html__( 'Results for "%s"', 'nolan-showcase-theme-06' ), esc_html( get_search_query() ) ); ?></h1>
		<?php get_search_form(); ?>
	</header>
	<div class="post-grid">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			}
			the_posts_navigation();
		} else {
			get_template_part( 'template-parts/content', 'none' );
		}
		?>
	</div>
</section>
<?php
get_footer();

