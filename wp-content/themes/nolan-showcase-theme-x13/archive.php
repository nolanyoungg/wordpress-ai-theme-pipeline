<?php
/**
 * Purpose: Archive listing template.
 * WordPress role: Displays category, tag, date, and author archives.
 * Related files: template-parts/content.php, template-parts/content-none.php.
 * Important behavior: Uses archive_title and archive_description with safe output.
 *
 * @package Nolan_Showcase_Theme_X13
 */

get_header();
?>
<main id="primary" class="site-main content-layout">
	<section class="page-hero compact"><p class="eyebrow"><?php esc_html_e( 'Archive', 'nolan-showcase-theme-x13' ); ?></p><h1><?php the_archive_title(); ?></h1><?php the_archive_description( '<div class="archive-description">', '</div>' ); ?></section>
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
