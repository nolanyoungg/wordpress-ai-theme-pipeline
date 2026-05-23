<?php
/**
 * Search results template.
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main section section--search">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title">
				<?php
				echo esc_html(
					sprintf(
						/* translators: %s: Search query. */
						__( 'Search results for “%s”', 'nolan-showcase-theme-x7' ),
						get_search_query()
					)
				);
				?>
			</h1>
			<div class="search-inline">
				<?php get_search_form(); ?>
			</div>
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

