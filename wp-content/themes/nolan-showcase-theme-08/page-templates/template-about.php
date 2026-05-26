<?php
/**
 * Template Name: About
 *
 * @package Nolan_Showcase_Theme_08
 */

get_header();
nst08_render_page_hero(
	'About Northstar',
	'A senior website operations partner for teams that need calm technical judgment.',
	'Northstar Web Bureau exists for businesses whose websites have become too important to be handled as disposable campaigns. The agency combines careful discovery, maintainable development, measured launch work, and clear communication.',
	array(
		array( 'label' => 'Positioning', 'value' => 'Premium technical agency' ),
		array( 'label' => 'Standard', 'value' => 'Documented decisions' ),
		array( 'label' => 'Promise', 'value' => 'Clear next steps' ),
	)
);
?>
<main id="primary" class="site-main">
	<section class="section-light">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Why the agency exists', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Most website problems are not just design problems.', 'nolan-showcase-theme-08' ); ?></h2>
			</div>
			<p class="section-copy"><?php esc_html_e( 'Northstar was shaped around the practical reality that business websites carry publishing workflows, checkout logic, analytics, security exposure, support requests, hosting constraints, and internal team habits. The work is to make those systems easier to trust.', 'nolan-showcase-theme-08' ); ?></p>
		</div>
	</section>
	<section class="section-dark">
		<div class="container card-grid card-grid--three">
			<?php
			$principles = array(
				array( 'Operating principle', 'Prefer clear architecture, fewer dependencies, documented tradeoffs, and implementation paths that a future maintainer can understand.' ),
				array( 'Technical standard', 'Use semantic templates, accessible interaction patterns, secure escaping, responsive CSS, version-aware integrations, and QA checklists.' ),
				array( 'Communication philosophy', 'Clients get plain-English notes, risk levels, expected impact, dependencies, and what needs a decision before work continues.' ),
			);
			foreach ( $principles as $index => $principle ) :
				?>
				<article class="layer-card">
					<span class="card-index"><?php echo esc_html( '0' . ( $index + 1 ) ); ?></span>
					<h3><?php echo esc_html( $principle[0] ); ?></h3>
					<p><?php echo esc_html( $principle[1] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
	<section class="section-light">
		<div class="container split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Quality checklist', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'The team model is capability-based, not personality-based.', 'nolan-showcase-theme-08' ); ?></h2>
			</div>
			<ul class="check-list check-list--light">
				<li><?php esc_html_e( 'Strategy lead for scope, priorities, and business context.', 'nolan-showcase-theme-08' ); ?></li>
				<li><?php esc_html_e( 'Design systems lead for hierarchy, responsive behavior, and accessible UI patterns.', 'nolan-showcase-theme-08' ); ?></li>
				<li><?php esc_html_e( 'WordPress and Shopify developer for templates, integrations, performance, and launch QA.', 'nolan-showcase-theme-08' ); ?></li>
				<li><?php esc_html_e( 'Analytics and operations specialist for measurement plans, reporting, support workflows, and maintenance cadence.', 'nolan-showcase-theme-08' ); ?></li>
			</ul>
		</div>
	</section>
	<section class="section-dark final-band">
		<div class="container final-band__inner">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'CTA', 'nolan-showcase-theme-08' ); ?></p>
				<h2><?php esc_html_e( 'Work with a team that treats the website as an operating system.', 'nolan-showcase-theme-08' ); ?></h2>
				<p><?php esc_html_e( 'Start with an audit, a rescue plan, a build scope, or an ongoing management conversation.', 'nolan-showcase-theme-08' ); ?></p>
			</div>
			<?php echo wp_kses_post( nst08_button( 'Discuss the website' ) ); ?>
		</div>
	</section>
</main>
<?php
get_footer();
