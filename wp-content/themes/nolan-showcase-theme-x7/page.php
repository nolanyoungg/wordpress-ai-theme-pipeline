<?php
/**
 * Page template.
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main section">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
			comments_template();
		endwhile;
		?>
	</div>
</main>

<?php
get_footer();

