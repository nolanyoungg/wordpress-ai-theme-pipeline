<?php
/**
 * Front page template.
 *
 * @package Nolan_Showcase_Theme_X1
 */

get_header();

$projects = array(
	array(
		'title'    => __( 'Theme System Replatform', 'nolan-showcase-theme-x1' ),
		'summary'  => __( 'A modular WordPress theme foundation with reusable sections, sharp performance defaults, and a clean upgrade path for real editorial content.', 'nolan-showcase-theme-x1' ),
		'tags'     => __( 'WordPress • Design systems • Performance', 'nolan-showcase-theme-x1' ),
		'icon'     => 'grid',
	),
	array(
		'title'    => __( 'Automation Release Gate', 'nolan-showcase-theme-x1' ),
		'summary'  => __( 'A workflow that turns fuzzy handoffs into repeatable review steps: checks, evidence, and release notes in one calm lane.', 'nolan-showcase-theme-x1' ),
		'tags'     => __( 'Automation • QA • Ops', 'nolan-showcase-theme-x1' ),
		'icon'     => 'pulse',
	),
	array(
		'title'    => __( 'Analytics Signal Map', 'nolan-showcase-theme-x1' ),
		'summary'  => __( 'A measurement plan that separates pageview noise from product signals, with event naming, conversions, and dashboard-ready schemas.', 'nolan-showcase-theme-x1' ),
		'tags'     => __( 'Analytics • Tracking • Reporting', 'nolan-showcase-theme-x1' ),
		'icon'     => 'map',
	),
);

$services = array(
	array(
		'title'   => __( 'Software development', 'nolan-showcase-theme-x1' ),
		'copy'    => __( 'Interface builds, service integrations, architecture cleanup, and maintainable UI systems built for change.', 'nolan-showcase-theme-x1' ),
	),
	array(
		'title'   => __( 'WordPress + WooCommerce', 'nolan-showcase-theme-x1' ),
		'copy'    => __( 'Custom themes, editorial workflows, accessible templates, and store experiences that are comfortable to maintain.', 'nolan-showcase-theme-x1' ),
	),
	array(
		'title'   => __( 'Analytics and tracking', 'nolan-showcase-theme-x1' ),
		'copy'    => __( 'Event strategy, conversion mapping, reporting foundations, and data quality checks teams can trust.', 'nolan-showcase-theme-x1' ),
	),
);

