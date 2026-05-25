<?php
/**
 * Testimonials section.
 *
 * @package Nolan_Showcase_Theme_03
 */

$testimonials = (array) get_query_var( 'nolan_showcase_03_testimonials', array() );
?>

<section class="section section--ink" id="testimonials">
	<div class="container">
		<header class="section-head reveal">
			<p class="kicker"><?php esc_html_e( 'Testimonials', 'nolan-showcase-theme-03' ); ?></p>
			<h2><?php esc_html_e( 'Warm words from clients.', 'nolan-showcase-theme-03' ); ?></h2>
		</header>

		<div class="testimonial-grid">
			<?php foreach ( $testimonials as $testimonial ) : ?>
				<figure class="testimonial-card reveal">
					<blockquote>
						<p><?php echo esc_html( (string) ( $testimonial['quote'] ?? '' ) ); ?></p>
					</blockquote>
					<figcaption><?php echo esc_html( (string) ( $testimonial['name'] ?? '' ) ); ?></figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>

