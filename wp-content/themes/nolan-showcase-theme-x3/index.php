<?php
/**
 * Main template.
 *
 * @package Nolan_Showcase_Theme_X3
 */

get_header();
?>
<main id="primary" class="site-main section">
	<div class="container prose">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-entry' ); ?>>
					<h1><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h1><?php esc_html_e( 'No content found', 'nolan-showcase-theme-x3' ); ?></h1>
			<p><?php esc_html_e( 'Add content in WordPress or assign a static front page to use the portfolio homepage.', 'nolan-showcase-theme-x3' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
