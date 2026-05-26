<?php
/**
 * Template Name: Process
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
nst09_render_page_hero(
	'Process',
	'A clear path from messy request to measurable website improvement.',
	'The process keeps strategy, development, QA, launch, measurement, and ongoing support connected so clients know what to provide, what we deliver, and how decisions are made.',
	array(
		array( 'label' => 'Start', 'value' => 'Discovery and audit' ),
		array( 'label' => 'Middle', 'value' => 'Strategy, design, build, QA' ),
		array( 'label' => 'After', 'value' => 'Launch, measure, support' ),
	)
);
?>
<main id="primary" class="site-main">
	<section class="section-light" id="process">
		<div class="container timeline timeline--large">
			<?php
			$steps = array(
				array( 'title' => 'Discovery', 'copy' => 'We clarify the business model, audience, pain points, decision makers, platform constraints, timeline, budget shape, and what must be true after launch.' ),
				array( 'title' => 'Audit', 'copy' => 'We review content, templates, plugins or apps, hosting, tracking, speed, accessibility, SEO basics, checkout or lead paths, and operational risk.' ),
				array( 'title' => 'Strategy', 'copy' => 'We define what should be repaired, rebuilt, migrated, measured, automated, or maintained, then sequence the work by business impact.' ),
				array( 'title' => 'Design direction', 'copy' => 'We establish information hierarchy, page patterns, conversion priorities, component behavior, editorial rules, and visual standards for the brand.' ),
				array( 'title' => 'Development', 'copy' => 'We build templates, integrations, theme components, tracking events, performance improvements, and content structures using maintainable platform conventions.' ),
				array( 'title' => 'QA', 'copy' => 'We test responsive layouts, accessibility basics, forms, checkout, analytics events, speed, browser behavior, editor workflows, and launch-critical content.' ),
				array( 'title' => 'Launch', 'copy' => 'We coordinate DNS, hosting, redirects, cache, backup, rollback notes, production settings, and stakeholder review with a controlled launch checklist.' ),
				array( 'title' => 'Measurement', 'copy' => 'We validate GA4, GTM, e-commerce events, call tracking, dashboards, Core Web Vitals, and the signals that should guide future decisions.' ),
				array( 'title' => 'Ongoing support', 'copy' => 'We maintain updates, security checks, uptime, content requests, reporting, emergency support positioning, and the backlog of practical improvements.' ),
			);
			foreach ( $steps as $step ) :
				?>
				<article>
					<h2><?php echo esc_html( $step['title'] ); ?></h2>
					<p><?php echo esc_html( $step['copy'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
	<section class="section-dark">
		<div class="container card-grid card-grid--two">
			<article class="feature-card">
				<p class="eyebrow"><?php esc_html_e( 'Client responsibilities', 'nolan-showcase-theme-09' ); ?></p>
				<ul class="check-list">
					<li><?php esc_html_e( 'Provide access to WordPress, Shopify, hosting, DNS, analytics, tag manager, CRM, and relevant apps when needed.', 'nolan-showcase-theme-09' ); ?></li>
					<li><?php esc_html_e( 'Approve scope decisions, content direction, compliance-sensitive copy, brand assets, and launch windows.', 'nolan-showcase-theme-09' ); ?></li>
					<li><?php esc_html_e( 'Confirm who owns post-launch updates, reporting review, and maintenance approvals.', 'nolan-showcase-theme-09' ); ?></li>
				</ul>
			</article>
			<article class="feature-card">
				<p class="eyebrow"><?php esc_html_e( 'Agency deliverables', 'nolan-showcase-theme-09' ); ?></p>
				<ul class="check-list">
					<li><?php esc_html_e( 'Audit findings, strategic recommendations, build scope, implementation notes, QA evidence, and launch checklist.', 'nolan-showcase-theme-09' ); ?></li>
					<li><?php esc_html_e( 'Theme files, configured integrations, tracking validation, editor handoff notes, and performance recommendations.', 'nolan-showcase-theme-09' ); ?></li>
					<li><?php esc_html_e( 'Maintenance plan, reporting structure, support boundaries, and improvement backlog after launch.', 'nolan-showcase-theme-09' ); ?></li>
				</ul>
			</article>
		</div>
	</section>
	<section class="section-light final-band" id="contact">
		<div class="container final-band__inner">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Plan the path', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'A better process starts with a clearer first brief.', 'nolan-showcase-theme-09' ); ?></h2>
				<p><?php esc_html_e( 'Tell us what is broken, what is changing, or what needs to grow. We will identify the first audit points and likely engagement shape.', 'nolan-showcase-theme-09' ); ?></p>
			</div>
			<?php echo wp_kses_post( nst09_button( 'Start the process', home_url( '/contact/' ) ) ); ?>
		</div>
	</section>
</main>
<?php
get_footer();
