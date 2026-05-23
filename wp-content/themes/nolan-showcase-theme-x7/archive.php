<?php
/**
 * Archive template.
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main section section--archive">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php the_archive_title(); ?></h1>
			<?php if ( get_the_archive_description() ) : ?>
				<div class="page-subtitle"><?php echo wp_kses_post( get_the_archive_description() ); ?></div>
			<?php endif; ?>
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

