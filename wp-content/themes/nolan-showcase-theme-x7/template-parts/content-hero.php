<?php
/**
 * Front-page hero section.
 *
 * @package Nolan_Showcase_Theme_X7
 */
?>

<section class="hero" aria-label="<?php esc_attr_e( 'Hero', 'nolan-showcase-theme-x7' ); ?>">
	<div class="container">
		<div class="hero__grid">
			<div class="hero__copy">
				<p class="kicker"><?php esc_html_e( 'MNY Photo', 'nolan-showcase-theme-x7' ); ?></p>
				<h1 class="hero__title"><?php esc_html_e( 'Cinematic editorial photography for modern brands & elevated celebrations.', 'nolan-showcase-theme-x7' ); ?></h1>
				<p class="hero__lead"><?php echo wp_kses_post( __( 'A warm-luxury look with calm direction. We create images that feel expensive — and still feel like you.', 'nolan-showcase-theme-x7' ) ); ?></p>
				<div class="cluster">
					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'View services', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'See work', 'nolan-showcase-theme-x7' ); ?></a>
				</div>

				<div class="hero__badges" aria-label="<?php esc_attr_e( 'Highlights', 'nolan-showcase-theme-x7' ); ?>">
					<span class="badge"><?php esc_html_e( 'Warm cinematic edits', 'nolan-showcase-theme-x7' ); ?></span>
					<span class="badge"><?php esc_html_e( 'Calm direction', 'nolan-showcase-theme-x7' ); ?></span>
					<span class="badge"><?php esc_html_e( 'Print-ready delivery', 'nolan-showcase-theme-x7' ); ?></span>
				</div>
			</div>

			<div class="hero__media">
				<img class="hero__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/hero-editorial-portrait.svg' ); ?>" alt="" width="720" height="520" loading="eager" decoding="async">
				<div class="hero__overlay" aria-hidden="true"></div>
			</div>
		</div>
	</div>
</section>

