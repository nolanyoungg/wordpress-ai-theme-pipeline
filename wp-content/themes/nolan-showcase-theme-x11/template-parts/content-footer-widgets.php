<?php
/**
 * Template part: footer widgets / pre-footer band.
 *
 * Purpose:
 * - Provides a lightweight "pre-footer" area that mirrors the theme's editorial tone.
 * - Keeps footer markup modular for reuse and easier maintenance.
 *
 * Notes:
 * - This theme registers a classic sidebar (`sidebar-1`) for widgets; this pre-footer is
 *   intentionally content-led (no widget dependency) so the preview looks complete out-of-box.
 *
 * @package Nolan_Showcase_Theme_X11
 */

$work_url      = esc_url( home_url( '/work/' ) );
$services_url  = esc_url( home_url( '/what-we-do/' ) );
$resources_url = esc_url( home_url( '/resources/' ) );
$contact_url   = esc_url( home_url( '/contact/' ) );
?>

<section class="prefooter" aria-label="<?php echo esc_attr_x( 'Pre-footer', 'aria label', 'nolan-showcase-theme-x11' ); ?>">
	<div class="container prefooter__inner">
		<div class="prefooter__card">
			<p class="prefooter__kicker"><?php esc_html_e( 'Sessions', 'nolan-showcase-theme-x11' ); ?></p>
			<h2 class="prefooter__title"><?php esc_html_e( 'A calm plan. A bright, cinematic finish.', 'nolan-showcase-theme-x11' ); ?></h2>
			<p class="prefooter__copy"><?php echo wp_kses_post( __( 'Whether you’re booking portraits, a brand set, or a full wedding weekend, we build a timeline that protects the experience — and a gallery that feels editorial.', 'nolan-showcase-theme-x11' ) ); ?></p>
			<div class="prefooter__actions">
				<a class="btn btn-secondary btn-smball" href="<?php echo $services_url; ?>"><?php esc_html_e( 'View Services', 'nolan-showcase-theme-x11' ); ?></a>
				<a class="btn btn-text" href="<?php echo $work_url; ?>"><?php esc_html_e( 'See recent work', 'nolan-showcase-theme-x11' ); ?></a>
			</div>
		</div>

		<div class="prefooter__links" aria-label="<?php echo esc_attr_x( 'Quick links', 'aria label', 'nolan-showcase-theme-x11' ); ?>">
			<div class="prefooter__linkcol">
				<p class="prefooter__linktitle"><?php esc_html_e( 'Studio', 'nolan-showcase-theme-x11' ); ?></p>
				<ul class="prefooter__list">
					<li><a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Who we are', 'nolan-showcase-theme-x11' ); ?></a></li>
					<li><a href="<?php echo $contact_url; ?>"><?php esc_html_e( 'Start an inquiry', 'nolan-showcase-theme-x11' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/who-we-are/#experience' ) ); ?>"><?php esc_html_e( 'Client experience', 'nolan-showcase-theme-x11' ); ?></a></li>
				</ul>
			</div>
			<div class="prefooter__linkcol">
				<p class="prefooter__linktitle"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x11' ); ?></p>
				<ul class="prefooter__list">
					<li><a href="<?php echo $resources_url; ?>"><?php esc_html_e( 'All resources', 'nolan-showcase-theme-x11' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/resources/#wardrobe' ) ); ?>"><?php esc_html_e( 'Wardrobe guide', 'nolan-showcase-theme-x11' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/resources/#print' ) ); ?>"><?php esc_html_e( 'Print-first delivery', 'nolan-showcase-theme-x11' ); ?></a></li>
				</ul>
			</div>
			<div class="prefooter__linkcol">
				<p class="prefooter__linktitle"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x11' ); ?></p>
				<ul class="prefooter__list">
					<li><a href="<?php echo $work_url; ?>"><?php esc_html_e( 'Portfolio', 'nolan-showcase-theme-x11' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/work/#featured' ) ); ?>"><?php esc_html_e( 'Featured story', 'nolan-showcase-theme-x11' ); ?></a></li>
					<li><a href="<?php echo $contact_url; ?>"><?php esc_html_e( 'Check availability', 'nolan-showcase-theme-x11' ); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

