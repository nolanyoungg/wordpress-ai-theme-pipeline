<?php
/**
 * Template Name: Process
 *
 * @package Nolan_Showcase_Theme_08
 */

get_header();
nst08_render_page_hero(
	'Agency process',
	'A website process for what happens before, during, and after launch.',
	'Northstar uses a practical sequence: understand the business context, audit the existing stack, plan the work, build carefully, test the important flows, launch with notes, stabilize, report, and keep improving.',
	array(
		array( 'label' => 'Before', 'value' => 'Discovery + audit' ),
		array( 'label' => 'During', 'value' => 'Build + QA' ),
		array( 'label' => 'After', 'value' => 'Stabilize + improve' ),
	)
);
?>
<main id="primary" class="site-main">
	<section class="section-light">
		<div class="container process-rows">
			<?php
			$steps = array(
				array( '01', 'Discovery', 'Clarify business model, audiences, revenue paths, support needs, platform constraints, decision makers, and launch deadlines.' ),
				array( '02', 'Audit', 'Review templates, plugins, apps, hosting, DNS, analytics, speed, security, content structure, checkout, forms, and ownership gaps.' ),
				array( '03', 'Planning', 'Translate findings into scope, risks, milestones, technical dependencies, content requirements, QA criteria, and a launch path.' ),
				array( '04', 'Design and development', 'Build the visual system, templates, storefront sections, integrations, tracking, and content patterns with responsive behavior in mind.' ),
				array( '05', 'QA', 'Test navigation, forms, checkout, mobile layouts, accessibility basics, performance risks, tracking events, redirects, and editor workflows.' ),
				array( '06', 'Launch', 'Coordinate deployment, backups, DNS or hosting changes, cache clearing, post-launch smoke tests, and stakeholder communication.' ),
				array( '07', 'Stabilization', 'Watch the important flows, fix launch issues, confirm analytics, review support feedback, and document what changed.' ),
				array( '08', 'Reporting', 'Provide plain-English notes on completed work, performance, conversions, technical risks, and recommended next moves.' ),
				array( '09', 'Ongoing improvement', 'Use maintenance, CRO, SEO foundations, performance work, AI workflows, and analytics insights to improve the site in measured cycles.' ),
			);
			foreach ( $steps as $step ) :
				?>
				<article class="process-row">
					<span><?php echo esc_html( $step[0] ); ?></span>
					<h2><?php echo esc_html( $step[1] ); ?></h2>
					<p><?php echo esc_html( $step[2] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
	<section class="section-dark final-band">
		<div class="container final-band__inner">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Next step', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'A better process starts with knowing what the current site is carrying.', 'nolan-showcase-theme-08' ); ?></h2>
				<p><?php esc_html_e( 'Northstar can begin with a focused audit or a scoped build plan depending on urgency and risk.', 'nolan-showcase-theme-08' ); ?></p>
			</div>
			<?php echo wp_kses_post( nst08_button( 'Start discovery' ) ); ?>
		</div>
	</section>
</main>
<?php
get_footer();
