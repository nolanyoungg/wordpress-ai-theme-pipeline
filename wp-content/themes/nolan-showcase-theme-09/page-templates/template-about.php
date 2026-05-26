<?php
/**
 * Template Name: About
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
nst09_render_page_hero(
	'About Civic Pixel Works',
	'A technical agency built for business owners who need clear website decisions.',
	'Civic Pixel Works exists to make premium website work less mysterious: tighter scopes, cleaner code, better measurement, calmer launches, and practical support after the invoice is paid.',
	array(
		array( 'label' => 'Positioning', 'value' => 'Build, repair, maintain, optimize' ),
		array( 'label' => 'Platforms', 'value' => 'WordPress, WooCommerce, Shopify' ),
		array( 'label' => 'Standard', 'value' => 'Evidence before opinions' ),
	)
);
?>
<main id="primary" class="site-main">
	<section class="section-light">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Why we exist', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'Many businesses outgrow casual website support before they are ready for an enterprise agency.', 'nolan-showcase-theme-09' ); ?></h2>
			</div>
			<p class="section-copy"><?php esc_html_e( 'We fill that gap with senior technical judgment, platform-specific implementation, maintenance discipline, and communication that respects the owner’s need to understand cost, risk, priority, and impact.', 'nolan-showcase-theme-09' ); ?></p>
		</div>
		<div class="container card-grid card-grid--three">
			<?php
			$principles = array(
				array( 'title' => 'Operating principles', 'copy' => 'Define the business outcome, audit the existing system, document risks, make reversible changes where possible, and test critical paths before launch.' ),
				array( 'title' => 'Technical standards', 'copy' => 'Accessible markup, secure output escaping, local assets, responsible plugin and app selection, performance budgets, versioned changes, and clear rollback notes.' ),
				array( 'title' => 'Communication philosophy', 'copy' => 'Clients receive plain-language findings, scope boundaries, decision points, QA notes, and next recommendations without hiding behind vague technical language.' ),
			);
			foreach ( $principles as $index => $principle ) :
				?>
				<article class="layer-card">
					<span class="card-index"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
					<h3><?php echo esc_html( $principle['title'] ); ?></h3>
					<p><?php echo esc_html( $principle['copy'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
	<section class="section-dark" id="process">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Quality checklist', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'The work is not done until ownership is clear.', 'nolan-showcase-theme-09' ); ?></h2>
			</div>
			<ul class="check-list">
				<li><?php esc_html_e( 'Business-critical pages, forms, checkout, tracking, and mobile layouts are tested.', 'nolan-showcase-theme-09' ); ?></li>
				<li><?php esc_html_e( 'Editors know what they can safely change and what should remain managed by a developer.', 'nolan-showcase-theme-09' ); ?></li>
				<li><?php esc_html_e( 'Maintenance, measurement, and performance risks are documented after launch.', 'nolan-showcase-theme-09' ); ?></li>
				<li><?php esc_html_e( 'Client responsibilities such as content, DNS access, app approvals, and account ownership are confirmed early.', 'nolan-showcase-theme-09' ); ?></li>
			</ul>
		</div>
	</section>
	<section class="section-light">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Team model', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'A focused team-style bench without invented names.', 'nolan-showcase-theme-09' ); ?></h2>
			</div>
			<p class="section-copy"><?php esc_html_e( 'Engagements are structured around senior web strategy, WordPress and Shopify development, QA, analytics, performance review, and maintenance operations. The right specialist role is brought into the scope when the work requires it.', 'nolan-showcase-theme-09' ); ?></p>
		</div>
	</section>
	<section class="section-dark final-band" id="contact">
		<div class="container final-band__inner">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Fit check', 'nolan-showcase-theme-09' ); ?></p>
				<h2><?php esc_html_e( 'If the site affects leads, orders, support, or trust, it deserves accountable ownership.', 'nolan-showcase-theme-09' ); ?></h2>
				<p><?php esc_html_e( 'Bring your business goal and current website constraints. We will tell you what needs audit, repair, rebuild, or maintenance first.', 'nolan-showcase-theme-09' ); ?></p>
			</div>
			<?php echo wp_kses_post( nst09_button( 'Start the fit check', home_url( '/contact/' ) ) ); ?>
		</div>
	</section>
</main>
<?php
get_footer();
