<?php
/**
 * Single post template.
 *
 * @package Nolan_Showcase_Theme
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<section class="section archive-intro">
			<div class="container">
				<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
				<h1><?php echo esc_html( get_the_title() ); ?></h1>
			</div>
		</section>
		<section class="section section--compact">
			<div class="container">
				<article <?php post_class( 'post-card reveal' ); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="post-card__media">
							<?php the_post_thumbnail( 'large' ); ?>
						</div>
					<?php endif; ?>
					<div class="post-card__summary">
						<?php the_content(); ?>
					</div>
				</article>
			</div>
		</section>
		<?php
	endwhile;
	?>
</main>
<?php
get_footer();
