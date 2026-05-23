<?php
/**
 * Default content card.
 *
 * @package Nolan_Showcase_Theme_X7
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<a class="post-card__link" href="<?php the_permalink(); ?>">
		<div class="post-card__media">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'nolan_x7_card', array( 'class' => 'post-card__img' ) ); ?>
			<?php else : ?>
				<img class="post-card__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/resources-journal-flatlay.svg' ); ?>" alt="" width="560" height="360" loading="lazy" decoding="async">
			<?php endif; ?>
		</div>

		<div class="post-card__body">
			<p class="kicker kicker--small"><?php echo esc_html__( 'Journal', 'nolan-showcase-theme-x7' ); ?></p>
			<h2 class="h5 post-card__title"><?php the_title(); ?></h2>
			<p class="muted"><?php echo esc_html( nolan_showcase_x7_get_excerpt( 22 ) ); ?></p>
			<div class="post-meta">
				<?php nolan_showcase_x7_posted_on(); ?>
				<?php nolan_showcase_x7_posted_by(); ?>
			</div>
		</div>
	</a>
</article>

