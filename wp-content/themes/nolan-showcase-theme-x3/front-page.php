<?php
/**
 * Front page template.
 *
 * @package Nolan_Showcase_Theme_X3
 */

get_header();

$capabilities = array(
	array( 'Software Development', 'Product-grade interfaces, service integrations, maintainable front-end systems, and pragmatic architecture for evolving teams.', '01' ),
	array( 'WordPress Development', 'Custom themes, editorial workflows, template systems, performance-minded builds, and admin experiences that stay usable.', '02' ),
	array( 'Automation', 'Local workflows, QA gates, content operations, review pipelines, and internal tools that remove repeated manual effort.', '03' ),
	array( 'AI Integration', 'Structured AI features with scoped prompts, review points, privacy-aware patterns, and product value beyond novelty.', '04' ),
	array( 'Analytics & Tracking', 'Event strategy, conversion tracking, dashboard-ready naming systems, and measurement plans teams can trust.', '05' ),
	array( 'Technical Leadership', 'Architecture direction, vendor review, delivery planning, mentoring, documentation, and calm execution through ambiguity.', '06' ),
);

$projects = array(
	array( 'Editorial Platform Rebuild', 'WordPress theme architecture for a content team that needed faster publishing, cleaner templates, and analytics-ready events.', 'WordPress / Design Systems / Tracking' ),
	array( 'Automation Review Console', 'A local workflow surface that grouped planning, build validation, QA evidence, and release notes into one repeatable path.', 'Automation / QA / Operations' ),
	array( 'AI-Assisted Intake Layer', 'A structured intake and triage experience using constrained prompts, human review, and reusable output patterns.', 'AI Integration / Product UX' ),
);

$metrics = array(
	array( '41', 'launch checks converted into reusable release criteria' ),
	array( '28', 'tracking events mapped across core portfolio journeys' ),
	array( '16', 'workflow handoffs replaced with durable automation paths' ),
	array( '6', 'capability areas presented with one coherent technical story' ),
);

