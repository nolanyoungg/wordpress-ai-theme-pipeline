<?php
/**
 * Single post template.
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="page-hero section-dark">
				<div class="container narrow">
					<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
					<h1><?php echo esc_html( get_the_title() ); ?></h1>
				</div>
			</header>
			<div class="section-light">
				<div class="container content-prose">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>
			</div>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
