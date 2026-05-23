<?php
/**
 * Front page template.
 *
 * @package Nolan_Showcase_Theme
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="hero section-band" id="top">
		<div class="container hero__grid">
			<div class="hero__content reveal">
				<p class="eyebrow"><?php esc_html_e( 'Developer portfolio for serious digital systems', 'nolan-showcase-theme' ); ?></p>
				<h1><?php esc_html_e( 'Nolan builds polished software, WordPress platforms, automation, and AI-enabled workflows.', 'nolan-showcase-theme' ); ?></h1>
				<p class="hero__lead"><?php esc_html_e( 'A senior technical leader focused on practical engineering, clean delivery, useful analytics, and interfaces that make complex systems feel controlled.', 'nolan-showcase-theme' ); ?></p>
				<div class="hero__actions">
					<a class="button button--primary" href="<?php echo esc_url( home_url( '/#work' ) ); ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme' ); ?></a>
					<a class="button button--secondary" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Start a Conversation', 'nolan-showcase-theme' ); ?></a>
				</div>
			</div>
			<div class="command-panel reveal" aria-label="<?php echo esc_attr__( 'Technical portfolio dashboard preview', 'nolan-showcase-theme' ); ?>">
				<div class="panel-toolbar" aria-hidden="true"><span></span><span></span><span></span></div>
				<div class="status-row"><strong><?php esc_html_e( 'Delivery Console', 'nolan-showcase-theme' ); ?></strong><em><?php esc_html_e( 'online', 'nolan-showcase-theme' ); ?></em></div>
				<div class="console-lines">
					<span><?php esc_html_e( 'ship_wordpress_theme()', 'nolan-showcase-theme' ); ?></span>
					<span><?php esc_html_e( 'connect_ai_workflow()', 'nolan-showcase-theme' ); ?></span>
					<span><?php esc_html_e( 'measure_product_events()', 'nolan-showcase-theme' ); ?></span>
				</div>
				<div class="metric-strip">
					<div><strong><?php esc_html_e( '6', 'nolan-showcase-theme' ); ?></strong><span><?php esc_html_e( 'capability lanes', 'nolan-showcase-theme' ); ?></span></div>
					<div><strong><?php esc_html_e( 'AA', 'nolan-showcase-theme' ); ?></strong><span><?php esc_html_e( 'accessibility focus', 'nolan-showcase-theme' ); ?></span></div>
					<div><strong><?php esc_html_e( '0', 'nolan-showcase-theme' ); ?></strong><span><?php esc_html_e( 'remote dependencies', 'nolan-showcase-theme' ); ?></span></div>
				</div>
			</div>
		</div>
	</section>

	<section id="services" class="section">
		<div class="container">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Core strengths', 'nolan-showcase-theme' ); ?></p>
				<h2><?php esc_html_e( 'A broad technical portfolio with a clear delivery point of view.', 'nolan-showcase-theme' ); ?></h2>
			</div>
			<div class="service-grid">
				<?php
				$services = array(
					array( 'Software Development', 'Maintainable interfaces, application architecture, integrations, and product surfaces that are built to evolve.' ),
					array( 'WordPress Development', 'Custom themes, editorial workflows, block-minded structure, performance improvements, and client-friendly administration.' ),
					array( 'Automation', 'Workflow automation, internal tools, handoff systems, quality checks, and repeatable processes that reduce operational drag.' ),
					array( 'AI Integration', 'Useful AI features with guardrails, review loops, structured prompts, and implementation patterns that fit real teams.' ),
					array( 'Analytics & Tracking', 'Event strategy, measurement plans, dashboard-ready data, and privacy-aware instrumentation for better decisions.' ),
					array( 'Technical Leadership', 'Architecture review, roadmapping, mentoring, launch planning, and calm execution across complicated technical surfaces.' ),
				);
				foreach ( $services as $service ) :
					?>
					<article class="service-card reveal">
						<span class="service-card__icon" aria-hidden="true"></span>
						<h3><?php echo esc_html( $service[0] ); ?></h3>
						<p><?php echo esc_html( $service[1] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="work" class="section section-band section-band--light">
		<div class="container work-grid">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Featured work', 'nolan-showcase-theme' ); ?></p>
				<h2><?php esc_html_e( 'Representative projects shaped around outcomes, clarity, and long-term ownership.', 'nolan-showcase-theme' ); ?></h2>
				<p><?php esc_html_e( 'Use these cards for case studies, product builds, consulting engagements, or internal systems that demonstrate senior technical judgment.', 'nolan-showcase-theme' ); ?></p>
			</div>
			<div class="case-stack">
				<article class="case-card reveal"><span><?php esc_html_e( 'WordPress Platform', 'nolan-showcase-theme' ); ?></span><h3><?php esc_html_e( 'Custom portfolio system with reusable sections, local assets, and accessible front-end behavior.', 'nolan-showcase-theme' ); ?></h3></article>
				<article class="case-card reveal"><span><?php esc_html_e( 'Automation Workflow', 'nolan-showcase-theme' ); ?></span><h3><?php esc_html_e( 'Review and launch pipeline that turns repeatable quality checks into a predictable delivery rhythm.', 'nolan-showcase-theme' ); ?></h3></article>
				<article class="case-card reveal"><span><?php esc_html_e( 'Analytics Model', 'nolan-showcase-theme' ); ?></span><h3><?php esc_html_e( 'Tracking plan that maps product interactions to reporting views teams can actually use.', 'nolan-showcase-theme' ); ?></h3></article>
			</div>
		</div>
	</section>

	<section id="process" class="section">
		<div class="container process-layout">
			<div class="section-heading reveal">
				<p class="eyebrow"><?php esc_html_e( 'Process', 'nolan-showcase-theme' ); ?></p>
				<h2><?php esc_html_e( 'A practical operating model from discovery through measurement.', 'nolan-showcase-theme' ); ?></h2>
			</div>
			<div class="timeline reveal">
				<div><span><?php esc_html_e( '01', 'nolan-showcase-theme' ); ?></span><h3><?php esc_html_e( 'Map', 'nolan-showcase-theme' ); ?></h3><p><?php esc_html_e( 'Clarify goals, users, content, systems, integrations, tracking needs, and constraints.', 'nolan-showcase-theme' ); ?></p></div>
				<div><span><?php esc_html_e( '02', 'nolan-showcase-theme' ); ?></span><h3><?php esc_html_e( 'Build', 'nolan-showcase-theme' ); ?></h3><p><?php esc_html_e( 'Create clean templates, interfaces, automations, AI touchpoints, and reviewable delivery increments.', 'nolan-showcase-theme' ); ?></p></div>
				<div><span><?php esc_html_e( '03', 'nolan-showcase-theme' ); ?></span><h3><?php esc_html_e( 'Measure', 'nolan-showcase-theme' ); ?></h3><p><?php esc_html_e( 'Instrument behavior, validate accessibility and performance, then turn findings into focused improvements.', 'nolan-showcase-theme' ); ?></p></div>
			</div>
		</div>
	</section>

	<section id="contact" class="section cta">
		<div class="container cta__inner reveal">
			<p class="eyebrow"><?php esc_html_e( 'Contact', 'nolan-showcase-theme' ); ?></p>
			<h2><?php esc_html_e( 'Build a portfolio presence that makes technical authority visible before the first call.', 'nolan-showcase-theme' ); ?></h2>
			<a class="button button--primary" href="<?php echo esc_url( home_url( '/#top' ) ); ?>"><?php esc_html_e( 'Back to Top', 'nolan-showcase-theme' ); ?></a>
		</div>
	</section>
</main>
<?php
get_footer();
