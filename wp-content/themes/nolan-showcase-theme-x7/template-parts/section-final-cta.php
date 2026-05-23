<?php
/**
 * Final CTA section.
 *
 * @package Nolan_Showcase_Theme_X7
 */
?>

<section class="section section--final-cta" aria-label="<?php esc_attr_e( 'Final call to action', 'nolan-showcase-theme-x7' ); ?>">
	<div class="container">
		<div class="final-cta">
			<div class="final-cta__copy">
				<p class="kicker"><?php esc_html_e( 'Ready when you are', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Let’s create a gallery that feels like you — elevated.', 'nolan-showcase-theme-x7' ); ?></h2>
				<p class="lead"><?php echo wp_kses_post( __( 'Share your date, location, and what you’re building. We’ll respond with availability, guidance, and the next right step.', 'nolan-showcase-theme-x7' ) ); ?></p>
				<div class="cluster">
					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Send an inquiry', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Browse resources', 'nolan-showcase-theme-x7' ); ?></a>
				</div>
			</div>
			<div class="final-cta__media">
				<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-couple-session.svg' ); ?>" alt="" width="720" height="520" loading="lazy" decoding="async">
			</div>
		</div>
	</div>
</section>