$capability_panels = array(
	array(
		'id'      => 'wordpress',
		'eyebrow' => __( 'WordPress systems', 'nolan-showcase-theme-x1' ),
		'title'   => __( 'WordPress platforms that edit cleanly and ship fast.', 'nolan-showcase-theme-x1' ),
		'copy'    => __( 'Themes are built as durable systems: clean templates, accessible patterns, reusable sections, and admin experiences that don’t fight the team maintaining them.', 'nolan-showcase-theme-x1' ),
		'bullets' => array(
			__( 'Classic PHP templates with modern CSS rhythm', 'nolan-showcase-theme-x1' ),
			__( 'WooCommerce-ready section planning', 'nolan-showcase-theme-x1' ),
			__( 'Performance-minded asset loading', 'nolan-showcase-theme-x1' ),
		),
	),
	array(
		'id'      => 'automation',
		'eyebrow' => __( 'Automation', 'nolan-showcase-theme-x1' ),
		'title'   => __( 'Reduce manual work with clear guardrails.', 'nolan-showcase-theme-x1' ),
		'copy'    => __( 'Automation is treated like product infrastructure: scoped inputs, review points, and visible outputs that help the team move faster without losing quality.', 'nolan-showcase-theme-x1' ),
		'bullets' => array(
			__( 'Local QA and release checklists', 'nolan-showcase-theme-x1' ),
			__( 'Editorial handoff lanes and evidence capture', 'nolan-showcase-theme-x1' ),
			__( 'Repeatable build validation routines', 'nolan-showcase-theme-x1' ),
		),
	),
	array(
		'id'      => 'analytics',
		'eyebrow' => __( 'Analytics and tracking', 'nolan-showcase-theme-x1' ),
		'title'   => __( 'Instrumentation that teams actually use.', 'nolan-showcase-theme-x1' ),
		'copy'    => __( 'Tracking is designed alongside UI: consistent event naming, conversion intent, and dashboards that answer business questions without messy rework.', 'nolan-showcase-theme-x1' ),
		'bullets' => array(
			__( 'Event schemas and conversion mapping', 'nolan-showcase-theme-x1' ),
			__( 'Data quality checks and audit trails', 'nolan-showcase-theme-x1' ),
			__( 'Reporting loops tied to releases', 'nolan-showcase-theme-x1' ),
		),
	),
	array(
		'id'      => 'ai',
		'eyebrow' => __( 'AI integration', 'nolan-showcase-theme-x1' ),
		'title'   => __( 'Practical AI, never theater.', 'nolan-showcase-theme-x1' ),
		'copy'    => __( 'AI features are scoped, structured, and measurable: prompts designed as interfaces, review points where they matter, and privacy-aware patterns from the start.', 'nolan-showcase-theme-x1' ),
		'bullets' => array(
			__( 'Prompt systems with constraints', 'nolan-showcase-theme-x1' ),
			__( 'Human review checkpoints', 'nolan-showcase-theme-x1' ),
			__( 'Instrumentation to measure outcomes', 'nolan-showcase-theme-x1' ),
		),
	),
	array(
		'id'      => 'leadership',
		'eyebrow' => __( 'Technical leadership', 'nolan-showcase-theme-x1' ),
		'title'   => __( 'Calm delivery in messy reality.', 'nolan-showcase-theme-x1' ),
		'copy'    => __( 'Architecture direction, launch planning, mentoring, and stakeholder clarity that keeps delivery moving even when requirements are ambiguous.', 'nolan-showcase-theme-x1' ),
		'bullets' => array(
			__( 'Release planning and risk reduction', 'nolan-showcase-theme-x1' ),
			__( 'Documentation and handoff discipline', 'nolan-showcase-theme-x1' ),
			__( 'Vendor and integration review', 'nolan-showcase-theme-x1' ),
		),
	),
);
?>
<main id="primary" class="site-main">
	<section class="hero" id="top">
		<div class="hero__bg" aria-hidden="true"></div>
		<div class="container hero__grid">
			<div class="hero__content reveal">
				<p class="eyebrow"><?php esc_html_e( 'Developer portfolio / systems builder', 'nolan-showcase-theme-x1' ); ?></p>
				<h1><?php esc_html_e( 'Nolan designs and ships blue-chip web systems for teams that need software clarity.', 'nolan-showcase-theme-x1' ); ?></h1>
				<p class="hero__lead"><?php esc_html_e( 'A premium portfolio theme for a developer who connects polished interfaces, WordPress platforms, automation, AI integrations, analytics, and technical leadership into one dependable delivery practice.', 'nolan-showcase-theme-x1' ); ?></p>
				<div class="hero__actions">
					<a class="button button--primary" href="<?php echo esc_url( home_url( '/#work' ) ); ?>"><?php esc_html_e( 'View Selected Work', 'nolan-showcase-theme-x1' ); ?></a>
					<a class="button button--secondary" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Discuss a Build', 'nolan-showcase-theme-x1' ); ?></a>
				</div>
				<div class="hero__meta">
					<span><?php esc_html_e( 'Delivery status', 'nolan-showcase-theme-x1' ); ?></span>
					<strong><?php esc_html_e( 'Production-ready practice', 'nolan-showcase-theme-x1' ); ?></strong>
				</div>
			</div>

			<div class="hero__visual reveal" aria-label="<?php echo esc_attr__( 'System capability map', 'nolan-showcase-theme-x1' ); ?>">
				<img class="hero__image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-map.svg' ); ?>" alt="<?php echo esc_attr__( 'Abstract network map in electric blue', 'nolan-showcase-theme-x1' ); ?>">
				<div class="hero-console" aria-hidden="true">
					<div class="hero-console__top">
						<span></span><span></span><span></span>
						<strong>delivery.system</strong>
					</div>
					<ul class="hero-console__list">
						<li><span>01</span><?php esc_html_e( 'theme architecture', 'nolan-showcase-theme-x1' ); ?></li>
						<li><span>02</span><?php esc_html_e( 'automation guardrails', 'nolan-showcase-theme-x1' ); ?></li>
						<li><span>03</span><?php esc_html_e( 'analytics signals', 'nolan-showcase-theme-x1' ); ?></li>
						<li><span>04</span><?php esc_html_e( 'AI workflows', 'nolan-showcase-theme-x1' ); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="work" class="section section--blueprint">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Featured work', 'nolan-showcase-theme-x1' ); ?></p>
				<h2><?php esc_html_e( 'Concrete systems, not vague case study theater.', 'nolan-showcase-theme-x1' ); ?></h2>
				<p><?php esc_html_e( 'Use these examples to show product thinking, clean implementation, stakeholder judgment, and measurable improvement.', 'nolan-showcase-theme-x1' ); ?></p>
			</div>
			<div class="project-grid">
				<?php foreach ( $projects as $project ) : ?>
					<article class="project-card reveal" data-tilt-card>
						<div class="project-card__top">
							<span class="project-card__icon" aria-hidden="true" data-icon="<?php echo esc_attr( $project['icon'] ); ?>"></span>
							<span class="project-card__tag"><?php echo esc_html( $project['tags'] ); ?></span>
						</div>
						<h3><?php echo esc_html( $project['title'] ); ?></h3>
						<p><?php echo esc_html( $project['summary'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="services" class="section">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Services', 'nolan-showcase-theme-x1' ); ?></p>
				<h2><?php esc_html_e( 'The work spans interface delivery, WordPress commerce, automation, and measurable operations.', 'nolan-showcase-theme-x1' ); ?></h2>
			</div>
			<div class="service-grid">
				<?php foreach ( $services as $service ) : ?>
					<article class="service-card reveal">
						<h3><?php echo esc_html( $service['title'] ); ?></h3>
						<p><?php echo esc_html( $service['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php foreach ( $capability_panels as $panel ) : ?>
		<section id="<?php echo esc_attr( $panel['id'] ); ?>" class="section section--panel">
			<div class="container panel-grid">
				<div class="panel-copy reveal">
					<p class="eyebrow"><?php echo esc_html( $panel['eyebrow'] ); ?></p>
					<h2><?php echo esc_html( $panel['title'] ); ?></h2>
					<p><?php echo esc_html( $panel['copy'] ); ?></p>
					<ul class="panel-bullets">
						<?php foreach ( $panel['bullets'] as $bullet ) : ?>
							<li><?php echo esc_html( $bullet ); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="panel-art reveal" aria-hidden="true">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/panel-glow.svg' ); ?>" alt="">
				</div>
			</div>
		</section>
	<?php endforeach; ?>

	<section id="process" class="section section--blueprint">
		<div class="container process-grid">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Process', 'nolan-showcase-theme-x1' ); ?></p>
				<h2><?php esc_html_e( 'A delivery loop that favors clarity over surprise.', 'nolan-showcase-theme-x1' ); ?></h2>
				<p><?php esc_html_e( 'Work is mapped, built, reviewed, and measured. That keeps the portfolio credible and the system durable after launch.', 'nolan-showcase-theme-x1' ); ?></p>
			</div>
			<div class="process-stack">
				<article class="process-card reveal">
					<strong><?php esc_html_e( 'Map', 'nolan-showcase-theme-x1' ); ?></strong>
					<span><?php esc_html_e( 'Audit content, users, workflows, integrations, analytics gaps, and operational constraints.', 'nolan-showcase-theme-x1' ); ?></span>
				</article>
				<article class="process-card reveal">
					<strong><?php esc_html_e( 'Build', 'nolan-showcase-theme-x1' ); ?></strong>
					<span><?php esc_html_e( 'Ship maintainable templates, UI systems, automation routes, and reviewable increments.', 'nolan-showcase-theme-x1' ); ?></span>
				</article>
				<article class="process-card reveal">
					<strong><?php esc_html_e( 'Measure', 'nolan-showcase-theme-x1' ); ?></strong>
					<span><?php esc_html_e( 'Validate accessibility, performance, tracking quality, and the operational impact of each release.', 'nolan-showcase-theme-x1' ); ?></span>
				</article>
			</div>
		</div>
	</section>

	<section id="contact" class="section contact">
		<div class="container contact__inner reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x1' ); ?></p>
				<h2><?php esc_html_e( 'Ready to turn technical depth into a portfolio that feels precise, current, and credible?', 'nolan-showcase-theme-x1' ); ?></h2>
				<p><?php echo wp_kses_post( __( 'Replace this with a real intake link, email address, or contact form page when installing the theme in WordPress.', 'nolan-showcase-theme-x1' ) ); ?></p>
			</div>
			<a class="button button--primary" href="<?php echo esc_url( home_url( '/#top' ) ); ?>"><?php esc_html_e( 'Back to Top', 'nolan-showcase-theme-x1' ); ?></a>
		</div>
	</section>
</main>
<?php
get_footer();