$stack = array( 'PHP', 'WordPress', 'JavaScript', 'CSS', 'HTML', 'REST APIs', 'Automation', 'AI Workflows', 'Analytics', 'Accessibility', 'Performance', 'Git' );
?>
<main id="primary" class="site-main">
	<section class="hero" id="top">
		<div class="container hero-grid">
			<div class="hero-copy reveal">
				<p class="eyebrow"><?php esc_html_e( 'Web software developer / WordPress systems lead', 'nolan-showcase-theme-x3' ); ?></p>
				<h1><?php esc_html_e( 'Nolan builds sharp web systems where software, WordPress, automation, AI, and analytics work together.', 'nolan-showcase-theme-x3' ); ?></h1>
				<p class="hero-lead"><?php esc_html_e( 'A premium portfolio theme for technical work that has to feel polished on the surface and dependable underneath: clean interfaces, practical architecture, measurable behavior, and delivery discipline.', 'nolan-showcase-theme-x3' ); ?></p>
				<div class="hero-actions">
					<a class="button button-primary" href="<?php echo esc_url( home_url( '/#work' ) ); ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-x3' ); ?></a>
					<a class="button button-secondary" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Start a Conversation', 'nolan-showcase-theme-x3' ); ?></a>
				</div>
			</div>
			<div class="hero-visual reveal" aria-label="<?php echo esc_attr__( 'Developer systems map', 'nolan-showcase-theme-x3' ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/system-map.svg' ); ?>" alt="<?php echo esc_attr__( 'Abstract system map connecting WordPress, AI, automation, analytics, and software delivery', 'nolan-showcase-theme-x3' ); ?>">
				<div class="signal-panel">
					<span><?php esc_html_e( 'delivery index', 'nolan-showcase-theme-x3' ); ?></span>
					<strong data-counter="97">0</strong>
				</div>
			</div>
		</div>
	</section>

	<section id="capabilities" class="section">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Capabilities', 'nolan-showcase-theme-x3' ); ?></p>
				<h2><?php esc_html_e( 'A concentrated technical portfolio for the work modern teams actually need.', 'nolan-showcase-theme-x3' ); ?></h2>
			</div>
			<div class="capability-grid">
				<?php foreach ( $capabilities as $capability ) : ?>
					<article class="capability-card reveal">
						<span><?php echo esc_html( $capability[2] ); ?></span>
						<h3><?php echo esc_html( $capability[0] ); ?></h3>
						<p><?php echo esc_html( $capability[1] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="work" class="section section-ink">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Featured work', 'nolan-showcase-theme-x3' ); ?></p>
				<h2><?php esc_html_e( 'Realistic project surfaces with clear technical judgment.', 'nolan-showcase-theme-x3' ); ?></h2>
			</div>
			<div class="work-list">
				<?php foreach ( $projects as $project ) : ?>
					<article class="work-item reveal">
						<div>
							<h3><?php echo esc_html( $project[0] ); ?></h3>
							<p><?php echo esc_html( $project[1] ); ?></p>
						</div>
						<span><?php echo esc_html( $project[2] ); ?></span>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="process" class="section process-section">
		<div class="container process-grid">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Systems thinking', 'nolan-showcase-theme-x3' ); ?></p>
				<h2><?php esc_html_e( 'The process connects product clarity, implementation quality, and measurable operation.', 'nolan-showcase-theme-x3' ); ?></h2>
			</div>
			<ol class="process-rail">
				<li class="reveal"><strong><?php esc_html_e( 'Map the system', 'nolan-showcase-theme-x3' ); ?></strong><span><?php esc_html_e( 'Clarify users, workflows, content models, integrations, constraints, and analytics questions before building.', 'nolan-showcase-theme-x3' ); ?></span></li>
				<li class="reveal"><strong><?php esc_html_e( 'Ship in reviewable slices', 'nolan-showcase-theme-x3' ); ?></strong><span><?php esc_html_e( 'Build templates, components, automations, and AI touchpoints in increments that stakeholders can inspect.', 'nolan-showcase-theme-x3' ); ?></span></li>
				<li class="reveal"><strong><?php esc_html_e( 'Instrument and harden', 'nolan-showcase-theme-x3' ); ?></strong><span><?php esc_html_e( 'Validate accessibility, performance, event quality, editorial fit, and the operational effect of the release.', 'nolan-showcase-theme-x3' ); ?></span></li>
			</ol>
		</div>
	</section>

	<section id="impact" class="section">
		<div class="container metric-grid">
			<?php foreach ( $metrics as $metric ) : ?>
				<div class="metric-card reveal">
					<strong data-counter="<?php echo esc_attr( $metric[0] ); ?>">0</strong>
					<span><?php echo esc_html( $metric[1] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section id="stack" class="section section-stack">
		<div class="container stack-layout reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Technical stack', 'nolan-showcase-theme-x3' ); ?></p>
				<h2><?php esc_html_e( 'Practical tools for durable web delivery.', 'nolan-showcase-theme-x3' ); ?></h2>
			</div>
			<div class="stack-cloud" aria-label="<?php echo esc_attr__( 'Technical stack list', 'nolan-showcase-theme-x3' ); ?>">
				<?php foreach ( $stack as $item ) : ?>
					<span><?php echo esc_html( $item ); ?></span>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="contact" class="section contact-section">
		<div class="container contact-panel reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x3' ); ?></p>
				<h2><?php esc_html_e( 'Bring clarity to the next web platform, automation lane, or AI-assisted workflow.', 'nolan-showcase-theme-x3' ); ?></h2>
				<p><?php echo wp_kses_post( __( 'Use this section for a real contact route, project intake link, or concise availability note when the theme is customized for production.', 'nolan-showcase-theme-x3' ) ); ?></p>
			</div>
			<a class="button button-primary" href="<?php echo esc_url( home_url( '/#top' ) ); ?>"><?php esc_html_e( 'Back to Top', 'nolan-showcase-theme-x3' ); ?></a>
		</div>
	</section>
</main>
<?php
get_footer();
