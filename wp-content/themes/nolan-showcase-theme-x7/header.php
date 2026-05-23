<?php
/**
 * Header template.
 *
 * @package Nolan_Showcase_Theme_X7
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-x7' ); ?></a>

<header class="site-header nolan-header" data-nolan-menu>
	<div class="nolan-header__inner">
		<div class="nolan-brand">
			<a class="nolan-brand__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img class="nolan-brand__mark" src="<?php echo nolan_showcase_x7_asset( 'assets/images/logo-mark.svg' ); ?>" alt="" width="28" height="28" loading="eager" decoding="async">
				<span class="nolan-brand__text"><?php echo esc_html__( 'MNY Photo', 'nolan-showcase-theme-x7' ); ?></span>
			</a>
		</div>

		<nav class="nolan-menu" aria-label="<?php esc_attr_e( 'Primary', 'nolan-showcase-theme-x7' ); ?>">
			<div class="nolan-menu__nav" role="menubar" aria-label="<?php esc_attr_e( 'Site navigation', 'nolan-showcase-theme-x7' ); ?>">
				<div class="nolan-menu__item" role="none">
					<button class="nolan-menu__trigger" type="button"
						data-nolan-menu-trigger="what-we-do"
						aria-expanded="false"
						aria-controls="nolan-panel-what-we-do">
						<?php esc_html_e( 'What We Do', 'nolan-showcase-theme-x7' ); ?>
						<span class="nolan-menu__chev" aria-hidden="true"></span>
					</button>
				</div>

				<div class="nolan-menu__item" role="none">
					<button class="nolan-menu__trigger" type="button"
						data-nolan-menu-trigger="who-we-are"
						aria-expanded="false"
						aria-controls="nolan-panel-who-we-are">
						<?php esc_html_e( 'Who We Are', 'nolan-showcase-theme-x7' ); ?>
						<span class="nolan-menu__chev" aria-hidden="true"></span>
					</button>
				</div>

				<div class="nolan-menu__item" role="none">
					<a class="nolan-menu__link" href="<?php echo esc_url( home_url( '/work/' ) ); ?>" role="menuitem">
						<?php esc_html_e( 'Work', 'nolan-showcase-theme-x7' ); ?>
					</a>
				</div>

				<div class="nolan-menu__item" role="none">
					<button class="nolan-menu__trigger" type="button"
						data-nolan-menu-trigger="resources"
						aria-expanded="false"
						aria-controls="nolan-panel-resources">
						<?php esc_html_e( 'Resources', 'nolan-showcase-theme-x7' ); ?>
						<span class="nolan-menu__chev" aria-hidden="true"></span>
					</button>
				</div>
			</div>

			<div class="nolan-menu__panels">
				<section id="nolan-panel-what-we-do" class="nolan-menu__panel is-hidden" data-nolan-menu-panel="what-we-do" aria-label="<?php esc_attr_e( 'What we do', 'nolan-showcase-theme-x7' ); ?>">
					<div class="nolan-menu__panel-inner">
						<div class="nolan-menu__rail" role="tablist" aria-label="<?php esc_attr_e( 'Services', 'nolan-showcase-theme-x7' ); ?>">
							<button class="nolan-menu__rail-item is-active" type="button" data-nolan-panel-tab="weddings" role="tab" aria-selected="true"><?php esc_html_e( 'Weddings', 'nolan-showcase-theme-x7' ); ?></button>
							<button class="nolan-menu__rail-item" type="button" data-nolan-panel-tab="branding" role="tab" aria-selected="false"><?php esc_html_e( 'Branding', 'nolan-showcase-theme-x7' ); ?></button>
							<button class="nolan-menu__rail-item" type="button" data-nolan-panel-tab="events" role="tab" aria-selected="false"><?php esc_html_e( 'Events', 'nolan-showcase-theme-x7' ); ?></button>
							<button class="nolan-menu__rail-item" type="button" data-nolan-panel-tab="studio" role="tab" aria-selected="false"><?php esc_html_e( 'Studio Portraits', 'nolan-showcase-theme-x7' ); ?></button>
							<button class="nolan-menu__rail-item" type="button" data-nolan-panel-tab="families" role="tab" aria-selected="false"><?php esc_html_e( 'Family + Lifestyle', 'nolan-showcase-theme-x7' ); ?></button>
							<button class="nolan-menu__rail-item" type="button" data-nolan-panel-tab="commercial" role="tab" aria-selected="false"><?php esc_html_e( 'Commercial', 'nolan-showcase-theme-x7' ); ?></button>
						</div>

						<div class="nolan-menu__content">
							<div class="nolan-menu__panel-content is-active" data-nolan-panel-content="weddings" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-wedding-moment.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'Weddings — editorial coverage with quiet confidence', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'A cinematic blend of documentary moments and refined portraiture — crafted for galleries that feel timeless, not trendy.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Best for: couples who value story + style', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Session includes: timeline guidance, calm direction, curated edits', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Deliverables: full gallery + highlight set', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Explore Services', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Check Availability', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>

							<div class="nolan-menu__panel-content" data-nolan-panel-content="branding" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-branding-session.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'Branding — images built to sell with restraint', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'On-brand visuals for founders and teams — clean, warm, and high-end. Art direction included.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Best for: founders, creative studios, service brands', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Session includes: shotlist, styling guidance, location planning', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Deliverables: web-ready set + socials crop kit', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'See Packages', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a Brief', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>

							<div class="nolan-menu__panel-content" data-nolan-panel-content="events" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-event-coverage.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'Events — fast, flattering, unobtrusive', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'Conference, gala, and brand event coverage with a polished, editorial finish — delivered on schedule.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Best for: brand activations, press moments, team culture', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Session includes: hero shots, candid moments, detail coverage', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Deliverables: curated gallery + selects for PR', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'How It Works', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request Coverage', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>

							<div class="nolan-menu__panel-content" data-nolan-panel-content="studio" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-studio-session.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'Studio portraits — sculpted light, clean direction', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'A refined studio look with warm highlights and smooth shadows — perfect for headshots and editorial portraits.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Best for: executives, creatives, actors', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Session includes: guided posing + styling notes', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Deliverables: selects + retouched finals', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Studio Options', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Book a Session', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>

							<div class="nolan-menu__panel-content" data-nolan-panel-content="families" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-family-lifestyle.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'Family + lifestyle — honest, elevated, unrushed', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'Simple prompts, natural movement, beautiful light — made for homes, not hard drives.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Best for: families, couples, milestones', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Session includes: wardrobe guidance + location scouting', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Deliverables: curated gallery + print-ready files', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Session Guide', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request Dates', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>

							<div class="nolan-menu__panel-content" data-nolan-panel-content="commercial" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-commercial-campaign.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'Commercial — campaign-ready details', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'Product, food, and lifestyle images designed for performance — sharp, warm, and intentional.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Best for: product launches and seasonal campaigns', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Session includes: art direction + usage planning', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Deliverables: hero set + variants for ads', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Commercial Packages', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a Quote', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>
						</div>

						<div class="nolan-menu__links">
							<a class="nolan-menu__subtle" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'View all services', 'nolan-showcase-theme-x7' ); ?></a>
							<a class="nolan-menu__subtle" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact us', 'nolan-showcase-theme-x7' ); ?></a>
						</div>
					</div>
				</section>

				<section id="nolan-panel-who-we-are" class="nolan-menu__panel is-hidden" data-nolan-menu-panel="who-we-are" aria-label="<?php esc_attr_e( 'Who we are', 'nolan-showcase-theme-x7' ); ?>">
					<div class="nolan-menu__panel-inner">
						<div class="nolan-menu__rail" role="tablist" aria-label="<?php esc_attr_e( 'About', 'nolan-showcase-theme-x7' ); ?>">
							<button class="nolan-menu__rail-item is-active" type="button" data-nolan-panel-tab="story" role="tab" aria-selected="true"><?php esc_html_e( 'Story', 'nolan-showcase-theme-x7' ); ?></button>
							<button class="nolan-menu__rail-item" type="button" data-nolan-panel-tab="values" role="tab" aria-selected="false"><?php esc_html_e( 'Values', 'nolan-showcase-theme-x7' ); ?></button>
							<button class="nolan-menu__rail-item" type="button" data-nolan-panel-tab="experience" role="tab" aria-selected="false"><?php esc_html_e( 'Experience', 'nolan-showcase-theme-x7' ); ?></button>
						</div>

						<div class="nolan-menu__content">
							<div class="nolan-menu__panel-content is-active" data-nolan-panel-content="story" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/about-photographer.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'A calm presence with a cinematic eye', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'MNY Photo is built for clients who want images that feel like they belong in print — warm, intentional, and quietly bold.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Refined direction, never forced', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'A timeline-friendly process', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Consistent color + black & white', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Meet MNY Photo', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>

							<div class="nolan-menu__panel-content" data-nolan-panel-content="values" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/hero-editorial-portrait.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'Values that show up in every frame', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'Details matter. Energy matters. The work should feel effortless — and still be exceptionally made.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Warmth over trends', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Comfort + clarity on set', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Finish that feels expensive', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Our Values', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Work Together', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>

							<div class="nolan-menu__panel-content" data-nolan-panel-content="experience" role="tabpanel">
								<div class="nolan-menu__preview">
									<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/process-contact-sheet.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
								</div>
								<div class="nolan-menu__copy">
									<h3 class="nolan-menu__title"><?php esc_html_e( 'A client experience built for ease', 'nolan-showcase-theme-x7' ); ?></h3>
									<p class="nolan-menu__desc"><?php echo wp_kses_post( __( 'From the first email to final delivery: clear steps, fast communication, and calm guidance — so you can be present.', 'nolan-showcase-theme-x7' ) ); ?></p>
									<ul class="nolan-menu__bullets">
										<li><?php esc_html_e( 'Pre-session planning + styling notes', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Gentle direction and natural movement prompts', 'nolan-showcase-theme-x7' ); ?></li>
										<li><?php esc_html_e( 'Delivery designed for sharing + printing', 'nolan-showcase-theme-x7' ); ?></li>
									</ul>
									<div class="nolan-menu__cta">
										<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'See the Process', 'nolan-showcase-theme-x7' ); ?></a>
										<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read Guides', 'nolan-showcase-theme-x7' ); ?></a>
									</div>
								</div>
							</div>
						</div>

						<div class="nolan-menu__links">
							<a class="nolan-menu__subtle" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'About MNY Photo', 'nolan-showcase-theme-x7' ); ?></a>
							<a class="nolan-menu__subtle" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire', 'nolan-showcase-theme-x7' ); ?></a>
						</div>
					</div>
				</section>

				<section id="nolan-panel-resources" class="nolan-menu__panel is-hidden" data-nolan-menu-panel="resources" aria-label="<?php esc_attr_e( 'Resources', 'nolan-showcase-theme-x7' ); ?>">
					<div class="nolan-menu__panel-inner">
						<div class="nolan-menu__content nolan-menu__content--cards">
							<article class="nolan-menu-card">
								<a class="nolan-menu-card__link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">
									<img class="nolan-menu-card__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/resources-journal-flatlay.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
									<div class="nolan-menu-card__meta">
										<span class="nolan-menu-card__kicker"><?php esc_html_e( 'Planning', 'nolan-showcase-theme-x7' ); ?></span>
										<h3 class="nolan-menu-card__title"><?php esc_html_e( 'Timeline calm: a photographer’s pacing guide', 'nolan-showcase-theme-x7' ); ?></h3>
									</div>
								</a>
							</article>
							<article class="nolan-menu-card">
								<a class="nolan-menu-card__link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">
									<img class="nolan-menu-card__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-black-white-portrait.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
									<div class="nolan-menu-card__meta">
										<span class="nolan-menu-card__kicker"><?php esc_html_e( 'Style', 'nolan-showcase-theme-x7' ); ?></span>
										<h3 class="nolan-menu-card__title"><?php esc_html_e( 'Wardrobe that reads expensive on camera', 'nolan-showcase-theme-x7' ); ?></h3>
									</div>
								</a>
							</article>
							<article class="nolan-menu-card">
								<a class="nolan-menu-card__link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">
									<img class="nolan-menu-card__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/contact-studio-desk.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
									<div class="nolan-menu-card__meta">
										<span class="nolan-menu-card__kicker"><?php esc_html_e( 'Booking', 'nolan-showcase-theme-x7' ); ?></span>
										<h3 class="nolan-menu-card__title"><?php esc_html_e( 'How to inquire with clarity (and get a faster yes)', 'nolan-showcase-theme-x7' ); ?></h3>
									</div>
								</a>
							</article>
							<article class="nolan-menu-card">
								<a class="nolan-menu-card__link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">
									<img class="nolan-menu-card__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-product-detail.svg' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async">
									<div class="nolan-menu-card__meta">
										<span class="nolan-menu-card__kicker"><?php esc_html_e( 'Branding', 'nolan-showcase-theme-x7' ); ?></span>
										<h3 class="nolan-menu-card__title"><?php esc_html_e( 'What to shoot first for a premium brand library', 'nolan-showcase-theme-x7' ); ?></h3>
									</div>
								</a>
							</article>
						</div>

						<div class="nolan-menu__links nolan-menu__links--wide">
							<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'View All Resources', 'nolan-showcase-theme-x7' ); ?></a>
							<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask a Question', 'nolan-showcase-theme-x7' ); ?></a>
						</div>
					</div>
				</section>
			</div>
		</nav>

		<div class="nolan-header__cta">
			<a class="btn btn-primary btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x7' ); ?></a>
		</div>

		<button class="nolan-mobile-toggle" type="button" data-nolan-mobile-open aria-expanded="false" aria-controls="nolan-mobile-menu">
			<span class="nolan-mobile-toggle__label screen-reader-text"><?php esc_html_e( 'Open menu', 'nolan-showcase-theme-x7' ); ?></span>
			<span class="nolan-mobile-toggle__bars" aria-hidden="true"></span>
		</button>
	</div>

	<div class="nolan-menu__backdrop" data-nolan-menu-backdrop hidden></div>

	<aside id="nolan-mobile-menu" class="nolan-menu-mobile" data-nolan-mobile-menu aria-hidden="true">
		<div class="nolan-menu-mobile__header">
			<a class="nolan-brand__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img class="nolan-brand__mark" src="<?php echo nolan_showcase_x7_asset( 'assets/images/logo-mark.svg' ); ?>" alt="" width="28" height="28" loading="eager" decoding="async">
				<span class="nolan-brand__text"><?php echo esc_html__( 'MNY Photo', 'nolan-showcase-theme-x7' ); ?></span>
			</a>
			<button class="nolan-menu-mobile__close" type="button" data-nolan-mobile-close>
				<span class="screen-reader-text"><?php esc_html_e( 'Close menu', 'nolan-showcase-theme-x7' ); ?></span>
				<span aria-hidden="true">×</span>
			</button>
		</div>

		<div class="nolan-menu-mobile__body">
			<div class="nolan-mobile-accordion" data-nolan-mobile-panel>
				<button class="nolan-mobile-accordion__trigger" type="button" data-nolan-mobile-trigger="m-what" aria-expanded="false">
					<?php esc_html_e( 'What We Do', 'nolan-showcase-theme-x7' ); ?>
				</button>
				<div class="nolan-mobile-accordion__content" data-nolan-mobile-panel-content="m-what" hidden>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Overview', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>#weddings"><?php esc_html_e( 'Weddings', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>#branding"><?php esc_html_e( 'Branding', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>#events"><?php esc_html_e( 'Events', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>#studio"><?php esc_html_e( 'Studio Portraits', 'nolan-showcase-theme-x7' ); ?></a>
				</div>
			</div>

			<div class="nolan-mobile-accordion" data-nolan-mobile-panel>
				<button class="nolan-mobile-accordion__trigger" type="button" data-nolan-mobile-trigger="m-who" aria-expanded="false">
					<?php esc_html_e( 'Who We Are', 'nolan-showcase-theme-x7' ); ?>
				</button>
				<div class="nolan-mobile-accordion__content" data-nolan-mobile-panel-content="m-who" hidden>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Brand Story', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>#values"><?php esc_html_e( 'Values', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>#experience"><?php esc_html_e( 'Client Experience', 'nolan-showcase-theme-x7' ); ?></a>
				</div>
			</div>

			<a class="nolan-mobile-link nolan-mobile-link--top" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x7' ); ?></a>

			<div class="nolan-mobile-accordion" data-nolan-mobile-panel>
				<button class="nolan-mobile-accordion__trigger" type="button" data-nolan-mobile-trigger="m-res" aria-expanded="false">
					<?php esc_html_e( 'Resources', 'nolan-showcase-theme-x7' ); ?>
				</button>
				<div class="nolan-mobile-accordion__content" data-nolan-mobile-panel-content="m-res" hidden>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Latest Guides', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>#planning"><?php esc_html_e( 'Planning', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>#wardrobe"><?php esc_html_e( 'Wardrobe', 'nolan-showcase-theme-x7' ); ?></a>
					<a class="nolan-mobile-link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>#editing"><?php esc_html_e( 'Editing', 'nolan-showcase-theme-x7' ); ?></a>
				</div>
			</div>

			<div class="nolan-menu-mobile__cta">
				<a class="btn btn-primary btn-full" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x7' ); ?></a>
			</div>
		</div>
	</aside>
</header>

<div id="content" class="site-content">

