<?php
/**
 * Template Name: Home
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
?>
<main id="primary" class="site-main">
	<section class="hero section-dark">
		<div class="container hero__grid">
			<div class="hero__content">
				<p class="eyebrow"><?php esc_html_e( 'Civic Pixel Works', 'nolan-showcase-theme-09' ); ?></p>
				<h1><?php esc_html_e( 'Premium website systems for WordPress, WooCommerce, Shopify, and Shopify Plus teams.', 'nolan-showcase-theme-09' ); ?></h1>
				<p class="lede"><?php esc_html_e( 'We build, maintain, fix, optimize, and scale business-critical websites with clean technical decisions, realistic launch plans, and measurable post-launch support.', 'nolan-showcase-theme-09' ); ?></p>
				<div class="button-row">
					<?php echo wp_kses_post( nst09_button( 'Start a website brief', home_url( '/contact/' ) ) ); ?>
					<?php echo wp_kses_post( nst09_button( 'See how we work', home_url( '/process/' ), 'secondary' ) ); ?>
				</div>
			</div>
			<div class="dashboard-stack" aria-label="<?php echo esc_attr__( 'Website operations dashboard illustration', 'nolan-showcase-theme-09' ); ?>">
				<img src="<?php echo nst09_asset_uri( 'assets/images/dashboard-system.svg' ); ?>" alt="<?php echo esc_attr__( 'Layered dashboard cards showing conversion tracking, speed, rescue queue, and maintenance health.', 'nolan-showcase-theme-09' ); ?>">
			</div>
		</div>
		<div class="container trust-strip" aria-label="<?php echo esc_attr__( 'Value summary', 'nolan-showcase-theme-09' ); ?>">
			<span><?php esc_html_e( 'Classic WordPress themes', 'nolan-showcase-theme-09' ); ?></span>
			<span><?php esc_html_e( 'Shopify Plus planning', 'nolan-showcase-theme-09' ); ?></span>
			<span><?php esc_html_e( 'WooCommerce checkout repair', 'nolan-showcase-theme-09' ); ?></span>
			<span><?php esc_html_e( 'GA4 and GTM cleanup', 'nolan-showcase-theme-09' ); ?></span>
		</div>
	</section>

	<section class="section-light">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Services', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'A technical agency for the parts of the site that affect leads, orders, and operations.', 'nolan-showcase-theme-09' ); ?></h2>
			</div>
			<p class="section-copy"><?php esc_html_e( 'Clients come to us when a site needs more than a new homepage: broken checkout flows, unreliable tracking, fragile plugins, slow templates, unclear CMS ownership, and feature requests that need business judgment.', 'nolan-showcase-theme-09' ); ?></p>
		</div>
		<div class="container card-grid card-grid--three">
			<?php
			$home_services = array(
				array( 'title' => 'WordPress development', 'copy' => 'Custom classic themes, block/editor compatibility, plugin integration, hosting migration, performance, security, and maintainable page systems.' ),
				array( 'title' => 'Shopify development', 'copy' => 'Storefront builds, product page optimization, collection strategy, cart improvements, checkout planning, app integration, and tracking.' ),
				array( 'title' => 'WooCommerce systems', 'copy' => 'Product architecture, shipping and tax configuration, inventory integrations, email templates, reporting, and speed improvements.' ),
				array( 'title' => 'Website maintenance', 'copy' => 'Updates, backups, security checks, plugin testing, uptime monitoring, content updates, layout fixes, and monthly reporting.' ),
				array( 'title' => 'Website rescue', 'copy' => 'Emergency diagnostics for broken sites, slow pages, plugin conflicts, checkout failures, tracking issues, DNS, hosting, and migration problems.' ),
				array( 'title' => 'AI, analytics, performance', 'copy' => 'AI assistants, lead qualification, CRM handoff, GA4, GTM, conversion events, call tracking, PageSpeed, and Core Web Vitals.' ),
			);
			foreach ( $home_services as $index => $service ) :
				?>
				<article class="layer-card">
					<span class="card-index"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
					<h3><?php echo esc_html( $service['title'] ); ?></h3>
					<p><?php echo esc_html( $service['copy'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="section-dark">
		<div class="container feature-grid">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'WordPress and Shopify specialization', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Two ecosystems, one operating standard.', 'nolan-showcase-theme-09' ); ?></h2>
				<p><?php esc_html_e( 'WordPress and Shopify businesses need support that understands the platform and the commercial path. We plan templates, product flows, tracking, editorial workflows, app/plugin risk, and launch sequencing together.', 'nolan-showcase-theme-09' ); ?></p>
			</div>
			<img src="<?php echo nst09_asset_uri( 'assets/images/platform-map.svg' ); ?>" alt="<?php echo esc_attr__( 'Diagram connecting WordPress, Shopify, WooCommerce, analytics, maintenance, and AI support.', 'nolan-showcase-theme-09' ); ?>">
		</div>
	</section>

	<section class="section-light">
		<div class="container card-grid card-grid--two">
			<article class="feature-card">
				<p class="eyebrow"><?php esc_html_e( 'Website rescue and repair', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'When a site is broken, the first deliverable is calm evidence.', 'nolan-showcase-theme-09' ); ?></h2>
				<p><?php esc_html_e( 'We check backups, recent changes, hosting logs, DNS, SSL, plugin conflicts, theme errors, checkout behavior, forms, and tracking before changing production settings.', 'nolan-showcase-theme-09' ); ?></p>
			</article>
			<article class="feature-card feature-card--accent">
				<p class="eyebrow"><?php esc_html_e( 'E-commerce growth', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Growth work is tied to the purchase path.', 'nolan-showcase-theme-09' ); ?></h2>
				<p><?php esc_html_e( 'Product pages, collections, carts, checkout messaging, payment clarity, shipping expectations, subscriptions, and e-commerce events are reviewed as one system.', 'nolan-showcase-theme-09' ); ?></p>
			</article>
		</div>
	</section>

	<section class="section-accent">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'AI, analytics, and performance', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Modern websites need automation, measurement, and speed in the same plan.', 'nolan-showcase-theme-09' ); ?></h2>
			</div>
			<ul class="check-list">
				<li><?php esc_html_e( 'AI assistants answer approved questions, qualify leads, route cases, and escalate to humans when confidence or policy requires it.', 'nolan-showcase-theme-09' ); ?></li>
				<li><?php esc_html_e( 'GA4, GTM, call tracking, and e-commerce events are validated against the decisions owners actually need to make.', 'nolan-showcase-theme-09' ); ?></li>
				<li><?php esc_html_e( 'PageSpeed, Core Web Vitals, image delivery, app/plugin weight, and cache behavior are prioritized by conversion and maintainability impact.', 'nolan-showcase-theme-09' ); ?></li>
			</ul>
		</div>
	</section>

	<section class="section-dark" id="process">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Process overview', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Before, during, and after the project, you know what is being decided and why.', 'nolan-showcase-theme-09' ); ?></h2>
			</div>
			<div class="timeline">
				<?php foreach ( array( 'Discovery', 'Audit', 'Strategy', 'Design direction', 'Development', 'QA', 'Launch', 'Measurement', 'Ongoing support' ) as $step ) : ?>
					<div><?php echo esc_html( $step ); ?></div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section-light">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Example outcomes', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Case-study-style previews based on common business problems.', 'nolan-showcase-theme-09' ); ?></h2>
			</div>
			<p class="section-copy"><?php esc_html_e( 'These are fictional examples, not claims about real clients. They show how we frame problems, solutions, and measurable outcomes.', 'nolan-showcase-theme-09' ); ?></p>
		</div>
		<div class="container card-grid card-grid--three">
			<?php
			$cases = array(
				array( 'title' => 'Catalog rebuild for a regional parts seller', 'copy' => 'Problem: confusing WooCommerce variations. Solution: product architecture, checkout cleanup, and reporting. Outcome: fewer support questions and clearer order review.' ),
				array( 'title' => 'Shopify cart recovery for a premium retailer', 'copy' => 'Problem: app conflicts and unclear discounts. Solution: cart UX, app audit, and GTM validation. Outcome: cleaner campaign testing and fewer checkout surprises.' ),
				array( 'title' => 'WordPress rescue for a services firm', 'copy' => 'Problem: slow pages and broken forms after migration. Solution: diagnostics, hosting fixes, plugin cleanup, and form monitoring. Outcome: stable lead flow.' ),
			);
			foreach ( $cases as $case ) :
				?>
				<article class="case-card">
					<h3><?php echo esc_html( $case['title'] ); ?></h3>
					<p><?php echo esc_html( $case['copy'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="section-accent">
		<div class="container card-grid card-grid--two">
			<article>
				<p class="eyebrow"><?php esc_html_e( 'Maintenance plans', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Support that continues after launch.', 'nolan-showcase-theme-09' ); ?></h2>
				<p><?php esc_html_e( 'Plans can include updates, backups, security review, plugin testing, uptime checks, content updates, emergency positioning, and monthly reporting with next-step recommendations.', 'nolan-showcase-theme-09' ); ?></p>
			</article>
			<article>
				<p class="eyebrow"><?php esc_html_e( 'FAQ preview', 'nolan-showcase-theme-09' ); ?></p>
				<h3><?php esc_html_e( 'Can you clean up an existing site instead of rebuilding it?', 'nolan-showcase-theme-09' ); ?></h3>
				<p><?php esc_html_e( 'Yes. We start with an audit and recommend repair, phased improvement, migration, or rebuild only after the risks and business priorities are clear.', 'nolan-showcase-theme-09' ); ?></p>
				<h3><?php esc_html_e( 'Do you require a paid AI API or remote assets?', 'nolan-showcase-theme-09' ); ?></h3>
				<p><?php esc_html_e( 'No. This theme and preview use local assets only. Any client AI integration is planned separately with clear platform and privacy requirements.', 'nolan-showcase-theme-09' ); ?></p>
			</article>
		</div>
	</section>

	<section class="section-dark final-band" id="contact">
		<div class="container final-band__inner">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Start here', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Bring the site problem, growth target, or launch plan.', 'nolan-showcase-theme-09' ); ?></h2>
				<p><?php esc_html_e( 'We will turn it into a practical technical brief with scope, risks, deliverables, timeline, and support recommendations.', 'nolan-showcase-theme-09' ); ?></p>
			</div>
			<?php echo wp_kses_post( nst09_button( 'Start a project brief', home_url( '/contact/' ) ) ); ?>
		</div>
	</section>
</main>
<?php
get_footer();
