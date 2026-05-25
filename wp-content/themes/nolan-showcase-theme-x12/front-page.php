<?php
/**
 * Front page template.
 *
 * Provides the business-focused homepage for the classic theme and connects to
 * the global header/footer templates. Assumes services are page concepts rather
 * than hard dependencies on custom post types or external integrations.
 *
 * @package Nolan_Showcase_Theme_X12
 */

get_header();
?>
<section class="hero section">
	<div class="container hero-grid">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'Premium WordPress systems for busy business owners', 'nolan-showcase-theme-x12' ); ?></p>
			<h1><?php esc_html_e( 'Websites that look sharp, load fast, and keep working after launch.', 'nolan-showcase-theme-x12' ); ?></h1>
			<p class="lede"><?php esc_html_e( 'Nolan Digital Studio builds, repairs, maintains, and improves WordPress websites for service businesses, shops, and teams that need dependable digital infrastructure without technical confusion.', 'nolan-showcase-theme-x12' ); ?></p>
			<div class="button-row">
				<a class="button button-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a Project', 'nolan-showcase-theme-x12' ); ?></a>
				<a class="button button-secondary" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'View Services', 'nolan-showcase-theme-x12' ); ?></a>
			</div>
		</div>
		<div class="hero-card">
			<img src="<?php echo esc_url( nolan_showcase_x12_asset_url( 'assets/images/hero-dashboard.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Illustrated website performance and conversion dashboard', 'nolan-showcase-theme-x12' ); ?>" width="720" height="520">
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'What we do', 'nolan-showcase-theme-x12' ); ?></p>
			<h2><?php esc_html_e( 'Practical website services with premium execution.', 'nolan-showcase-theme-x12' ); ?></h2>
		</div>
		<div class="card-grid three">
			<?php
			$services = array(
				array( 'Website Design and Development', 'Custom WordPress builds, redesigns, landing pages, and conversion-focused content structures.' ),
				array( 'Maintenance and Support', 'Updates, backups, monitoring, small changes, and clear monthly care for existing websites.' ),
				array( 'Problem Fixes and Performance', 'Broken layouts, plugin conflicts, speed issues, Core Web Vitals, and checkout problems handled carefully.' ),
				array( 'WooCommerce Improvements', 'Store setup, product flow improvements, checkout cleanup, analytics, and operational integrations.' ),
				array( 'SEO and Analytics Foundations', 'Technical SEO basics, tracking setup, conversion events, reporting hygiene, and search-ready pages.' ),
				array( 'AI Website Features', 'Chatbot setup, content workflows, automation, and integrations offered as business services only.' ),
			);
			foreach ( $services as $service ) :
				?>
				<article class="service-card">
					<h3><?php echo esc_html( $service[0] ); ?></h3>
					<p><?php echo esc_html( $service[1] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section-muted">
	<div class="container split">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'Process', 'nolan-showcase-theme-x12' ); ?></p>
			<h2><?php esc_html_e( 'A clear path from messy website problems to a stronger digital system.', 'nolan-showcase-theme-x12' ); ?></h2>
		</div>
		<ol class="process-list">
			<li><strong><?php esc_html_e( 'Audit', 'nolan-showcase-theme-x12' ); ?></strong><span><?php esc_html_e( 'We review your current site, goals, content, tools, and the work needed to move forward.', 'nolan-showcase-theme-x12' ); ?></span></li>
			<li><strong><?php esc_html_e( 'Plan', 'nolan-showcase-theme-x12' ); ?></strong><span><?php esc_html_e( 'You get a practical scope, priorities, timeline, and recommendations written in plain language.', 'nolan-showcase-theme-x12' ); ?></span></li>
			<li><strong><?php esc_html_e( 'Build', 'nolan-showcase-theme-x12' ); ?></strong><span><?php esc_html_e( 'We design, develop, test, and polish the work with performance and accessibility in mind.', 'nolan-showcase-theme-x12' ); ?></span></li>
			<li><strong><?php esc_html_e( 'Support', 'nolan-showcase-theme-x12' ); ?></strong><span><?php esc_html_e( 'After launch, we can monitor, maintain, improve, and help your website grow with the business.', 'nolan-showcase-theme-x12' ); ?></span></li>
		</ol>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'Selected work', 'nolan-showcase-theme-x12' ); ?></p>
			<h2><?php esc_html_e( 'Projects built around revenue, trust, and easier operations.', 'nolan-showcase-theme-x12' ); ?></h2>
		</div>
		<div class="card-grid three">
			<article class="project-card"><img src="<?php echo esc_url( nolan_showcase_x12_asset_url( 'assets/images/project-commerce.svg' ) ); ?>" alt="" width="520" height="340"><h3><?php esc_html_e( 'Retail store rebuild', 'nolan-showcase-theme-x12' ); ?></h3><p><?php esc_html_e( 'WooCommerce cleanup, faster product browsing, simplified checkout, and analytics events for campaigns.', 'nolan-showcase-theme-x12' ); ?></p></article>
			<article class="project-card"><img src="<?php echo esc_url( nolan_showcase_x12_asset_url( 'assets/images/project-services.svg' ) ); ?>" alt="" width="520" height="340"><h3><?php esc_html_e( 'Local service redesign', 'nolan-showcase-theme-x12' ); ?></h3><p><?php esc_html_e( 'Modern pages, better quote paths, service-area content, and maintenance plan after launch.', 'nolan-showcase-theme-x12' ); ?></p></article>
			<article class="project-card"><img src="<?php echo esc_url( nolan_showcase_x12_asset_url( 'assets/images/project-automation.svg' ) ); ?>" alt="" width="520" height="340"><h3><?php esc_html_e( 'Automation-ready website', 'nolan-showcase-theme-x12' ); ?></h3><p><?php esc_html_e( 'CRM-ready forms, chatbot handoff planning, business workflow routing, and reporting foundations.', 'nolan-showcase-theme-x12' ); ?></p></article>
		</div>
	</div>
