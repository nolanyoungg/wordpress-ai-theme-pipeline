<?php
/**
 * Template Name: Resources
 *
 * @package Nolan_Showcase_Theme_03
 */

get_header();

$guides = array(
	array(
		'title' => __( 'Wardrobe + texture guide', 'nolan-showcase-theme-03' ),
		'desc'  => __( 'Neutral palettes, subtle contrast, and materials that photograph beautifully.', 'nolan-showcase-theme-03' ),
	),
	array(
		'title' => __( 'Timeline planning checklist', 'nolan-showcase-theme-03' ),
		'desc'  => __( 'Where to place portraits so the day feels calm and the light stays soft.', 'nolan-showcase-theme-03' ),
	),
	array(
		'title' => __( 'Location selection framework', 'nolan-showcase-theme-03' ),
		'desc'  => __( 'A quick method to pick locations that match mood, light, and comfort.', 'nolan-showcase-theme-03' ),
	),
);
?>

<main id="main-content" class="site-main">
	<section class="section section--ink">
		<div class="container">
			<header class="page-head reveal">
				<p class="kicker"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-03' ); ?></p>
				<h1 class="page-title"><?php esc_html_e( 'Guides that keep planning simple.', 'nolan-showcase-theme-03' ); ?></h1>
				<p class="page-lede"><?php esc_html_e( 'Short reads to help you prepare without overthinking.', 'nolan-showcase-theme-03' ); ?></p>
			</header>

			<div class="resource-grid">
				<?php foreach ( $guides as $guide ) : ?>
					<article class="resource-card reveal">
						<h2><?php echo esc_html( $guide['title'] ); ?></h2>
						<p><?php echo esc_html( $guide['desc'] ); ?></p>
						<a class="text-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask a question', 'nolan-showcase-theme-03' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="resource-visual reveal">
				<img src="<?php echo esc_url( nolan_showcase_03_image_url( 'resources-journal-flatlay.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Journal flatlay illustration', 'nolan-showcase-theme-03' ); ?>">
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

