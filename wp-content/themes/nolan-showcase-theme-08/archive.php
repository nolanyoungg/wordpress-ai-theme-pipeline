<?php
/**
 * Archive template.
 *
 * @package Nolan_Showcase_Theme_08
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="page-hero section-dark">
		<div class="container">
			<p class="eyebrow"><?php esc_html_e( 'Archive', 'nolan-showcase-theme-08' ); ?></p>
			<h1><?php the_archive_title(); ?></h1>
			<div class="lede"><?php the_archive_description(); ?></div>
		</div>
	</section>
	<section class="section-light">
		<div class="container post-grid">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					nst08_render_post_summary();
				endwhile;
				the_posts_navigation();
			else :
				?>
				<article class="post-card">
					<h2><?php esc_html_e( 'Nothing matched this archive.', 'nolan-showcase-theme-08' ); ?></h2>
				</article>
				<?php
			endif;
			?>
		</div>
	</section>
</main>
<?php
get_footer();
