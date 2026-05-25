<?php
/**
 * Purpose: Search results template.
 * WordPress role: Displays results for WordPress search queries.
 * Related files: searchform.php, template-parts/content.php, content-none.php.
 * Important behavior: Escapes search query in heading.
 *
 * @package Nolan_Showcase_Theme_X13
 */

get_header();
?>
<main id="primary" class="site-main content-layout">
	<section class="page-hero compact"><p class="eyebrow"><?php esc_html_e( 'Search', 'nolan-showcase-theme-x13' ); ?></p><h1><?php printf( esc_html__( 'Results for "%s"', 'nolan-showcase-theme-x13' ), esc_html( get_search_query() ) ); ?></h1><?php get_search_form(); ?></section>
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
</main>
<?php get_footer(); ?>
