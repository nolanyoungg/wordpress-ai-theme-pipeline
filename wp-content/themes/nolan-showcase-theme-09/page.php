<?php
/**
 * Page template.
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<section class="page-hero section-dark">
			<div class="container narrow">
				<p class="eyebrow"><?php esc_html_e( 'Page', 'nolan-showcase-theme-09' ); ?></p>
				<h1><?php echo esc_html( get_the_title() ); ?></h1>
			</div>
		</section>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'section-light' ); ?>>
			<div class="container content-prose">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