</section>

<section class="section section-muted">
	<div class="container card-grid two">
		<blockquote class="quote"><p><?php esc_html_e( 'They translated our scattered website wishlist into a clear plan, fixed the painful issues first, and gave us a site our team can actually use.', 'nolan-showcase-theme-x12' ); ?></p><cite><?php esc_html_e( 'Operations Director, regional services company', 'nolan-showcase-theme-x12' ); ?></cite></blockquote>
		<blockquote class="quote"><p><?php esc_html_e( 'The maintenance plan removed a lot of stress. Updates, speed, tracking, and small improvements are handled before they become emergencies.', 'nolan-showcase-theme-x12' ); ?></p><cite><?php esc_html_e( 'Founder, growing ecommerce brand', 'nolan-showcase-theme-x12' ); ?></cite></blockquote>
	</div>
</section>

<section class="section">
	<div class="container faq">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'FAQ', 'nolan-showcase-theme-x12' ); ?></p>
			<h2><?php esc_html_e( 'Straight answers before we scope the work.', 'nolan-showcase-theme-x12' ); ?></h2>
		</div>
		<details><summary><?php esc_html_e( 'Do you build full WordPress themes?', 'nolan-showcase-theme-x12' ); ?></summary><p><?php esc_html_e( 'Yes. We build classic WordPress themes, redesign existing websites, and improve sites already running on WordPress.', 'nolan-showcase-theme-x12' ); ?></p></details>
		<details><summary><?php esc_html_e( 'Can you fix an existing broken website?', 'nolan-showcase-theme-x12' ); ?></summary><p><?php esc_html_e( 'Yes. We start with an audit so fixes are prioritized by business impact and technical risk.', 'nolan-showcase-theme-x12' ); ?></p></details>
		<details><summary><?php esc_html_e( 'Are AI services real integrations?', 'nolan-showcase-theme-x12' ); ?></summary><p><?php esc_html_e( 'This theme presents AI chatbot and automation services as offerings only. It does not include API keys, paid services, or live AI integrations.', 'nolan-showcase-theme-x12' ); ?></p></details>
	</div>
