<?php
/**
 * Main template file.
 *
 * @package Nolan_Showcase_Theme_X4
 */

get_header();
?>
<main id="content" class="site-main">
	<section class="section">
		<div class="container">
			<header class="section-heading reveal">
				<h1 class="section-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
				<p class="section-lead"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
			</header>

			<?php if ( have_posts() ) : ?>
				<div class="post-grid">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					?>
				</div>

				<div class="pagination">
					<?php the_posts_pagination(); ?>
				</div>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php
get_footer();
