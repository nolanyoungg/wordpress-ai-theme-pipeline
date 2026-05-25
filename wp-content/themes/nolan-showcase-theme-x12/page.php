<?php
/**
 * Default page template.
 *
 * Connects WordPress pages to the global layout and page content template part.
 * Assumes page content is managed in the editor and may include service copy.
 *
 * @package Nolan_Showcase_Theme_X12
 */

get_header();
?>
<section class="section">
	<div class="container narrow">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		?>
	</div>
</section>
<?php
get_footer();
