<?php
/**
 * Single post content.
 *
 * @package Nolan_Showcase_Theme_X7
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--single' ); ?>>
	<header class="entry__header">
		<p class="kicker kicker--small"><?php echo esc_html__( 'Journal', 'nolan-showcase-theme-x7' ); ?></p>
		<h1 class="entry__title"><?php the_title(); ?></h1>
		<div class="post-meta">
			<?php nolan_showcase_x7_posted_on(); ?>
			<?php nolan_showcase_x7_posted_by(); ?>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry__featured">
			<?php the_post_thumbnail( 'nolan_x7_feature', array( 'class' => 'entry__featured-img' ) ); ?>
		</div>
	<?php endif; ?>

	<div class="entry__content">
		<?php the_content(); ?>
	</div>

	<footer class="entry__footer">
		<?php nolan_showcase_x7_entry_footer(); ?>
	</footer>
</article>

