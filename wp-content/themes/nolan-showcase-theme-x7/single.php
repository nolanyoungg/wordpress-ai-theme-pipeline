<?php
/**
 * Single post template.
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main section section--single">
	<div class="container container--narrow">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'single' );
			comments_template();
		endwhile;
		?>
	</div>
</main>

<?php
get_footer();

