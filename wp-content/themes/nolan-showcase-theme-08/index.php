<?php
/**
 * Main template.
 *
 * @package Nolan_Showcase_Theme_08
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="page-hero section-dark">
		<div class="container">
			<p class="eyebrow"><?php esc_html_e( 'Agency journal', 'nolan-showcase-theme-08' ); ?></p>
			<h1><?php esc_html_e( 'Technical notes for healthier WordPress and commerce sites.', 'nolan-showcase-theme-08' ); ?></h1>
			<p class="lede"><?php esc_html_e( 'Guides, launch checklists, rescue notes, and operating advice for teams responsible for business-critical websites.', 'nolan-showcase-theme-08' ); ?></p>
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
					<h2><?php esc_html_e( 'No posts published yet.', 'nolan-showcase-theme-08' ); ?></h2>
					<p><?php esc_html_e( 'Use this area for launch notes, technical explainers, maintenance reports, and website operations thinking.', 'nolan-showcase-theme-08' ); ?></p>
				</article>
				<?php
			endif;
			?>
		</div>
	</section>
</main>
<?php
get_footer();
