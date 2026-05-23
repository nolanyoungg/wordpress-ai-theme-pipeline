<?php
/**
 * Front page template.
 *
 * @package Nolan_Showcase_Theme_X4
 */

get_header();

$services = array(
	array(
		'key'   => 'mowing',
		'title' => __( 'Precision Mowing', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Crisp stripe lines, clean perimeter cuts, and consistent weekly/biweekly schedules.', 'nolan-showcase-theme-x4' ),
		'icon'  => 'service-mowing.svg',
	),
	array(
		'key'   => 'edging',
		'title' => __( 'Edging & Trimming', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Hard-edge definition along walks, beds, and driveways—no frayed borders.', 'nolan-showcase-theme-x4' ),
		'icon'  => 'service-edging.svg',
	),
	array(
		'key'   => 'mulch',
		'title' => __( 'Mulch & Beds', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Fresh color, clean lines, and tidy plant spacing that reads premium from the curb.', 'nolan-showcase-theme-x4' ),
		'icon'  => 'service-mulch.svg',
	),
	array(
		'key'   => 'cleanups',
		'title' => __( 'Seasonal Cleanups', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Spring refresh, fall leaf work, storm debris—handled fast and left spotless.', 'nolan-showcase-theme-x4' ),
		'icon'  => 'service-cleanups.svg',
	),
	array(
		'key'   => 'aeration',
		'title' => __( 'Aeration & Overseed', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Healthier turf density and deeper roots with seasonal timing and plan guidance.', 'nolan-showcase-theme-x4' ),
		'icon'  => 'service-aeration.svg',
	),
	array(
		'key'   => 'installs',
		'title' => __( 'Landscape Installs', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Stone edging, small hardscape accents, and planting installs with clean finishes.', 'nolan-showcase-theme-x4' ),
		'icon'  => 'service-installs.svg',
	),
);

$reasons = array(
	array( __( 'Licensed & insured', 'nolan-showcase-theme-x4' ), __( 'Clear coverage, tidy crews, and professional site standards.', 'nolan-showcase-theme-x4' ) ),
	array( __( 'On-time arrivals', 'nolan-showcase-theme-x4' ), __( 'Scheduled windows with reliable communication—no guessing.', 'nolan-showcase-theme-x4' ) ),
	array( __( 'Clear pricing', 'nolan-showcase-theme-x4' ), __( 'Transparent tiers and add-ons so expectations stay aligned.', 'nolan-showcase-theme-x4' ) ),
	array( __( 'Seasonal plans', 'nolan-showcase-theme-x4' ), __( 'Proactive maintenance that keeps landscapes sharp year-round.', 'nolan-showcase-theme-x4' ) ),
);

$process_steps = array(
	array( __( 'Request', 'nolan-showcase-theme-x4' ), __( 'Send a quick note or call. Tell us what “perfect” looks like.', 'nolan-showcase-theme-x4' ) ),
	array( __( 'Visit', 'nolan-showcase-theme-x4' ), __( 'We walk the property, confirm scope, and identify edge-case details.', 'nolan-showcase-theme-x4' ) ),
	array( __( 'Service', 'nolan-showcase-theme-x4' ), __( 'A consistent crew delivers clean lines, trimmed edges, and tidy paths.', 'nolan-showcase-theme-x4' ) ),
	array( __( 'Follow-up', 'nolan-showcase-theme-x4' ), __( 'We confirm the finish, share notes, and schedule the next visit.', 'nolan-showcase-theme-x4' ) ),
);

$projects = array(
	array(
		'title' => __( 'Clean Edge Refresh', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Front-yard redefinition with crisp borders, fresh mulch, and refined bed lines.', 'nolan-showcase-theme-x4' ),
		'img'   => 'project-1.svg',
	),
	array(
		'title' => __( 'Backyard Stripe Set', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Weekly mowing pattern and detail trim package for a premium look all season.', 'nolan-showcase-theme-x4' ),
		'img'   => 'project-2.svg',
	),
	array(
		'title' => __( 'Seasonal Cleanup Reset', 'nolan-showcase-theme-x4' ),
		'desc'  => __( 'Storm debris removal, leaf cleanup, and edging for a “ready-for-guests” finish.', 'nolan-showcase-theme-x4' ),
		'img'   => 'project-3.svg',
	),
);

$areas = array(
	__( 'North Hills', 'nolan-showcase-theme-x4' ),
	__( 'Greenwood', 'nolan-showcase-theme-x4' ),
	__( 'Lakeview', 'nolan-showcase-theme-x4' ),
	__( 'Cedar Park', 'nolan-showcase-theme-x4' ),
	__( 'Oak Ridge', 'nolan-showcase-theme-x4' ),
	__( 'Riverside', 'nolan-showcase-theme-x4' ),
);

$testimonials = array(
	array( __( '“The lines are perfect every single visit. It looks like a resort.”', 'nolan-showcase-theme-x4' ), __( 'Morgan T.', 'nolan-showcase-theme-x4' ) ),
	array( __( '“Clear pricing, on time, and they leave the walkway cleaner than before.”', 'nolan-showcase-theme-x4' ), __( 'Alex R.', 'nolan-showcase-theme-x4' ) ),
	array( __( '“Seasonal plan has been effortless. Yard stays sharp and healthy.”', 'nolan-showcase-theme-x4' ), __( 'Priya S.', 'nolan-showcase-theme-x4' ) ),
);

$pricing = array(
	array( __( 'Essential', 'nolan-showcase-theme-x4' ), __( 'Mow + trim + blow-off', 'nolan-showcase-theme-x4' ), __( 'From $XX/visit', 'nolan-showcase-theme-x4' ) ),
	array( __( 'Premium', 'nolan-showcase-theme-x4' ), __( 'Essential + edging + bed touch-up', 'nolan-showcase-theme-x4' ), __( 'From $XX/visit', 'nolan-showcase-theme-x4' ) ),
	array( __( 'Estate', 'nolan-showcase-theme-x4' ), __( 'Premium + seasonal plan & priority scheduling', 'nolan-showcase-theme-x4' ), __( 'Custom quote', 'nolan-showcase-theme-x4' ) ),
);

$hero_img = get_theme_file_uri( 'assets/images/hero-emerald.svg' );
?>
<main id="content" class="site-main">
	<section class="hero" id="top">
		<div class="container hero-grid">
			<div class="hero-copy reveal">
				<p class="eyebrow"><?php esc_html_e( 'Premium lawn care & landscaping', 'nolan-showcase-theme-x4' ); ?></p>
				<h1><?php esc_html_e( 'Deep green lawns. Clean edges. A premium finish, every visit.', 'nolan-showcase-theme-x4' ); ?></h1>
				<p class="hero-lead"><?php esc_html_e( 'EmeraldEdge delivers consistent weekly maintenance, seasonal plans, and detail-first installs—built for curb appeal and peace of mind.', 'nolan-showcase-theme-x4' ); ?></p>
				<div class="hero-actions">
					<a class="button button-primary" href="#contact"><?php esc_html_e( 'Get a Quote', 'nolan-showcase-theme-x4' ); ?></a>
					<a class="button button-secondary" href="#services"><?php esc_html_e( 'View Services', 'nolan-showcase-theme-x4' ); ?></a>
				</div>
				<div class="hero-badges" aria-label="<?php echo esc_attr__( 'Highlights', 'nolan-showcase-theme-x4' ); ?>">
					<span class="pill"><?php esc_html_e( 'Licensed & insured', 'nolan-showcase-theme-x4' ); ?></span>
					<span class="pill"><?php esc_html_e( 'Clear pricing', 'nolan-showcase-theme-x4' ); ?></span>
					<span class="pill"><?php esc_html_e( 'Seasonal plans', 'nolan-showcase-theme-x4' ); ?></span>
				</div>
			</div>
			<div class="hero-visual reveal" aria-label="<?php echo esc_attr__( 'Landscaping illustration', 'nolan-showcase-theme-x4' ); ?>">
				<img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php echo esc_attr__( 'Abstract premium lawn and landscaping illustration', 'nolan-showcase-theme-x4' ); ?>">
				<div class="signal-panel">
					<span><?php esc_html_e( 'finish score', 'nolan-showcase-theme-x4' ); ?></span>
					<strong data-counter="96">0</strong>
				</div>
			</div>
		</div>
	</section>

	<section id="services" class="section">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Services', 'nolan-showcase-theme-x4' ); ?></p>
				<h2><?php esc_html_e( 'Detail-first work for lawns that look expensive.', 'nolan-showcase-theme-x4' ); ?></h2>
				<p class="section-lead"><?php esc_html_e( 'Weekly care, seasonal resets, and clean installs—built around consistency and crisp finishing.', 'nolan-showcase-theme-x4' ); ?></p>
			</div>
			<div class="service-grid">
				<?php foreach ( $services as $service ) : ?>
					<article class="service-card reveal">
						<img class="service-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $service['icon'] ) ); ?>" alt="<?php echo esc_attr( $service['title'] ); ?>">
						<h3><?php echo esc_html( $service['title'] ); ?></h3>
						<p><?php echo esc_html( $service['desc'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="why-us" class="section section-ink">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Why us', 'nolan-showcase-theme-x4' ); ?></p>
				<h2><?php esc_html_e( 'Premium standards—without the premium hassle.', 'nolan-showcase-theme-x4' ); ?></h2>
			</div>
			<div class="reason-grid">
				<?php foreach ( $reasons as $reason ) : ?>
					<article class="reason-card reveal">
						<h3><?php echo esc_html( $reason[0] ); ?></h3>
						<p><?php echo esc_html( $reason[1] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="process" class="section process-section">
		<div class="container process-grid">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Process', 'nolan-showcase-theme-x4' ); ?></p>
				<h2><?php esc_html_e( 'From request to follow-up—clean, simple, predictable.', 'nolan-showcase-theme-x4' ); ?></h2>
			</div>
			<ol class="process-rail">
				<?php foreach ( $process_steps as $step ) : ?>
					<li class="reveal">
						<strong><?php echo esc_html( $step[0] ); ?></strong>
						<span><?php echo esc_html( $step[1] ); ?></span>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section id="projects" class="section">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Featured projects', 'nolan-showcase-theme-x4' ); ?></p>
				<h2><?php esc_html_e( 'Work that reads premium from the street.', 'nolan-showcase-theme-x4' ); ?></h2>
			</div>
			<div class="project-grid">
				<?php foreach ( $projects as $project ) : ?>
					<article class="project-card reveal">
						<img class="project-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $project['img'] ) ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?>">
						<div class="project-body">
							<h3><?php echo esc_html( $project['title'] ); ?></h3>
							<p><?php echo esc_html( $project['desc'] ); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="areas" class="section section-ink">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Areas served', 'nolan-showcase-theme-x4' ); ?></p>
				<h2><?php esc_html_e( 'Local routes with reliable timing.', 'nolan-showcase-theme-x4' ); ?></h2>
				<p class="section-lead"><?php esc_html_e( 'Add your real service areas here. This list is placeholder copy for the theme preview.', 'nolan-showcase-theme-x4' ); ?></p>
			</div>
			<ul class="chip-list" aria-label="<?php echo esc_attr__( 'Service areas', 'nolan-showcase-theme-x4' ); ?>">
				<?php foreach ( $areas as $area ) : ?>
					<li class="chip reveal"><?php echo esc_html( $area ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section id="testimonials" class="section">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Testimonials', 'nolan-showcase-theme-x4' ); ?></p>
				<h2><?php esc_html_e( 'Consistency is the luxury. The reviews reflect it.', 'nolan-showcase-theme-x4' ); ?></h2>
			</div>
			<div class="testimonial-grid">
				<?php foreach ( $testimonials as $testimonial ) : ?>
					<figure class="testimonial-card reveal">
						<blockquote>
							<p><?php echo esc_html( $testimonial[0] ); ?></p>
						</blockquote>
						<figcaption><?php echo esc_html( $testimonial[1] ); ?></figcaption>
					</figure>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="pricing" class="section section-ink">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Pricing', 'nolan-showcase-theme-x4' ); ?></p>
				<h2><?php esc_html_e( 'Simple tiers. Clear add-ons. No surprises.', 'nolan-showcase-theme-x4' ); ?></h2>
				<p class="section-lead"><?php esc_html_e( 'Replace placeholder pricing with your real package structure and ranges.', 'nolan-showcase-theme-x4' ); ?></p>
			</div>
			<div class="pricing-grid">
				<?php foreach ( $pricing as $tier ) : ?>
					<article class="pricing-card reveal">
						<h3><?php echo esc_html( $tier[0] ); ?></h3>
						<p class="pricing-desc"><?php echo esc_html( $tier[1] ); ?></p>
						<p class="pricing-price"><?php echo esc_html( $tier[2] ); ?></p>
						<a class="button button-secondary" href="#contact"><?php esc_html_e( 'Check availability', 'nolan-showcase-theme-x4' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="contact" class="section contact-section">
		<div class="container contact-panel reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x4' ); ?></p>
				<h2><?php esc_html_e( 'Get a quote in a day. Get a lawn you’re proud of all season.', 'nolan-showcase-theme-x4' ); ?></h2>
				<p><?php esc_html_e( 'Phone and email below are placeholders for the theme preview.', 'nolan-showcase-theme-x4' ); ?></p>
				<ul class="contact-list">
					<li><strong><?php esc_html_e( 'Phone:', 'nolan-showcase-theme-x4' ); ?></strong> <a href="<?php echo esc_url( 'tel:+15551234567' ); ?>"><?php esc_html_e( '(555) 123-4567', 'nolan-showcase-theme-x4' ); ?></a></li>
					<li><strong><?php esc_html_e( 'Email:', 'nolan-showcase-theme-x4' ); ?></strong> <a href="<?php echo esc_url( 'mailto:quotes@example.com' ); ?>"><?php esc_html_e( 'quotes@example.com', 'nolan-showcase-theme-x4' ); ?></a></li>
					<li><strong><?php esc_html_e( 'Hours:', 'nolan-showcase-theme-x4' ); ?></strong> <?php esc_html_e( 'Mon–Fri 8am–6pm', 'nolan-showcase-theme-x4' ); ?></li>
				</ul>
			</div>
			<a class="button button-primary" href="#top"><?php esc_html_e( 'Back to top', 'nolan-showcase-theme-x4' ); ?></a>
		</div>
	</section>
</main>
<?php
get_footer();

