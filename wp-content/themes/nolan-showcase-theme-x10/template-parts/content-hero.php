<?php
/**
 * Template part: cinematic hero block.
 *
 * Purpose:
 * - Provides the editorial hero used on the front page and optional landing templates.
 * - Accepts optional `$args` for headline, subheadline, and CTA destinations.
 *
 * Expected `$args` keys (all optional):
 * - `kicker` (string)
 * - `headline` (string)
 * - `subhead` (string; HTML allowed via `wp_kses_post`)
 * - `primary_url` (string; absolute URL)
 * - `secondary_url` (string; absolute URL)
 *
 * @package Nolan_Showcase_Theme_X10
 */

$kicker        = isset( $args['kicker'] ) ? (string) $args['kicker'] : __( 'Noir editorial sessions — NYC + travel', 'nolan-showcase-theme-x10' );
$headline      = isset( $args['headline'] ) ? (string) $args['headline'] : __( 'Atmospheric photography for people, brands, and unforgettable moments.', 'nolan-showcase-theme-x10' );
$subhead       = isset( $args['subhead'] ) ? (string) $args['subhead'] : __( 'Contrast-rich images with calm direction and a print-first finish. We build galleries that feel cinematic, intimate, and intentionally composed.', 'nolan-showcase-theme-x10' );
$primary_url   = isset( $args['primary_url'] ) ? esc_url( (string) $args['primary_url'] ) : esc_url( home_url( '/contact/' ) );
$secondary_url = isset( $args['secondary_url'] ) ? esc_url( (string) $args['secondary_url'] ) : esc_url( home_url( '/work/' ) );
?>

<section class="hero" aria-label="<?php echo esc_attr_x( 'Hero', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
	<div class="container hero__grid">
		<div class="hero__copy" data-reveal>
			<p class="hero__kicker"><?php echo esc_html( $kicker ); ?></p>
			<h1 class="hero__title"><?php echo esc_html( $headline ); ?></h1>
			<p class="hero__subtitle"><?php echo wp_kses_post( $subhead ); ?></p>
			<div class="hero__actions">
				<a class="btn btn-primary" href="<?php echo $primary_url; ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x10' ); ?></a>
				<a class="btn btn-secondary" href="<?php echo $secondary_url; ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-x10' ); ?></a>
			</div>
			<ul class="hero__trust" aria-label="<?php echo esc_attr_x( 'Proof tags', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
				<li><?php esc_html_e( 'Cinematic direction', 'nolan-showcase-theme-x10' ); ?></li>
				<li><?php esc_html_e( 'Rich shadows + warm highlights', 'nolan-showcase-theme-x10' ); ?></li>
				<li><?php esc_html_e( 'Print-ready delivery', 'nolan-showcase-theme-x10' ); ?></li>
				<li><?php esc_html_e( 'Timeline-friendly coverage', 'nolan-showcase-theme-x10' ); ?></li>
			</ul>
		</div>

		<div class="hero__media" data-reveal>
			<div class="hero__image-stack" aria-hidden="true">
				<img class="hero__img hero__img--primary" src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/hero-portrait-01.jpg' ); ?>" width="980" height="1240" alt="" loading="eager" decoding="async">
				<img class="hero__img hero__img--secondary" src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/hero-couple-01.jpg' ); ?>" width="780" height="520" alt="" loading="eager" decoding="async">
				<img class="hero__img hero__img--tertiary" src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/hero-brand-01.jpg' ); ?>" width="780" height="520" alt="" loading="eager" decoding="async">
			</div>
		</div>
	</div>
</section>
