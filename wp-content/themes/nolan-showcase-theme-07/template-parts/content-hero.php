<?php
/**
 * Reusable editorial hero fragment.
 *
 * @package Nolan_Showcase_Theme_07
 */

$args = wp_parse_args(
	$args,
	array(
		'kicker' => __( 'MNY Photo', 'nolan-showcase-theme-07' ),
		'title'  => __( 'Editorial photography with calm direction.', 'nolan-showcase-theme-07' ),
		'copy'   => __( 'A warm, polished visual system for people, brands, and meaningful events.', 'nolan-showcase-theme-07' ),
		'image'  => 'hero-portrait-01.jpg',
	)
);
?>
<section class="page-hero">
	<div class="container page-hero__grid">
		<div class="page-hero__copy" data-reveal>
			<p class="page-hero__kicker"><?php echo esc_html( $args['kicker'] ); ?></p>
			<h1 class="page-hero__title"><?php echo esc_html( $args['title'] ); ?></h1>
			<p class="page-hero__subtitle"><?php echo esc_html( $args['copy'] ); ?></p>
		</div>
		<div class="page-hero__media" data-reveal>
			<img src="<?php echo nolan_s7_asset( 'assets/images/' . $args['image'] ); ?>" width="1200" height="820" alt="" loading="eager" decoding="async">
		</div>
	</div>
</section>
