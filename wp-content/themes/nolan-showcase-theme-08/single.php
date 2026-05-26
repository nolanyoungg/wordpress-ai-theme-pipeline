<?php
/**
 * Single post template.
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
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="page-hero section-dark">
				<div class="container">
					<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
					<h1><?php the_title(); ?></h1>
				</div>
			</section>
			<section class="section-light">
				<div class="container content-body">
					<?php the_content(); ?>
				</div>
			</section>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
