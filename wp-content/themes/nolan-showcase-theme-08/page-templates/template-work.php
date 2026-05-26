<?php
/**
 * Template Name: Work
 *
 * @package Nolan_Showcase_Theme_08
 */

get_header();
nst08_render_page_hero(
	'Work patterns',
	'Fictional case-study examples showing the kinds of website problems Northstar solves.',
	'These are realistic project scenarios, not claims about real client results. Each example shows the problem, the implementation response, and the operational outcome a serious website team would care about.',
	array(
		array( 'label' => 'Examples', 'value' => '6 project types' ),
		array( 'label' => 'Platforms', 'value' => 'WP, Woo, Shopify' ),
		array( 'label' => 'Also covered', 'value' => 'AI, speed, analytics' ),
	)
);
?>
<main id="primary" class="site-main">
	<section class="section-light">
		<div class="container case-grid">
			<?php
			$projects = array(
				array( 'WordPress service platform', 'Problem: a regional consulting firm had scattered service pages, slow templates, and forms that sent incomplete lead data.', 'Solution: rebuilt the classic theme page system, consolidated service hierarchy, improved form routing, and added launch QA.', 'Outcome: editors could publish consistent service pages and sales received leads with clearer context.' ),
				array( 'Shopify specialty retailer', 'Problem: shoppers had to open too many products to compare specs, and collection analytics did not show meaningful behavior.', 'Solution: redesigned product cards, collection filters, cart messaging, and GA4 item events.', 'Outcome: merchandising could compare product discovery patterns by collection and campaign.' ),
				array( 'WooCommerce parts catalog', 'Problem: variations, shipping rules, and tax settings were difficult to manage, causing support tickets and checkout confusion.', 'Solution: reorganized attributes, documented shipping zones, repaired checkout messaging, and validated purchase events.', 'Outcome: managers had clearer catalog rules and customers saw fewer unclear checkout states.' ),
				array( 'AI support assistant', 'Problem: the support team answered the same pre-sales and setup questions while sensitive account issues still needed humans.', 'Solution: planned an approved-content assistant, escalation triggers, CRM handoff fields, and review cadence.', 'Outcome: routine questions were handled earlier while higher-risk conversations moved to staff with context.' ),
				array( 'Performance rescue', 'Problem: a marketing site lost organic traffic after a redesign that introduced layout shift, heavy scripts, and image bloat.', 'Solution: audited Core Web Vitals, removed unnecessary scripts, corrected image sizing, and documented template rules.', 'Outcome: the team had a speed baseline, a prioritized fix list, and fewer layout regressions.' ),
				array( 'Analytics cleanup', 'Problem: duplicate tags inflated conversions and the team could not separate qualified leads from low-intent form fills.', 'Solution: rebuilt GTM triggers, mapped GA4 events, validated thank-you states, and created reporting definitions.', 'Outcome: leadership could read a dashboard tied to actual decisions instead of vanity totals.' ),
			);
			foreach ( $projects as $project ) :
				?>
				<article class="case-card case-card--light">
					<h2><?php echo esc_html( $project[0] ); ?></h2>
					<p><?php echo esc_html( $project[1] ); ?></p>
					<p><?php echo esc_html( $project[2] ); ?></p>
					<p><?php echo esc_html( $project[3] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
</main>
<?php
get_footer();
