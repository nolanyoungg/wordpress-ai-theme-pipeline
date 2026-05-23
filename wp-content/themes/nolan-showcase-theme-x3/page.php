<?php
/**
 * Page template.
 *
 * @package Nolan_Showcase_Theme_X3
 */

get_header();
?>
<main id="primary" class="site-main section">
	<div class="container prose">
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
</main>
<?php
get_footer();

