<?php
/**
 * Page template.
 *
 * @package Nolan_Showcase_Theme_01
 */

get_header();
?>
<main id="content" class="site-main">
	<section class="section">
		<div class="container content-layout">
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
</main>
<?php
get_footer();

