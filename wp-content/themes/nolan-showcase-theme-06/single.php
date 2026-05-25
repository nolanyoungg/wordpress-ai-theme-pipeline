<?php
/**
 * Single post template.
 *
 * @package Nolan_Showcase_Theme_06
 */

get_header();
?>
<section class="section content-section">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'single' ); ?>
		<?php comments_template(); ?>
	<?php endwhile; ?>
</section>
<?php
get_footer();

