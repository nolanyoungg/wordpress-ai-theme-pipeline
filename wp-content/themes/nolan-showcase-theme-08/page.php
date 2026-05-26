<?php
/**
 * Page template.
 *
 * @package Nolan_Showcase_Theme_08
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<section class="page-hero section-dark">
			<div class="container">
				<p class="eyebrow"><?php esc_html_e( 'Page', 'nolan-showcase-theme-08' ); ?></p>
				<h1><?php the_title(); ?></h1>
			</div>
		</section>
		<section class="section-light">
			<div class="container content-body">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php
get_footer();
