<?php
/**
 * Search results template.
 *
 * Purpose:
 * - Displays search results with the theme’s post cards.
 *
 * @package Nolan_Showcase_Theme_05
 */

get_header();
?>

<section class="section section--tight">
	<div class="container">
		<header class="section-head">
			<h1 class="section-title">
				<?php echo esc_html( sprintf( __( 'Search results for “%s”', 'nolan-showcase-theme-05' ), get_search_query() ) ); ?>
			</h1>
		</header>

		<?php get_search_form(); ?>

		<div class="grid grid--posts">
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
	</div>
</section>

<?php
get_footer();
