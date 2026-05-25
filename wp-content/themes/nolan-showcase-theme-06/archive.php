<?php
/**
 * Archive template.
 *
 * @package Nolan_Showcase_Theme_06
 */

get_header();
?>
<section class="section posts-section">
	<header class="section-head">
		<p class="eyebrow"><?php esc_html_e( 'Archive', 'nolan-showcase-theme-06' ); ?></p>
		<h1><?php the_archive_title(); ?></h1>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
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