</section>

<section class="section cta-section">
	<div class="container split">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'Ready to improve your website?', 'nolan-showcase-theme-x12' ); ?></p>
			<h2><?php esc_html_e( 'Tell us what is working, what is not, and where the business needs to go next.', 'nolan-showcase-theme-x12' ); ?></h2>
		</div>
		<a class="button button-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Book a Website Review', 'nolan-showcase-theme-x12' ); ?></a>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'Project intake', 'nolan-showcase-theme-x12' ); ?></p>
			<h2><?php esc_html_e( 'A quote form layout ready for your preferred WordPress form plugin.', 'nolan-showcase-theme-x12' ); ?></h2>
			<p><?php esc_html_e( 'This markup is styled for Gravity Forms, WPForms, Contact Form 7, or a custom handler. Backend processing is intentionally not included.', 'nolan-showcase-theme-x12' ); ?></p>
		</div>
		<form class="quote-form form-card" action="#" method="post">
			<div class="form-grid">
				<p><label for="x12-name"><?php esc_html_e( 'Name', 'nolan-showcase-theme-x12' ); ?></label><input id="x12-name" name="name" autocomplete="name" required></p>
				<p><label for="x12-email"><?php esc_html_e( 'Email', 'nolan-showcase-theme-x12' ); ?></label><input id="x12-email" name="email" type="email" autocomplete="email" required></p>
				<p><label for="x12-phone"><?php esc_html_e( 'Phone', 'nolan-showcase-theme-x12' ); ?></label><input id="x12-phone" name="phone" autocomplete="tel"></p>
				<p><label for="x12-company"><?php esc_html_e( 'Company', 'nolan-showcase-theme-x12' ); ?></label><input id="x12-company" name="company" autocomplete="organization"></p>
				<p><label for="x12-website"><?php esc_html_e( 'Website URL', 'nolan-showcase-theme-x12' ); ?></label><input id="x12-website" name="website" type="url" autocomplete="url"></p>
				<p><label for="x12-service"><?php esc_html_e( 'Service needed', 'nolan-showcase-theme-x12' ); ?></label><select id="x12-service" name="service"><option><?php esc_html_e( 'Website design and development', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( 'Website maintenance', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( 'Website problem fixes', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( 'AI chatbot integration', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( 'AI website automation', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( 'WooCommerce services', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( 'SEO and analytics', 'nolan-showcase-theme-x12' ); ?></option></select></p>
				<p><label for="x12-budget"><?php esc_html_e( 'Project budget', 'nolan-showcase-theme-x12' ); ?></label><select id="x12-budget" name="budget"><option><?php esc_html_e( 'Under $2,500', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( '$2,500-$5,000', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( '$5,000-$10,000', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( '$10,000+', 'nolan-showcase-theme-x12' ); ?></option></select></p>
				<p><label for="x12-timeline"><?php esc_html_e( 'Timeline', 'nolan-showcase-theme-x12' ); ?></label><select id="x12-timeline" name="timeline"><option><?php esc_html_e( 'As soon as practical', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( 'Within 30 days', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( '1-3 months', 'nolan-showcase-theme-x12' ); ?></option><option><?php esc_html_e( 'Planning ahead', 'nolan-showcase-theme-x12' ); ?></option></select></p>
			</div>
			<p><label for="x12-message"><?php esc_html_e( 'Message', 'nolan-showcase-theme-x12' ); ?></label><textarea id="x12-message" name="message" rows="6" required></textarea></p>
			<button class="button button-primary" type="submit"><?php esc_html_e( 'Send Request', 'nolan-showcase-theme-x12' ); ?></button>
		</form>
	</div>
</section>
<?php
get_footer();
