<?php
/**
 * Theme header template (document head + global navigation).
 *
 * Purpose:
 * - Outputs the HTML document head and opens the page wrapper.
 * - Provides an accessible skip link.
 * - Renders the premium Nolan navigation system:
 *   - Desktop: disclosure-style mega panels (solid background), one open at a time.
 *   - Panel interaction: left rail updates right content on hover + focus.
 *   - Mobile: dedicated drawer with accordion sections (no desktop panels stacked).
 *
 * Key references (WordPress):
 * - Template tags: `language_attributes()`, `body_class()`, `wp_head()`, `wp_body_open()`.
 *
 * @package Nolan_Showcase_Theme_X10
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

<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-x10' ); ?></a>

<header class="nolan-header" data-nolan-header>
	<div class="container nolan-header__inner">
		<?php nolan_showcase_theme_x10_site_logo_markup(); ?>

		<nav class="nolan-menu" aria-label="<?php echo esc_attr_x( 'Primary navigation', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
			<ul class="nolan-menu__list nolan-menu__nav">
				<li class="nolan-menu__item">
					<button
						class="nolan-menu__trigger"
						type="button"
						data-menu-item="what-we-do"
						aria-expanded="false"
						aria-controls="nolan-dropdown-what-we-do"
					><?php esc_html_e( 'What We Do', 'nolan-showcase-theme-x10' ); ?></button>
					<a class="nolan-menu__link nolan-menu__link--sr" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'What We Do', 'nolan-showcase-theme-x10' ); ?></a>
				</li>

				<li class="nolan-menu__item">
					<button
						class="nolan-menu__trigger"
						type="button"
						data-menu-item="who-we-are"
						aria-expanded="false"
						aria-controls="nolan-dropdown-who-we-are"
					><?php esc_html_e( 'Who We Are', 'nolan-showcase-theme-x10' ); ?></button>
					<a class="nolan-menu__link nolan-menu__link--sr" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Who We Are', 'nolan-showcase-theme-x10' ); ?></a>
				</li>

				<li class="nolan-menu__item">
					<a class="nolan-menu__link" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x10' ); ?></a>
				</li>

				<li class="nolan-menu__item">
					<button
						class="nolan-menu__trigger"
						type="button"
						data-menu-item="resources"
						aria-expanded="false"
						aria-controls="nolan-dropdown-resources"
					><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x10' ); ?></button>
					<a class="nolan-menu__link nolan-menu__link--sr" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x10' ); ?></a>
				</li>
			</ul>

			<div class="nolan-menu__cta">
				<a class="btn btn-primary btn-header-cta btn-smball" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x10' ); ?></a>
			</div>
		</nav>

		<button
			class="nolan-menu-mobile__open"
			type="button"
			data-nolan-mobile-open
			aria-expanded="false"
			aria-controls="nolan-menu-mobile"
		>
			<span class="nolan-menu-mobile__label"><?php esc_html_e( 'Menu', 'nolan-showcase-theme-x10' ); ?></span>
		</button>
	</div>

	<div class="nolan-menu__backdrop" data-nolan-menu-backdrop hidden></div>

	<div class="nolan-menu__panels" data-nolan-menu-panels>
		<div
			id="nolan-dropdown-what-we-do"
			class="nolan-menu__panel"
			data-menu-dropdown="what-we-do"
			aria-label="<?php echo esc_attr_x( 'What we do mega panel', 'aria label', 'nolan-showcase-theme-x10' ); ?>"
			hidden
		>
			<div class="nolan-menu__panel-inner">
				<div class="nolan-menu__rail" aria-label="<?php echo esc_attr_x( 'Services rail', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
					<button class="nolan-menu__rail-button" type="button" data-rail-item="portrait"><?php esc_html_e( 'Portrait Sessions', 'nolan-showcase-theme-x10' ); ?></button>
					<button class="nolan-menu__rail-button" type="button" data-rail-item="weddings"><?php esc_html_e( 'Weddings & Engagements', 'nolan-showcase-theme-x10' ); ?></button>
					<button class="nolan-menu__rail-button" type="button" data-rail-item="events"><?php esc_html_e( 'Events & Celebrations', 'nolan-showcase-theme-x10' ); ?></button>
					<button class="nolan-menu__rail-button" type="button" data-rail-item="brand"><?php esc_html_e( 'Brand Photography', 'nolan-showcase-theme-x10' ); ?></button>
					<button class="nolan-menu__rail-button" type="button" data-rail-item="product"><?php esc_html_e( 'Product & Detail Photography', 'nolan-showcase-theme-x10' ); ?></button>
					<button class="nolan-menu__rail-button" type="button" data-rail-item="lifestyle"><?php esc_html_e( 'Lifestyle & Family Sessions', 'nolan-showcase-theme-x10' ); ?></button>
				</div>

				<div class="nolan-menu__content">
					<section class="nolan-menu__content-section" data-rail-content="portrait" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/service-portrait-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'Portrait sessions with editorial direction', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'A calm, guided experience built around flattering light and easy prompts — images that feel cinematic, clean, and unmistakably you.', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'Best for: founders, creatives, couples', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Includes: wardrobe notes + location guidance', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Deliverables: curated gallery + print-ready files', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Tone: bright, warm, editorial polish', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Explore sessions', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>

					<section class="nolan-menu__content-section" data-rail-content="weddings" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/service-wedding-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'Weddings & engagements — refined, documentary coverage', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'Quiet confidence on a fast day. We capture honest moments and elevated portraits — with timelines that protect the experience.', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'Best for: city weddings, destinations, intimate weekends', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Includes: timeline support + family shot flow', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Coverage: ceremony → reception story', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Finish: true-to-life skin tones, warm highlights', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Plan wedding coverage', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>

					<section class="nolan-menu__content-section" data-rail-content="events" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/service-event-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'Events & celebrations — energy, detail, and story', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'Coverage that feels cinematic and effortless. We capture the room, the people, and the small details that make the night yours.', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'Best for: galas, birthdays, private dinners', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Includes: venue walkthrough + shot priorities', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Delivery: highlight set + full story gallery', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Lighting: flash when needed, never harsh', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Explore event coverage', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>

					<section class="nolan-menu__content-section" data-rail-content="brand" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/service-brand-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'Brand photography — cohesive sets, clear direction', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'Launch-ready images built for web, press, and paid. We plan for consistency across scenes so your brand looks intentional everywhere.', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'Best for: founders, teams, campaigns', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Includes: creative direction + shot list', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Delivery: hero set + flexible crops', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Style: warm editorial with clean whites', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Build a campaign set', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>

					<section class="nolan-menu__content-section" data-rail-content="product" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/service-product-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'Product & detail photography — crisp, tactile, premium', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'Elevated still life and product detail images with studio-level polish — built for ecommerce, lookbooks, and modern ad creative.', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'Best for: ecommerce, packaging, tabletop', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Includes: styling guidance + lighting plan', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Delivery: hero frames + variants', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Finish: clean whites, warm highlights, sharp detail', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'See product coverage', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>

					<section class="nolan-menu__content-section" data-rail-content="lifestyle" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/service-family-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'Lifestyle & family sessions — natural, bright, home-ready', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'Simple prompts, beautiful light, and space for real connection — photographed with warmth and a refined, print-first finish.', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'Best for: families, couples, milestones', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Includes: timing + location guidance', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Delivery: curated gallery + print options', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Pacing: calm, candid, connected moments', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Plan a lifestyle session', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>
				</div>
			</div>
		</div>

		<div
			id="nolan-dropdown-who-we-are"
			class="nolan-menu__panel"
			data-menu-dropdown="who-we-are"
			aria-label="<?php echo esc_attr_x( 'Who we are mega panel', 'aria label', 'nolan-showcase-theme-x10' ); ?>"
			hidden
		>
			<div class="nolan-menu__panel-inner">
				<div class="nolan-menu__rail" aria-label="<?php echo esc_attr_x( 'About rail', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
					<button class="nolan-menu__rail-button" type="button" data-rail-item="studio"><?php esc_html_e( 'The Studio', 'nolan-showcase-theme-x10' ); ?></button>
					<button class="nolan-menu__rail-button" type="button" data-rail-item="approach"><?php esc_html_e( 'Our Approach', 'nolan-showcase-theme-x10' ); ?></button>
					<button class="nolan-menu__rail-button" type="button" data-rail-item="experience"><?php esc_html_e( 'The Client Experience', 'nolan-showcase-theme-x10' ); ?></button>
				</div>

				<div class="nolan-menu__content">
					<section class="nolan-menu__content-section" data-rail-content="studio" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/about-studio-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'A small studio built for calm direction', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'We work with minimal gear on set and maximal attention to light, pacing, and comfort — so the images feel effortless and elevated.', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'NYC-based, available for travel', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Editorial warmth with clean, bright whites', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Guided from planning to delivery', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Print-first files + social crops', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Meet the studio', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>

					<section class="nolan-menu__content-section" data-rail-content="approach" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/about-approach-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'A process that protects the vibe', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'We plan around light, movement, and story — then keep the session day simple. Direction is gentle and specific, so you never feel “posed.”', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'Creative direction + shot flow', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Location + timing recommendations', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Editing that stays true to skin tones', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Gallery curation with print in mind', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'How we work', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>

					<section class="nolan-menu__content-section" data-rail-content="experience" tabindex="-1">
						<div class="nolan-menu__preview" aria-hidden="true">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/about-experience-01.jpg' ); ?>" width="520" height="380" alt="" loading="lazy" decoding="async">
						</div>
						<div>
							<h3><?php esc_html_e( 'Clear, warm, intentional — from inquiry to delivery', 'nolan-showcase-theme-x10' ); ?></h3>
							<p><?php echo wp_kses_post( __( 'Expect clear communication, timeline-friendly pacing, and an easy gallery experience. We help you choose favorites and prep images for print and web.', 'nolan-showcase-theme-x10' ) ); ?></p>
							<ul>
								<li><?php esc_html_e( 'Prep call + wardrobe notes', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Candid moments + hero portraits', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Sharing links + print-ready downloads', 'nolan-showcase-theme-x10' ); ?></li>
								<li><?php esc_html_e( 'Optional album and wall art guidance', 'nolan-showcase-theme-x10' ); ?></li>
							</ul>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'What to expect', 'nolan-showcase-theme-x10' ); ?></a>
						</div>
					</section>
				</div>
			</div>
		</div>

		<div
			id="nolan-dropdown-resources"
			class="nolan-menu__panel"
			data-menu-dropdown="resources"
			aria-label="<?php echo esc_attr_x( 'Resources mega panel', 'aria label', 'nolan-showcase-theme-x10' ); ?>"
			hidden
		>
			<div class="nolan-menu__panel-inner">
				<div class="nolan-menu__content">
					<div class="nolan-menu__content-inner">
						<h3><?php esc_html_e( 'Planning notes, styling guides, and print-first advice', 'nolan-showcase-theme-x10' ); ?></h3>
						<p><?php echo wp_kses_post( __( 'Save these for later. Each resource is designed to make your session day feel calm and your images feel consistent across web and print.', 'nolan-showcase-theme-x10' ) ); ?></p>
					</div>

					<div class="resources-grid">
						<article class="resource-card">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/resource-wardrobe-01.jpg' ); ?>" width="520" height="360" alt="" loading="lazy" decoding="async">
							<p class="resource-card__tag"><?php esc_html_e( 'Wardrobe', 'nolan-showcase-theme-x10' ); ?></p>
							<h4 class="resource-card__title"><?php esc_html_e( 'What to wear for bright, editorial photos', 'nolan-showcase-theme-x10' ); ?></h4>
							<p class="resource-card__excerpt"><?php esc_html_e( 'Simple palettes, textures that photograph well, and a checklist for choosing pieces you already love.', 'nolan-showcase-theme-x10' ); ?></p>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-x10' ); ?></a>
						</article>

						<article class="resource-card">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/resource-location-01.jpg' ); ?>" width="520" height="360" alt="" loading="lazy" decoding="async">
							<p class="resource-card__tag"><?php esc_html_e( 'Locations', 'nolan-showcase-theme-x10' ); ?></p>
							<h4 class="resource-card__title"><?php esc_html_e( 'Finding light: streets, rooftops, and studios', 'nolan-showcase-theme-x10' ); ?></h4>
							<p class="resource-card__excerpt"><?php esc_html_e( 'How we choose locations that keep your set calm, private, and beautifully lit at the right time of day.', 'nolan-showcase-theme-x10' ); ?></p>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Explore', 'nolan-showcase-theme-x10' ); ?></a>
						</article>

						<article class="resource-card">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/resource-sessionday-01.jpg' ); ?>" width="520" height="360" alt="" loading="lazy" decoding="async">
							<p class="resource-card__tag"><?php esc_html_e( 'Session Day', 'nolan-showcase-theme-x10' ); ?></p>
							<h4 class="resource-card__title"><?php esc_html_e( 'A timeline that protects the feeling', 'nolan-showcase-theme-x10' ); ?></h4>
							<p class="resource-card__excerpt"><?php esc_html_e( 'Pacing tips for portraits, events, and weddings — so you get the photos without losing the day.', 'nolan-showcase-theme-x10' ); ?></p>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'See the guide', 'nolan-showcase-theme-x10' ); ?></a>
						</article>

						<article class="resource-card">
							<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/resource-print-01.jpg' ); ?>" width="520" height="360" alt="" loading="lazy" decoding="async">
							<p class="resource-card__tag"><?php esc_html_e( 'Print', 'nolan-showcase-theme-x10' ); ?></p>
							<h4 class="resource-card__title"><?php esc_html_e( 'From gallery to wall art: a print-first workflow', 'nolan-showcase-theme-x10' ); ?></h4>
							<p class="resource-card__excerpt"><?php esc_html_e( 'Resolution, crops, paper finishes, and how we deliver files that stay gorgeous off-screen.', 'nolan-showcase-theme-x10' ); ?></p>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Learn', 'nolan-showcase-theme-x10' ); ?></a>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>

	<aside id="nolan-menu-mobile" class="nolan-menu-mobile" data-nolan-mobile-menu aria-hidden="true">
		<div class="nolan-menu-mobile__header">
			<p class="nolan-menu-mobile__title"><?php esc_html_e( 'Navigate', 'nolan-showcase-theme-x10' ); ?></p>
			<button class="nolan-menu-mobile__close" type="button" data-nolan-mobile-close><?php esc_html_e( 'Close', 'nolan-showcase-theme-x10' ); ?></button>
		</div>

		<div class="nolan-menu-mobile__content">
			<div class="nolan-menu-mobile__section">
				<button class="nolan-menu-mobile__accordion" type="button" data-nolan-mobile-trigger="what-we-do" aria-expanded="false" aria-controls="nolan-mobile-panel-what-we-do"><?php esc_html_e( 'What We Do', 'nolan-showcase-theme-x10' ); ?></button>
				<div id="nolan-mobile-panel-what-we-do" class="nolan-menu-mobile__panel" data-nolan-mobile-panel-content="what-we-do" hidden>
					<ul class="nolan-menu-mobile__links">
						<li><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Service overview', 'nolan-showcase-theme-x10' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/what-we-do/#portraits' ) ); ?>"><?php esc_html_e( 'Portrait sessions', 'nolan-showcase-theme-x10' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/what-we-do/#weddings' ) ); ?>"><?php esc_html_e( 'Weddings & engagements', 'nolan-showcase-theme-x10' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/what-we-do/#brands' ) ); ?>"><?php esc_html_e( 'Brand photography', 'nolan-showcase-theme-x10' ); ?></a></li>
					</ul>
				</div>
			</div>

			<div class="nolan-menu-mobile__section">
				<button class="nolan-menu-mobile__accordion" type="button" data-nolan-mobile-trigger="who-we-are" aria-expanded="false" aria-controls="nolan-mobile-panel-who-we-are"><?php esc_html_e( 'Who We Are', 'nolan-showcase-theme-x10' ); ?></button>
				<div id="nolan-mobile-panel-who-we-are" class="nolan-menu-mobile__panel" data-nolan-mobile-panel-content="who-we-are" hidden>
					<ul class="nolan-menu-mobile__links">
						<li><a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Studio story', 'nolan-showcase-theme-x10' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/who-we-are/#approach' ) ); ?>"><?php esc_html_e( 'Our approach', 'nolan-showcase-theme-x10' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/who-we-are/#experience' ) ); ?>"><?php esc_html_e( 'Client experience', 'nolan-showcase-theme-x10' ); ?></a></li>
					</ul>
				</div>
			</div>

			<div class="nolan-menu-mobile__section">
				<button class="nolan-menu-mobile__accordion" type="button" data-nolan-mobile-trigger="resources" aria-expanded="false" aria-controls="nolan-mobile-panel-resources"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x10' ); ?></button>
				<div id="nolan-mobile-panel-resources" class="nolan-menu-mobile__panel" data-nolan-mobile-panel-content="resources" hidden>
					<ul class="nolan-menu-mobile__links">
						<li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'All resources', 'nolan-showcase-theme-x10' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/resources/#wardrobe' ) ); ?>"><?php esc_html_e( 'Wardrobe guide', 'nolan-showcase-theme-x10' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/resources/#print' ) ); ?>"><?php esc_html_e( 'Print-first delivery', 'nolan-showcase-theme-x10' ); ?></a></li>
					</ul>
				</div>
			</div>

			<div class="nolan-menu-mobile__section nolan-menu-mobile__section--direct">
				<a class="nolan-menu__link" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x10' ); ?></a>
				<a class="btn btn-primary btn-full" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x10' ); ?></a>
			</div>
		</div>
	</aside>
</header>

<main id="content" class="site-main">

