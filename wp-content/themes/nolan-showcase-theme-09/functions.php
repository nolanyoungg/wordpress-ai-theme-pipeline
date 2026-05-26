<?php
/**
 * Theme functions for Nolan Showcase Theme 09.
 *
 * @package Nolan_Showcase_Theme_09
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NST09_VERSION', '1.0.0' );

function nst09_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-09', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 260,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'nolan-showcase-theme-09' ),
			'footer'  => esc_html__( 'Footer Menu', 'nolan-showcase-theme-09' ),
		)
	);
}
add_action( 'after_setup_theme', 'nst09_setup' );

function nst09_assets() {
	wp_enqueue_style( 'nst09-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), NST09_VERSION );
	wp_enqueue_script( 'nst09-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), NST09_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'nst09_assets' );

function nst09_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Proof Column', 'nolan-showcase-theme-09' ),
			'id'            => 'footer-proof',
			'description'   => esc_html__( 'Optional footer proof points, contact notes, or service links.', 'nolan-showcase-theme-09' ),
			'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="footer-widget__title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nst09_widgets_init' );

function nst09_asset_uri( $path ) {
	return esc_url( get_template_directory_uri() . '/' . ltrim( $path, '/' ) );
}

function nst09_button( $label, $url = '#contact', $style = 'primary' ) {
	$class = 'button button--' . sanitize_html_class( $style );
	return '<a class="' . esc_attr( $class ) . '" href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a>';
}

function nst09_render_page_hero( $eyebrow, $title, $copy, $meta = array() ) {
	?>
	<section class="page-hero section-dark">
		<div class="container page-hero__grid">
			<div>
				<p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
				<h1><?php echo esc_html( $title ); ?></h1>
				<p class="lede"><?php echo esc_html( $copy ); ?></p>
				<div class="button-row">
					<?php echo wp_kses_post( nst09_button( 'Book a technical consult' ) ); ?>
					<?php echo wp_kses_post( nst09_button( 'Review the process', '#process', 'secondary' ) ); ?>
				</div>
			</div>
			<aside class="signal-panel" aria-label="<?php echo esc_attr__( 'Engagement snapshot', 'nolan-showcase-theme-09' ); ?>">
				<?php foreach ( $meta as $item ) : ?>
					<div>
						<span><?php echo esc_html( $item['label'] ); ?></span>
						<strong><?php echo esc_html( $item['value'] ); ?></strong>
					</div>
				<?php endforeach; ?>
			</aside>
		</div>
	</section>
	<?php
}

function nst09_service_data( $key ) {
	$services = array(
		'wordpress' => array(
			'eyebrow'        => 'WordPress development',
			'title'          => 'WordPress builds that are easy to own, fast to update, and stable under pressure.',
			'intro'          => 'Civic Pixel Works designs and develops classic and hybrid WordPress sites for service businesses, publishers, consultants, and commerce teams that need practical control without fragile page-builder sprawl.',
			'overview_label' => 'Scope',
			'overview_title' => 'Custom WordPress delivery for real operating teams',
			'overview_copy'  => 'Every build starts with content structure, editor permissions, hosting realities, plugin risk, performance budgets, and the handoff your team needs after launch.',
			'meta'           => array(
				array( 'label' => 'Best for', 'value' => 'Marketing sites, resource hubs, portals' ),
				array( 'label' => 'Includes', 'value' => 'Theme, plugins, migration, QA' ),
				array( 'label' => 'Support', 'value' => 'Launch and maintenance options' ),
			),
			'cards'          => array(
				array( 'index' => '01', 'title' => 'Custom themes', 'copy' => 'Classic WordPress theme architecture with clean templates, accessible components, reusable content sections, and block/editor compatibility where it helps editors move faster.' ),
				array( 'index' => '02', 'title' => 'Plugin integration', 'copy' => 'Forms, memberships, CRMs, search, multilingual tools, and workflow plugins are evaluated for performance, update cadence, security posture, and long-term fit.' ),
				array( 'index' => '03', 'title' => 'Performance and security', 'copy' => 'PageSpeed issues, Core Web Vitals, caching, image weight, permissions, update routines, backups, and hosting configuration are handled before launch.' ),
			),
			'checks'         => array( 'Information architecture and content model', 'Classic theme support and editor compatibility', 'Plugin audit and integration plan', 'Hosting migration and DNS coordination', 'Performance budget, accessibility QA, and launch checklist' ),
			'deliverables'   => array( 'Technical audit notes', 'Custom theme files', 'Configured plugins', 'Migration plan', 'Editor handoff notes', 'Post-launch QA report' ),
			'cta_title'      => 'Build a WordPress site your team can maintain.',
			'cta_copy'       => 'Start with a technical consult and receive a practical roadmap for build scope, migration risk, launch sequencing, and ongoing care.',
			'cta_button'     => 'Plan my WordPress build',
		),
		'shopify' => array(
			'eyebrow'        => 'Shopify development',
			'title'          => 'Shopify and Shopify Plus storefronts engineered for cleaner buying paths.',
			'intro'          => 'We design and customize Shopify storefronts for growing catalogs, subscription offers, wholesale flows, and teams that need app integrations without losing speed or editorial control.',
			'overview_label' => 'Commerce focus',
			'overview_title' => 'Storefront work tied to product discovery and conversion',
			'overview_copy'  => 'The work connects design, merchandising, product templates, collection logic, cart behavior, checkout strategy, tracking, and operational handoff.',
			'meta'           => array(
				array( 'label' => 'Platforms', 'value' => 'Shopify and Shopify Plus' ),
				array( 'label' => 'Focus', 'value' => 'PDP, collection, cart, checkout' ),
				array( 'label' => 'Output', 'value' => 'Theme updates and measurement' ),
			),
			'cards'          => array(
				array( 'index' => '01', 'title' => 'Storefront builds', 'copy' => 'Custom Shopify theme customization, section design, product page optimization, collection page strategy, and campaign landing pages that stay editable.' ),
				array( 'index' => '02', 'title' => 'Checkout strategy', 'copy' => 'Cart improvements, discount messaging, payment method clarity, shipping expectation design, and Shopify Plus checkout planning where available.' ),
				array( 'index' => '03', 'title' => 'Apps and analytics', 'copy' => 'App integration, event tracking, GA4, pixels, product feed concerns, and reporting cleanup are handled with clear ownership and validation steps.' ),
			),
			'checks'         => array( 'Theme health and app conflict review', 'Product page and collection page conversion notes', 'Cart and checkout friction audit', 'Tracking and analytics validation', 'Launch plan with rollback notes' ),
			'deliverables'   => array( 'Storefront audit', 'Theme customizations', 'PDP and collection components', 'Cart recommendations', 'Tracking map', 'QA checklist' ),
			'cta_title'      => 'Make the buying path easier to trust.',
			'cta_copy'       => 'Bring a storefront issue, app stack, or growth plan and we will map the shortest practical path to a cleaner Shopify experience.',
			'cta_button'     => 'Improve my Shopify store',
		),
		'woocommerce' => array(
			'eyebrow'        => 'WooCommerce',
			'title'          => 'WooCommerce stores with stable product architecture and less checkout friction.',
			'intro'          => 'We build and repair WooCommerce stores where product data, shipping, tax, inventory, email, subscriptions, and integrations need to work together reliably.',
			'overview_label' => 'Store operations',
			'overview_title' => 'Commerce implementation with operational details included',
			'overview_copy'  => 'WooCommerce succeeds when the catalog, checkout, payment gateways, fulfillment rules, reporting, and maintenance plan are designed as one system.',
			'meta'           => array(
				array( 'label' => 'Catalogs', 'value' => 'Simple, variable, bundled products' ),
				array( 'label' => 'Ops', 'value' => 'Tax, shipping, inventory, email' ),
				array( 'label' => 'Health', 'value' => 'Speed, reporting, updates' ),
			),
			'cards'          => array(
				array( 'index' => '01', 'title' => 'Store builds', 'copy' => 'Product architecture, templates, category flows, product variation handling, account pages, and checkout improvements for practical buying journeys.' ),
				array( 'index' => '02', 'title' => 'Operations setup', 'copy' => 'Shipping zones, tax configuration, email template improvements, inventory workflows, API integrations, and payment gateway coordination.' ),
				array( 'index' => '03', 'title' => 'Speed and reporting', 'copy' => 'Caching, asset weight, database health, conversion tracking, e-commerce events, and reporting dashboards are validated before launch.' ),
			),
			'checks'         => array( 'Catalog and variation audit', 'Checkout, payment, shipping, and tax review', 'Email and notification testing', 'Inventory and API integration validation', 'Speed, analytics, and reporting QA' ),
			'deliverables'   => array( 'Product model', 'Checkout plan', 'Configured store settings', 'Email templates', 'Integration notes', 'Analytics report' ),
			'cta_title'      => 'Turn WooCommerce into a store your team can operate.',
			'cta_copy'       => 'We will identify where revenue, operations, or maintenance risk is hiding and define the right repair or rebuild path.',
			'cta_button'     => 'Audit my WooCommerce store',
		),
		'maintenance' => array(
			'eyebrow'        => 'Website maintenance',
			'title'          => 'Maintenance that protects revenue pages instead of just running updates.',
			'intro'          => 'Our care plans cover updates, backups, security checks, plugin testing, uptime monitoring, layout fixes, content updates, monthly reporting, and emergency support positioning.',
			'overview_label' => 'Ongoing care',
			'overview_title' => 'A practical operating layer for WordPress and Shopify sites',
			'overview_copy'  => 'Maintenance is treated as risk management: keep the site patched, visible, fast enough, measurable, and ready for small business changes without chaotic emergency work.',
			'meta'           => array(
				array( 'label' => 'Cadence', 'value' => 'Monthly or priority support' ),
				array( 'label' => 'Coverage', 'value' => 'Updates, QA, reports, fixes' ),
				array( 'label' => 'Not included', 'value' => 'Unplanned rebuilds or hosting bills' ),
			),
			'cards'          => array(
				array( 'index' => '01', 'title' => 'Plan cards', 'copy' => 'Essential care covers updates and monitoring; Growth care adds content support; Priority care adds faster response windows and deeper reporting.' ),
				array( 'index' => '02', 'title' => 'Included work', 'copy' => 'Backups, security checks, plugin testing, uptime checks, broken layout fixes, content updates, analytics checks, and monthly summaries.' ),
				array( 'index' => '03', 'title' => 'Clear boundaries', 'copy' => 'New features, full redesigns, paid app fees, hosting invoices, legal policy writing, and unmanaged third-party systems are scoped separately.' ),
			),
			'checks'         => array( 'Update testing before production changes', 'Backup and rollback confirmation', 'Uptime and form delivery monitoring', 'Broken layout and content fix queue', 'Monthly report with risks, changes, and recommendations' ),
			'deliverables'   => array( 'Maintenance calendar', 'Update log', 'Backup confirmation', 'Security notes', 'Content request queue', 'Monthly report' ),
			'cta_title'      => 'Keep the site healthy between redesigns.',
			'cta_copy'       => 'Choose a maintenance plan that matches the site’s business value, update risk, and need for timely content support.',
			'cta_button'     => 'Compare care options',
		),
		'rescue' => array(
			'eyebrow'        => 'Website rescue',
			'title'          => 'Emergency diagnostics for broken, slow, unstable, or misconfigured websites.',
			'intro'          => 'We stabilize websites with plugin conflicts, checkout issues, tracking failures, mobile layout problems, forms not sending, hosting problems, DNS mistakes, and messy migrations.',
			'overview_label' => 'Diagnostic process',
			'overview_title' => 'Stabilize first, repair the cause, then improve the system',
			'overview_copy'  => 'Rescue work starts with containment and evidence. We avoid blind changes, document the failure path, and leave the client with cleaner operating notes.',
			'meta'           => array(
				array( 'label' => 'First move', 'value' => 'Backup, access, symptoms' ),
				array( 'label' => 'Focus', 'value' => 'Revenue, leads, uptime' ),
				array( 'label' => 'Output', 'value' => 'Fix log and next actions' ),
			),
			'cards'          => array(
				array( 'index' => '01', 'title' => 'What we check first', 'copy' => 'Recent changes, hosting logs, DNS, SSL, plugin conflicts, theme errors, payment status, forms, tracking tags, cache layers, and mobile breakpoints.' ),
				array( 'index' => '02', 'title' => 'Common emergencies', 'copy' => 'Broken websites, slow pages, checkout failures, missing tracking, forms not sending, migration issues, blank screens, and admin lockouts.' ),
				array( 'index' => '03', 'title' => 'Repair workflow', 'copy' => 'We stabilize the site, isolate the cause, repair the failure, test the business-critical paths, and recommend improvements that reduce repeat incidents.' ),
			),
			'checks'         => array( 'Emergency intake and access confirmation', 'Backup or restore point before repair', 'Plugin, theme, hosting, DNS, forms, and checkout diagnostics', 'Stabilize, repair, improve workflow', 'Post-incident report with prevention notes' ),
			'deliverables'   => array( 'Diagnostic log', 'Risk notes', 'Repair commits or settings log', 'Critical path QA', 'Prevention plan', 'Maintenance recommendation' ),
			'cta_title'      => 'Get a calm diagnostic path for a site problem.',
			'cta_copy'       => 'Share the symptoms, recent changes, and access constraints so we can triage the issue without making the situation worse.',
			'cta_button'     => 'Start rescue intake',
		),
		'ai' => array(
			'eyebrow'        => 'AI website integration',
			'title'          => 'AI website assistants with clear use cases, guardrails, and human handoff.',
			'intro'          => 'We plan and implement AI chatbots, AI-powered FAQs, lead qualification, workflow automation, CRM handoff, support deflection, and website assistant experiences without hiding the operational limits.',
			'overview_label' => 'Responsible automation',
			'overview_title' => 'Useful AI starts with content accuracy and escalation design',
			'overview_copy'  => 'The goal is not novelty. The goal is fewer repetitive questions, better intake, faster internal routing, and clear moments where a human should take over.',
			'meta'           => array(
				array( 'label' => 'Use cases', 'value' => 'FAQ, intake, routing, support' ),
				array( 'label' => 'Guardrails', 'value' => 'Approved content and escalation' ),
				array( 'label' => 'Handoff', 'value' => 'CRM and team workflows' ),
			),
			'cards'          => array(
				array( 'index' => '01', 'title' => 'Website assistants', 'copy' => 'AI chatbots, guided FAQs, service recommenders, lead qualification, support deflection, and internal workflow automation are mapped to real visitor tasks.' ),
				array( 'index' => '02', 'title' => 'Accuracy guardrails', 'copy' => 'Approved source content, prohibited claims, confidence language, escalation triggers, logging, and review cycles are defined before launch.' ),
				array( 'index' => '03', 'title' => 'CRM handoff', 'copy' => 'Qualified leads, support cases, internal alerts, and follow-up workflows are routed into the tools your team already uses where possible.' ),
			),
			'checks'         => array( 'AI integration planning checklist', 'Source content and answer policy', 'Lead qualification and CRM handoff workflow', 'Human escalation paths', 'Analytics review for usage and deflection quality' ),
			'deliverables'   => array( 'Use-case map', 'Content source plan', 'Assistant flow', 'Escalation rules', 'CRM handoff notes', 'Review dashboard' ),
			'cta_title'      => 'Add AI where it reduces friction, not trust.',
			'cta_copy'       => 'We will identify the website moments where AI can help visitors and staff while keeping accuracy, privacy, and escalation visible.',
			'cta_button'     => 'Plan an AI integration',
		),
		'analytics' => array(
			'eyebrow'        => 'Analytics and performance',
			'title'          => 'Measurement and speed work that tells you what is actually happening.',
			'intro'          => 'We clean up GA4, Google Tag Manager, conversion tracking, call tracking, e-commerce events, PageSpeed, Core Web Vitals, reporting dashboards, and measurement plans.',
			'overview_label' => 'Measurement system',
			'overview_title' => 'Connect performance health with conversion evidence',
			'overview_copy'  => 'Analytics and performance belong together because slow pages, broken tags, and unclear reports all distort the decisions owners make about marketing and operations.',
			'meta'           => array(
				array( 'label' => 'Tracking', 'value' => 'GA4, GTM, calls, events' ),
				array( 'label' => 'Speed', 'value' => 'PageSpeed and Core Web Vitals' ),
				array( 'label' => 'Output', 'value' => 'Dashboard and validation notes' ),
			),
			'cards'          => array(
				array( 'index' => '01', 'title' => 'Tracking cleanup', 'copy' => 'GA4 and Google Tag Manager containers are reviewed for duplicate tags, missing conversions, bad event names, and unvalidated form or call tracking.' ),
				array( 'index' => '02', 'title' => 'E-commerce events', 'copy' => 'View item, add to cart, begin checkout, purchase, lead, phone, and form events are mapped against the business questions the team needs answered.' ),
				array( 'index' => '03', 'title' => 'Performance improvement', 'copy' => 'PageSpeed, Core Web Vitals, render-blocking assets, image delivery, app/plugin weight, cache behavior, and template bottlenecks are prioritized by impact.' ),
			),
			'checks'         => array( 'Measurement plan and conversion definitions', 'GA4 and GTM configuration review', 'Event validation for leads, calls, and e-commerce', 'PageSpeed and Core Web Vitals audit', 'Reporting dashboard with cleanup recommendations' ),
			'deliverables'   => array( 'Measurement plan', 'Tag audit', 'Validated events', 'Performance report', 'Dashboard spec', 'Cleanup backlog' ),
			'cta_title'      => 'Fix the numbers before you scale spend.',
			'cta_copy'       => 'We will identify tracking gaps, speed issues, and reporting blind spots so the next site or campaign decision has evidence behind it.',
			'cta_button'     => 'Clean up measurement',
		),
	);

	return isset( $services[ $key ] ) ? $services[ $key ] : $services['wordpress'];
}

function nst09_render_service_page( $data ) {
	get_header();
	nst09_render_page_hero( $data['eyebrow'], $data['title'], $data['intro'], $data['meta'] );
	?>
	<main id="primary" class="site-main">
		<section class="section-light">
			<div class="container split">
				<div>
					<p class="eyebrow"><?php echo esc_html( $data['overview_label'] ); ?></p>
					<h2><?php echo esc_html( $data['overview_title'] ); ?></h2>
				</div>
				<p class="section-copy"><?php echo esc_html( $data['overview_copy'] ); ?></p>
			</div>
			<div class="container card-grid card-grid--three">
				<?php foreach ( $data['cards'] as $card ) : ?>
					<article class="layer-card">
						<span class="card-index"><?php echo esc_html( $card['index'] ); ?></span>
						<h3><?php echo esc_html( $card['title'] ); ?></h3>
						<p><?php echo esc_html( $card['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
		<section class="section-dark" id="process">
			<div class="container split">
				<div>
					<p class="eyebrow"><?php echo esc_html( $data['checklist_label'] ?? 'Audit points' ); ?></p>
					<h2><?php echo esc_html( $data['checklist_title'] ?? 'What we verify before recommendations become work' ); ?></h2>
				</div>
				<ul class="check-list">
					<?php foreach ( $data['checks'] as $check ) : ?>
						<li><?php echo esc_html( $check ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		<section class="section-accent">
			<div class="container">
				<p class="eyebrow"><?php esc_html_e( 'Client deliverables', 'nolan-showcase-theme-09' ); ?></p>
				<div class="deliverable-grid">
					<?php foreach ( $data['deliverables'] as $deliverable ) : ?>
						<div class="deliverable"><?php echo esc_html( $deliverable ); ?></div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<section class="section-light final-band" id="contact">
			<div class="container final-band__inner">
				<div>
					<p class="eyebrow"><?php esc_html_e( 'Next step', 'nolan-showcase-theme-09' ); ?></p>
					<h2><?php echo esc_html( $data['cta_title'] ); ?></h2>
					<p><?php echo esc_html( $data['cta_copy'] ); ?></p>
				</div>
				<?php echo wp_kses_post( nst09_button( $data['cta_button'], home_url( '/contact/' ) ) ); ?>
			</div>
		</section>
	</main>
	<?php
	get_footer();
}

function nst09_render_post_summary() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<h2><?php echo esc_html( get_the_title() ); ?></h2>
		</a>
		<div class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></div>
		<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
	</article>
	<?php
}
