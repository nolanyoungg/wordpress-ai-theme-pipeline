<?php
/**
 * Main template file.
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main section">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php echo esc_html__( 'Journal', 'nolan-showcase-theme-x7' ); ?></h1>
			<p class="page-subtitle"><?php echo esc_html__( 'Notes on planning, style, and images that feel expensive — without feeling forced.', 'nolan-showcase-theme-x7' ); ?></p>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="grid grid--posts">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				?>
			</div>

			<?php nolan_showcase_x7_the_posts_pagination(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();

