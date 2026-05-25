<?php
/**
 * Purpose: Default blog index and fallback template.
 * WordPress role: Displays posts when no more specific template exists.
 * Related files: template-parts/content.php, sidebar.php, header.php, footer.php.
 * Important behavior: Uses the standard Loop and accessible pagination.
 *
 * @package Nolan_Showcase_Theme_X13
 */

get_header();
?>
<main id="primary" class="site-main content-layout">
	<section class="page-hero compact"><p class="eyebrow"><?php esc_html_e( 'Insights', 'nolan-showcase-theme-x13' ); ?></p><h1><?php esc_html_e( 'WordPress resources for practical website decisions.', 'nolan-showcase-theme-x13' ); ?></h1></section>
	<div class="content-with-sidebar">
		<div>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content' );
				endwhile;
				the_posts_pagination();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>
<?php get_footer(); ?>
