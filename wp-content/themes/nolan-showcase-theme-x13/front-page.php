<?php
/**
 * Purpose: Custom homepage for the premium WordPress agency concept.
 * WordPress role: Front page template when a static front page is assigned.
 * Related files: header.php, footer.php, functions.php, assets/css/theme.css.
 * Important behavior: Uses original business-focused content and local theme assets.
 *
 * @package Nolan_Showcase_Theme_X13
 */

get_header();
$services = nstx13_get_services();
?>
<main id="primary" class="site-main">
	<section class="hero agency-hero">
		<div class="hero-copy">
			<p class="eyebrow"><?php esc_html_e( 'Premium WordPress agency partner', 'nolan-showcase-theme-x13' ); ?></p>
			<h1><?php esc_html_e( 'A WordPress website partner for sharper launches, steadier support, and smarter growth.', 'nolan-showcase-theme-x13' ); ?></h1>
			<p><?php esc_html_e( 'NolanWP helps business owners plan, build, maintain, improve, and automate WordPress websites without burying the work in technical fog.', 'nolan-showcase-theme-x13' ); ?></p>
			<div class="hero-actions">
				<a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'nolan-showcase-theme-x13' ); ?></a>
				<a class="button button-secondary" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'View Services', 'nolan-showcase-theme-x13' ); ?></a>
			</div>
		</div>
		<div class="hero-panel" aria-label="<?php esc_attr_e( 'Agency service dashboard illustration', 'nolan-showcase-theme-x13' ); ?>">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/agency-dashboard.svg' ); ?>" alt="" />
		</div>
	</section>
	<section class="stats-band" aria-label="<?php esc_attr_e( 'Agency trust statistics', 'nolan-showcase-theme-x13' ); ?>">
		<?php
		$stats = array( '500+ websites supported', '15+ industries served', '99.9% uptime-focused support', '10+ years combined WordPress experience' );
		foreach ( $stats as $stat ) :
			?>
			<div><strong><?php echo esc_html( strtok( $stat, ' ' ) ); ?></strong><span><?php echo esc_html( trim( substr( $stat, strlen( strtok( $stat, ' ' ) ) ) ) ); ?></span></div>
		<?php endforeach; ?>
	</section>
	<section class="section">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'What we handle', 'nolan-showcase-theme-x13' ); ?></p>
			<h2><?php esc_html_e( 'One team for the website work that keeps showing up.', 'nolan-showcase-theme-x13' ); ?></h2>
		</div>
		<div class="card-grid">
			<?php foreach ( $services as $service ) : ?>
				<article class="service-card">
					<h3><?php echo esc_html( $service['title'] ); ?></h3>
					<p><?php echo esc_html( $service['text'] ); ?></p>
					<a href="<?php echo esc_url( $service['url'] ); ?>"><?php esc_html_e( 'Explore service', 'nolan-showcase-theme-x13' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
	<section class="split-section">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'WordPress expertise', 'nolan-showcase-theme-x13' ); ?></p>
			<h2><?php esc_html_e( 'Built for real operations, not just pretty screenshots.', 'nolan-showcase-theme-x13' ); ?></h2>
			<p><?php esc_html_e( 'We think through editing flows, plugin behavior, performance budgets, conversion paths, tracking, support handoff, and what your team needs after launch.', 'nolan-showcase-theme-x13' ); ?></p>
		</div>
		<ul class="check-list">
			<li><?php esc_html_e( 'Classic WordPress theme architecture', 'nolan-showcase-theme-x13' ); ?></li>
			<li><?php esc_html_e( 'Practical WooCommerce and lead generation flows', 'nolan-showcase-theme-x13' ); ?></li>
			<li><?php esc_html_e( 'Analytics, SEO foundations, and speed improvements', 'nolan-showcase-theme-x13' ); ?></li>
			<li><?php esc_html_e( 'AI chatbot and website automation planning', 'nolan-showcase-theme-x13' ); ?></li>
		</ul>
	</section>
	<section class="section muted">
		<div class="section-heading"><p class="eyebrow"><?php esc_html_e( 'Process', 'nolan-showcase-theme-x13' ); ?></p><h2><?php esc_html_e( 'A clear path from messy needs to a managed website.', 'nolan-showcase-theme-x13' ); ?></h2></div>
		<div class="process-grid">
			<?php foreach ( array( 'Discover the business goal', 'Map the website plan', 'Design and build with review points', 'Launch, measure, support, and improve' ) as $index => $step ) : ?>
				<article><span><?php echo esc_html( '0' . ( $index + 1 ) ); ?></span><h3><?php echo esc_html( $step ); ?></h3><p><?php esc_html_e( 'Each stage has plain-language decisions, visible progress, and practical next steps.', 'nolan-showcase-theme-x13' ); ?></p></article>
			<?php endforeach; ?>
		</div>
	</section>
	<section class="section">
		<div class="section-heading"><p class="eyebrow"><?php esc_html_e( 'Selected work', 'nolan-showcase-theme-x13' ); ?></p><h2><?php esc_html_e( 'Project patterns we solve often.', 'nolan-showcase-theme-x13' ); ?></h2></div>
		<div class="portfolio-grid">
			<article><h3><?php esc_html_e( 'Regional service company', 'nolan-showcase-theme-x13' ); ?></h3><p><?php esc_html_e( 'New quote flow, faster service pages, cleaner tracking, and a care plan for weekly content updates.', 'nolan-showcase-theme-x13' ); ?></p></article>
			<article><h3><?php esc_html_e( 'Specialty ecommerce brand', 'nolan-showcase-theme-x13' ); ?></h3><p><?php esc_html_e( 'WooCommerce checkout review, product page polish, analytics events, and performance cleanup.', 'nolan-showcase-theme-x13' ); ?></p></article>
			<article><h3><?php esc_html_e( 'Professional services firm', 'nolan-showcase-theme-x13' ); ?></h3><p><?php esc_html_e( 'Authority-focused redesign with clearer service hierarchy, resources, and lead routing.', 'nolan-showcase-theme-x13' ); ?></p></article>
		</div>
	</section>
	<section class="split-section dark">
		<div><p class="eyebrow"><?php esc_html_e( 'Support and AI', 'nolan-showcase-theme-x13' ); ?></p><h2><?php esc_html_e( 'Maintenance plans that keep websites dependable, plus AI tools that reduce busywork.', 'nolan-showcase-theme-x13' ); ?></h2></div>
		<div><p><?php esc_html_e( 'From emergency fixes to chatbot intake, content automation, tracking cleanup, and performance reviews, we help your site stay useful after launch.', 'nolan-showcase-theme-x13' ); ?></p><a class="button button-light" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Compare Services', 'nolan-showcase-theme-x13' ); ?></a></div>
	</section>
	<section class="section">
		<div class="testimonial"><blockquote><?php esc_html_e( 'NolanWP translated a messy wish list into a site our team can actually manage. The work felt organized, direct, and grounded in business outcomes.', 'nolan-showcase-theme-x13' ); ?></blockquote><cite><?php esc_html_e( 'Fictional client, operations director', 'nolan-showcase-theme-x13' ); ?></cite></div>
	</section>
	<section class="section faq">
		<div class="section-heading"><p class="eyebrow"><?php esc_html_e( 'FAQ', 'nolan-showcase-theme-x13' ); ?></p><h2><?php esc_html_e( 'Common questions before a quote.', 'nolan-showcase-theme-x13' ); ?></h2></div>
		<details><summary><?php esc_html_e( 'Can you work on an existing WordPress site?', 'nolan-showcase-theme-x13' ); ?></summary><p><?php esc_html_e( 'Yes. We can improve, repair, maintain, redesign, or rebuild depending on what the current site needs.', 'nolan-showcase-theme-x13' ); ?></p></details>
		<details><summary><?php esc_html_e( 'Do you help after launch?', 'nolan-showcase-theme-x13' ); ?></summary><p><?php esc_html_e( 'Yes. Support and maintenance are core services, including updates, monitoring, content help, and ongoing improvements.', 'nolan-showcase-theme-x13' ); ?></p></details>
		<details><summary><?php esc_html_e( 'Can you connect forms, analytics, and automation?', 'nolan-showcase-theme-x13' ); ?></summary><p><?php esc_html_e( 'Yes. We plan clean tracking, form routing, CRM handoffs, chatbot intake, and practical AI automation workflows.', 'nolan-showcase-theme-x13' ); ?></p></details>
	</section>
	<section class="final-cta"><h2><?php esc_html_e( 'Ready for a WordPress partner who can explain the work and own the details?', 'nolan-showcase-theme-x13' ); ?></h2><a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'nolan-showcase-theme-x13' ); ?></a></section>
</main>
<?php get_footer(); ?>
