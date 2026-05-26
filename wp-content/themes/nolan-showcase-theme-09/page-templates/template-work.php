<?php
/**
 * Template Name: Work
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
nst09_render_page_hero(
	'Example work',
	'Fictional case-study examples that show how we frame real website problems.',
	'These cards do not claim real client names. They show the type of problem, solution, and outcome a business can expect from a focused WordPress, Shopify, WooCommerce, AI, performance, or analytics engagement.',
	array(
		array( 'label' => 'Format', 'value' => 'Problem, solution, outcome' ),
		array( 'label' => 'Use', 'value' => 'Scope examples, not claims' ),
		array( 'label' => 'Coverage', 'value' => 'Builds, rescue, growth, measurement' ),
	)
);
?>
<main id="primary" class="site-main">
	<section class="section-light">
		<div class="container card-grid card-grid--three">
			<?php
			$projects = array(
				array( 'title' => 'Harbor Desk Advisory - WordPress rebuild', 'problem' => 'A consulting firm had a slow WordPress site with duplicated pages, unclear service taxonomy, and editors afraid to update content.', 'solution' => 'We rebuilt the classic theme, simplified service templates, improved editor guidance, migrated content, and added performance budgets.', 'outcome' => 'The team could publish insight pages without layout damage and review qualified leads from cleaner conversion paths.' ),
				array( 'title' => 'Lineweight Supply - Shopify conversion pass', 'problem' => 'A specialty retailer had product pages with unclear variants, app-heavy templates, and inconsistent cart messaging.', 'solution' => 'We redesigned product sections, rationalized apps, improved collection filtering, refined cart states, and validated GTM events.', 'outcome' => 'Merchandising became easier to test and campaign reporting showed reliable add-to-cart and checkout behavior.' ),
				array( 'title' => 'Foundry Parts Co. - WooCommerce operations', 'problem' => 'A B2B store struggled with complex variations, shipping rules, tax setup, and manual inventory updates.', 'solution' => 'We reorganized product data, configured shipping zones, improved email templates, integrated inventory checks, and tuned checkout performance.', 'outcome' => 'Support tickets dropped because buyers saw clearer product choices, shipping expectations, and order confirmations.' ),
				array( 'title' => 'Brightline Care - Website rescue', 'problem' => 'A service business lost lead flow after a migration caused DNS confusion, form failures, and mobile layout regressions.', 'solution' => 'We reviewed DNS, hosting, SSL, plugins, forms, logs, cache layers, and responsive breakpoints before repairing production.', 'outcome' => 'Lead capture stabilized and the client received a prevention plan with maintenance and uptime monitoring recommendations.' ),
				array( 'title' => 'Cedar Room Studio - AI intake assistant', 'problem' => 'A small team answered the same fit questions repeatedly and routed inquiries manually from the website.', 'solution' => 'We mapped approved FAQ content, lead qualification prompts, guardrails, CRM handoff rules, and human escalation points.', 'outcome' => 'Visitors received faster guidance while the team got cleaner inquiry context before the first call.' ),
				array( 'title' => 'Atlas Clinic Group - Analytics cleanup', 'problem' => 'GA4, call tracking, forms, and ad landing pages were reporting conflicting conversion counts.', 'solution' => 'We documented a measurement plan, cleaned GTM, validated conversion events, reviewed PageSpeed, and created a reporting dashboard spec.', 'outcome' => 'Marketing decisions used a shared definition of leads, calls, landing page speed, and campaign performance.' ),
			);
			foreach ( $projects as $project ) :
				?>
				<article class="case-card">
					<h2><?php echo esc_html( $project['title'] ); ?></h2>
					<p><strong><?php esc_html_e( 'Problem:', 'nolan-showcase-theme-09' ); ?></strong> <?php echo esc_html( $project['problem'] ); ?></p>
					<p><strong><?php esc_html_e( 'Solution:', 'nolan-showcase-theme-09' ); ?></strong> <?php echo esc_html( $project['solution'] ); ?></p>
					<p><strong><?php esc_html_e( 'Outcome:', 'nolan-showcase-theme-09' ); ?></strong> <?php echo esc_html( $project['outcome'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
	<section class="section-dark final-band" id="contact">
		<div class="container final-band__inner">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Your scenario', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Bring the problem behind the project request.', 'nolan-showcase-theme-09' ); ?></h2>
				<p><?php esc_html_e( 'We will turn it into a scope that separates urgent fixes, strategic improvements, measurable outcomes, and ongoing support needs.', 'nolan-showcase-theme-09' ); ?></p>
			</div>
			<?php echo wp_kses_post( nst09_button( 'Discuss a project', home_url( '/contact/' ) ) ); ?>
		</div>
	</section>
</main>
<?php
get_footer();
