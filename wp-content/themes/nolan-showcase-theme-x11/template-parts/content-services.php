<?php
/**
 * Template part: services preview grid.
 *
 * Purpose:
 * - Provides a consistent services section used on the front page and services template.
 * - Keeps the service naming aligned with the header mega panel rail labels.
 *
 * @package Nolan_Showcase_Theme_X11
 */

$services_url = esc_url( home_url( '/what-we-do/' ) );
$cards        = array(
	array(
		'title' => __( 'Portrait Sessions', 'nolan-showcase-theme-x11' ),
		'copy'  => __( 'Bright editorial portraits with calm direction and effortless posing prompts.', 'nolan-showcase-theme-x11' ),
		'img'   => 'service-portrait-01.jpg',
	),
	array(
		'title' => __( 'Weddings & Engagements', 'nolan-showcase-theme-x11' ),
		'copy'  => __( 'Refined documentary coverage with portraits that feel cinematic, not staged.', 'nolan-showcase-theme-x11' ),
		'img'   => 'service-wedding-01.jpg',
	),
	array(
		'title' => __( 'Events & Celebrations', 'nolan-showcase-theme-x11' ),
		'copy'  => __( 'Energy, detail, and story — photographed with flattering light and clean color.', 'nolan-showcase-theme-x11' ),
		'img'   => 'service-event-01.jpg',
	),
	array(
		'title' => __( 'Brand Photography', 'nolan-showcase-theme-x11' ),
		'copy'  => __( 'Cohesive sets for web, press, and paid — built around your voice and palette.', 'nolan-showcase-theme-x11' ),
		'img'   => 'service-brand-01.jpg',
	),
	array(
		'title' => __( 'Product & Detail Photography', 'nolan-showcase-theme-x11' ),
		'copy'  => __( 'Crisp, tactile still life with clean whites and warm highlights for premium goods.', 'nolan-showcase-theme-x11' ),
		'img'   => 'service-product-01.jpg',
	),
	array(
		'title' => __( 'Lifestyle & Family Sessions', 'nolan-showcase-theme-x11' ),
		'copy'  => __( 'Natural connection with a bright, editorial finish — home-ready and timeless.', 'nolan-showcase-theme-x11' ),
		'img'   => 'service-family-01.jpg',
	),
);
?>

<section class="section section--services" aria-label="<?php echo esc_attr_x( 'Services', 'aria label', 'nolan-showcase-theme-x11' ); ?>">
	<div class="container">
		<header class="section-head" data-reveal>
			<h2 class="section-title"><?php esc_html_e( 'What we do', 'nolan-showcase-theme-x11' ); ?></h2>
			<p class="section-subtitle"><?php esc_html_e( 'A studio menu designed for real life: calm pacing, bright light, and galleries that feel intentional.', 'nolan-showcase-theme-x11' ); ?></p>
		</header>

		<div class="grid grid--services">
			<?php foreach ( $cards as $card ) : ?>
				<article class="card service-card" data-reveal>
					<div class="card__media" aria-hidden="true">
						<img src="<?php echo nolan_showcase_theme_x11_asset_url( 'assets/images/' . $card['img'] ); ?>" width="960" height="720" alt="" loading="lazy" decoding="async">
					</div>
					<div class="card__body">
						<h3 class="card__title"><?php echo esc_html( $card['title'] ); ?></h3>
						<p class="card__copy"><?php echo esc_html( $card['copy'] ); ?></p>
						<a class="btn btn-text" href="<?php echo $services_url; ?>"><?php esc_html_e( 'Learn more', 'nolan-showcase-theme-x11' ); ?></a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

