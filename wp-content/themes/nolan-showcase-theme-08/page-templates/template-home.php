<?php
/**
 * Template Name: Theme 08 Home
 *
 * @package Nolan_Showcase_Theme_08
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="home-hero section-dark">
		<div class="container home-hero__grid">
			<div class="home-hero__copy">
				<p class="eyebrow"><?php esc_html_e( 'Northstar Web Bureau', 'nolan-showcase-theme-08' ); ?></p>
				<h1><?php esc_html_e( 'Websites that are built, rescued, measured, and managed like revenue infrastructure.', 'nolan-showcase-theme-08' ); ?></h1>
				<p class="lede"><?php esc_html_e( 'A premium WordPress and Shopify agency for teams that need sharper storefronts, steadier operations, cleaner analytics, and practical AI automation without platform lock-in.', 'nolan-showcase-theme-08' ); ?></p>
				<div class="button-row">
					<?php echo wp_kses_post( nst08_button( 'Book a readiness audit' ) ); ?>
					<?php echo wp_kses_post( nst08_button( 'Explore services', '#services', 'secondary' ) ); ?>
				</div>
			</div>
			<div class="dashboard-stack" aria-label="<?php echo esc_attr__( 'Agency dashboard preview', 'nolan-showcase-theme-08' ); ?>">
				<img src="<?php echo nst08_asset_uri( 'assets/images/interface-suite.svg' ); ?>" alt="<?php echo esc_attr__( 'Layered website operations dashboard with conversion, support, and performance panels.', 'nolan-showcase-theme-08' ); ?>">
			</div>
		</div>
		<div class="container trust-strip" aria-label="<?php echo esc_attr__( 'Agency value points', 'nolan-showcase-theme-08' ); ?>">
			<span><?php esc_html_e( 'Launch QA', 'nolan-showcase-theme-08' ); ?></span>
			<span><?php esc_html_e( 'Checkout repair', 'nolan-showcase-theme-08' ); ?></span>
			<span><?php esc_html_e( 'GA4 + GTM', 'nolan-showcase-theme-08' ); ?></span>
			<span><?php esc_html_e( 'AI support flows', 'nolan-showcase-theme-08' ); ?></span>
			<span><?php esc_html_e( 'Monthly management', 'nolan-showcase-theme-08' ); ?></span>
		</div>
	</section>

	<section class="section-light" id="services">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Services overview', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Senior technical help across the full website lifecycle.', 'nolan-showcase-theme-08' ); ?></h2>
			</div>
			<p class="section-copy"><?php esc_html_e( 'Northstar plans, builds, stabilizes, and improves websites after launch. The work spans custom WordPress themes, WooCommerce checkout fixes, Shopify Plus storefronts, AI chatbot planning, tracking cleanup, CRO experiments, and maintenance systems.', 'nolan-showcase-theme-08' ); ?></p>
		</div>
		<div class="container card-grid card-grid--three">
			<?php
			$services = array(
				array( 'WordPress systems', 'Custom classic themes, editor compatibility, plugin integration, migrations, security hardening, and performance tuning.' ),
				array( 'Commerce growth', 'WooCommerce and Shopify product architecture, cart improvements, checkout strategy, analytics, and CRO roadmaps.' ),
				array( 'Operations layer', 'Maintenance, rescue response, reporting dashboards, AI workflow automation, and ongoing improvement management.' ),
			);
			foreach ( $services as $index => $service ) :
				?>
				<article class="layer-card">
					<span class="card-index"><?php echo esc_html( '0' . ( $index + 1 ) ); ?></span>
					<h3><?php echo esc_html( $service[0] ); ?></h3>
					<p><?php echo esc_html( $service[1] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="section-dark">
		<div class="container feature-grid">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'WordPress + Shopify', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'One team for content sites, storefronts, and the messy systems between them.', 'nolan-showcase-theme-08' ); ?></h2>
				<p><?php esc_html_e( 'The agency supports classic WordPress builds, custom themes, WooCommerce catalogs, Shopify storefronts, Shopify Plus workflows, CRM handoffs, measurement plans, and migrations where search visibility and order data cannot be treated casually.', 'nolan-showcase-theme-08' ); ?></p>
			</div>
			<img src="<?php echo nst08_asset_uri( 'assets/svg/commerce-stack.svg' ); ?>" alt="<?php echo esc_attr__( 'Illustration of connected WordPress, Shopify, analytics, and automation systems.', 'nolan-showcase-theme-08' ); ?>">
		</div>
	</section>

	<section class="section-light">
		<div class="container rescue-band">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Website rescue and repair', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Stabilize the site before redesigning the site.', 'nolan-showcase-theme-08' ); ?></h2>
				<p><?php esc_html_e( 'When a site is slow, broken, hacked, mis-tracking, or losing orders, Northstar starts with diagnostics: hosting, DNS, plugin conflicts, forms, payment flows, mobile breakpoints, tracking tags, and recent change history.', 'nolan-showcase-theme-08' ); ?></p>
			</div>
			<ul class="metric-list">
				<li><strong><?php esc_html_e( '24-48 hr', 'nolan-showcase-theme-08' ); ?></strong><span><?php esc_html_e( 'Initial triage window for urgent rescue audits.', 'nolan-showcase-theme-08' ); ?></span></li>
				<li><strong><?php esc_html_e( '12-point', 'nolan-showcase-theme-08' ); ?></strong><span><?php esc_html_e( 'Stability review covering speed, security, checkout, forms, and tracking.', 'nolan-showcase-theme-08' ); ?></span></li>
			</ul>
		</div>
	</section>

	<section class="section-accent">
		<div class="container card-grid card-grid--two">
			<article class="wide-card">
				<p class="eyebrow"><?php esc_html_e( 'E-commerce growth', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Better product paths, cleaner checkout data, and fewer avoidable drop-offs.', 'nolan-showcase-theme-08' ); ?></h2>
				<p><?php esc_html_e( 'Work includes product page hierarchy, collection strategy, cart friction review, checkout messaging, event validation, merchandising blocks, retention surfaces, and reporting that separates useful signals from noise.', 'nolan-showcase-theme-08' ); ?></p>
			</article>
			<article class="wide-card dark-card">
				<p class="eyebrow"><?php esc_html_e( 'AI integration', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Useful AI experiences with guardrails, escalation, and ownership.', 'nolan-showcase-theme-08' ); ?></h2>
				<p><?php esc_html_e( 'Northstar plans chatbots, FAQ assistants, lead qualification, internal workflow automation, CRM handoff, and support deflection around approved content, clear boundaries, and human review paths.', 'nolan-showcase-theme-08' ); ?></p>
			</article>
		</div>
	</section>

	<section class="section-dark">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Analytics + performance', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Measure what matters before optimizing what is loudest.', 'nolan-showcase-theme-08' ); ?></h2>
			</div>
			<div class="dashboard-mini">
				<div><span><?php esc_html_e( 'Core Web Vitals', 'nolan-showcase-theme-08' ); ?></span><strong><?php esc_html_e( 'Tracked', 'nolan-showcase-theme-08' ); ?></strong></div>
				<div><span><?php esc_html_e( 'Checkout events', 'nolan-showcase-theme-08' ); ?></span><strong><?php esc_html_e( 'Validated', 'nolan-showcase-theme-08' ); ?></strong></div>
				<div><span><?php esc_html_e( 'Monthly reports', 'nolan-showcase-theme-08' ); ?></span><strong><?php esc_html_e( 'Plain English', 'nolan-showcase-theme-08' ); ?></strong></div>
			</div>
		</div>
	</section>

	<section class="section-light">
		<div class="container">
			<p class="eyebrow"><?php esc_html_e( 'Process overview', 'nolan-showcase-theme-08' ); ?></p>
			<div class="timeline">
				<?php
				$steps = array(
					'Discover the business model, constraints, traffic sources, and launch risks.',
					'Audit the stack, tracking, speed, content structure, plugins, apps, and checkout flow.',
					'Design, build, QA, launch, stabilize, report, and improve in measured cycles.',
				);
				foreach ( $steps as $index => $step ) :
					?>
					<div><span><?php echo esc_html( '0' . ( $index + 1 ) ); ?></span><p><?php echo esc_html( $step ); ?></p></div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section-dark">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Selected project patterns', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Case-study-style previews without fake client claims.', 'nolan-showcase-theme-08' ); ?></h2>
			</div>
		</div>
		<div class="container card-grid card-grid--three">
			<?php
			$cases = array(
				array( 'Regional service brand', 'Problem: outdated WordPress theme and weak lead routing.', 'Solution: rebuilt page templates, tuned forms, clarified service hierarchy.', 'Outcome: faster content publishing and cleaner lead attribution.' ),
				array( 'Specialty retailer', 'Problem: Shopify collection pages hid decision-critical details.', 'Solution: redesigned filters, product cards, cart messaging, and event tracking.', 'Outcome: merchandising team could compare conversion by collection.' ),
				array( 'B2B support team', 'Problem: repetitive pre-sales questions overloaded staff.', 'Solution: AI FAQ assistant with approved answers, CRM handoff, and escalation rules.', 'Outcome: support leads arrived with cleaner context.' ),
			);
			foreach ( $cases as $case ) :
				?>
				<article class="case-card">
					<h3><?php echo esc_html( $case[0] ); ?></h3>
					<p><?php echo esc_html( $case[1] ); ?></p>
					<p><?php echo esc_html( $case[2] ); ?></p>
					<p><?php echo esc_html( $case[3] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="section-light">
		<div class="container card-grid card-grid--two">
			<article class="wide-card">
				<p class="eyebrow"><?php esc_html_e( 'Maintenance plans', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Keep the site boring in the best possible way.', 'nolan-showcase-theme-08' ); ?></h2>
				<p><?php esc_html_e( 'Plan options cover updates, backups, plugin testing, uptime monitoring, small content changes, monthly reporting, emergency response positioning, and roadmap recommendations.', 'nolan-showcase-theme-08' ); ?></p>
			</article>
			<article class="wide-card">
				<p class="eyebrow"><?php esc_html_e( 'FAQ preview', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Common questions before a technical engagement.', 'nolan-showcase-theme-08' ); ?></h2>
				<details><summary><?php esc_html_e( 'Can you take over an existing site?', 'nolan-showcase-theme-08' ); ?></summary><p><?php esc_html_e( 'Yes. The first step is an access, backup, plugin/app, hosting, DNS, and analytics audit so the takeover is documented before changes begin.', 'nolan-showcase-theme-08' ); ?></p></details>
				<details><summary><?php esc_html_e( 'Do you support both WordPress and Shopify?', 'nolan-showcase-theme-08' ); ?></summary><p><?php esc_html_e( 'Yes. Many projects involve both platforms, especially content-heavy brands with separate commerce operations.', 'nolan-showcase-theme-08' ); ?></p></details>
			</article>
		</div>
	</section>

	<section class="section-dark final-band" id="contact">
		<div class="container final-band__inner">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Final CTA', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Bring the site, the goals, and the problems. Leave with a practical plan.', 'nolan-showcase-theme-08' ); ?></h2>
				<p><?php esc_html_e( 'Northstar starts with the current stack and the business outcome, then recommends the smallest responsible path to a better website operation.', 'nolan-showcase-theme-08' ); ?></p>
			</div>
			<?php echo wp_kses_post( nst08_button( 'Request a project review' ) ); ?>
		</div>
	</section>
</main>
<?php
get_footer();
