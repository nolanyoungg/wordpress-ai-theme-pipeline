<?php
/**
 * Purpose: Single post template.
 * WordPress role: Displays individual posts.
 * Related files: template-parts/content-single.php, comments.php, sidebar.php.
 * Important behavior: Shows comments when enabled and keeps resource content readable.
 *
 * @package Nolan_Showcase_Theme_X13
 */

get_header();
?>
<main id="primary" class="site-main content-layout">
	<div class="content-with-sidebar">
		<div>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'single' );
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>
<?php get_footer(); ?>
