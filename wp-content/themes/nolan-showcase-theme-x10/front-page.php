<?php
/**
 * Front page template (interactive, conversion-focused homepage).
 *
 * Purpose:
 * - Provides a premium editorial homepage for the “MNY Photo” brief.
 * - Progressive enhancement: the page remains readable and navigable with JS disabled.
 * - Supplies required interactive modules for `assets/js/theme.js`:
 *   - Featured Work filter chips, spotlight carousel, before/after reveal, testimonials rotator,
 *     scroll reveal, and optional count-up stats.
 *
 * Notes:
 * - This template is intentionally content-complete even when the site has no posts yet.
 *
 * @package Nolan_Showcase_Theme_X10
 */

get_header();

$work_url      = esc_url( home_url( '/work/' ) );
$contact_url   = esc_url( home_url( '/contact/' ) );
$who_url       = esc_url( home_url( '/who-we-are/' ) );
$services_url  = esc_url( home_url( '/what-we-do/' ) );
$resources_url = esc_url( home_url( '/resources/' ) );
?>

<?php
get_template_part(
	'template-parts/content',
	'hero',
	array(
		'primary_url'   => $contact_url,
		'secondary_url' => $work_url,
	)
);
?>

<section class="section section--statement">
	<div class="container">
		<div class="statement" data-reveal>
			<h2 class="statement__title"><?php esc_html_e( 'Photography that feels editorial — and still completely you.', 'nolan-showcase-theme-x10' ); ?></h2>
			<p class="statement__copy"><?php echo wp_kses_post( __( 'MNY Photo blends documentary observation with refined portrait direction. We plan around light, movement, and story — then keep the session day simple so you can be present.', 'nolan-showcase-theme-x10' ) ); ?></p>
			<div class="statement__meta">
				<div class="pill"><?php esc_html_e( 'People-first pacing', 'nolan-showcase-theme-x10' ); ?></div>
				<div class="pill"><?php esc_html_e( 'Bright, warm edit', 'nolan-showcase-theme-x10' ); ?></div>
				<div class="pill"><?php esc_html_e( 'Designed for web + print', 'nolan-showcase-theme-x10' ); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<header class="section-head" data-reveal>
			<div>
				<h2 class="section-title"><?php esc_html_e( 'Featured work', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'A curated set of story-driven galleries — filter by session type.', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
			<div class="section-actions">
				<a class="btn btn-secondary btn-smball" href="<?php echo $work_url; ?>"><?php esc_html_e( 'View Full Portfolio', 'nolan-showcase-theme-x10' ); ?></a>
			</div>
		</header>

		<div class="filter-nav" data-work-filters aria-label="<?php echo esc_attr_x( 'Featured work filters', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
			<button class="filter-nav__btn is-active" type="button" data-filter="all" aria-pressed="true"><?php esc_html_e( 'All', 'nolan-showcase-theme-x10' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="portrait" aria-pressed="false"><?php esc_html_e( 'Portraits', 'nolan-showcase-theme-x10' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="weddings" aria-pressed="false"><?php esc_html_e( 'Weddings', 'nolan-showcase-theme-x10' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="events" aria-pressed="false"><?php esc_html_e( 'Events', 'nolan-showcase-theme-x10' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="brand" aria-pressed="false"><?php esc_html_e( 'Brand', 'nolan-showcase-theme-x10' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="product" aria-pressed="false"><?php esc_html_e( 'Product', 'nolan-showcase-theme-x10' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="lifestyle" aria-pressed="false"><?php esc_html_e( 'Lifestyle', 'nolan-showcase-theme-x10' ); ?></button>
		</div>

		<div class="grid grid--gallery" aria-label="<?php echo esc_attr_x( 'Featured work cards', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
			<?php
			$work_cards = array(
				array( 'title' => __( 'Editorial Portrait', 'nolan-showcase-theme-x10' ), 'cat' => 'portrait', 'img' => 'portfolio-portrait-01.jpg', 'meta' => __( 'Studio + street light', 'nolan-showcase-theme-x10' ) ),
				array( 'title' => __( 'Wedding Story', 'nolan-showcase-theme-x10' ), 'cat' => 'weddings', 'img' => 'portfolio-wedding-01.jpg', 'meta' => __( 'Documentary + portraits', 'nolan-showcase-theme-x10' ) ),
				array( 'title' => __( 'Brand Campaign', 'nolan-showcase-theme-x10' ), 'cat' => 'brand', 'img' => 'portfolio-brand-01.jpg', 'meta' => __( 'Launch-ready set', 'nolan-showcase-theme-x10' ) ),
				array( 'title' => __( 'Event Coverage', 'nolan-showcase-theme-x10' ), 'cat' => 'events', 'img' => 'portfolio-event-01.jpg', 'meta' => __( 'Candid energy', 'nolan-showcase-theme-x10' ) ),
				array( 'title' => __( 'Product Detail', 'nolan-showcase-theme-x10' ), 'cat' => 'product', 'img' => 'portfolio-product-01.jpg', 'meta' => __( 'Warm, tactile stills', 'nolan-showcase-theme-x10' ) ),
				array( 'title' => __( 'Lifestyle Family', 'nolan-showcase-theme-x10' ), 'cat' => 'lifestyle', 'img' => 'portfolio-family-01.jpg', 'meta' => __( 'Natural connection', 'nolan-showcase-theme-x10' ) ),
				array( 'title' => __( 'Black & White Study', 'nolan-showcase-theme-x10' ), 'cat' => 'portrait', 'img' => 'portfolio-bw-01.jpg', 'meta' => __( 'Texture + shape', 'nolan-showcase-theme-x10' ) ),
				array( 'title' => __( 'Couples in Motion', 'nolan-showcase-theme-x10' ), 'cat' => 'weddings', 'img' => 'portfolio-couple-01.jpg', 'meta' => __( 'City evening light', 'nolan-showcase-theme-x10' ) ),
				array( 'title' => __( 'Studio Still Life', 'nolan-showcase-theme-x10' ), 'cat' => 'product', 'img' => 'portfolio-product-01.jpg', 'meta' => __( 'Clean whites, premium detail', 'nolan-showcase-theme-x10' ) ),
			);
			foreach ( $work_cards as $card ) :
				?>
				<article class="gallery-card" data-work-card data-cat="<?php echo esc_attr( $card['cat'] ); ?>" data-hidden="false" data-reveal>
					<img class="gallery-card__img" src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/' . $card['img'] ); ?>" width="960" height="640" alt="" loading="lazy" decoding="async">
					<div class="gallery-card__meta">
						<h3 class="gallery-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
						<p class="gallery-card__cat"><?php echo esc_html( $card['meta'] ); ?></p>
					</div>
				</article>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/content', 'services' ); ?>

<section class="section">
	<div class="container">
		<header class="section-head" data-reveal>
			<div>
				<h2 class="section-title"><?php esc_html_e( 'How it works', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'A simple, calm process that protects the feeling — and the timeline.', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
			<div class="section-actions">
				<a class="btn btn-secondary btn-smball" href="<?php echo $contact_url; ?>"><?php esc_html_e( 'Request Dates', 'nolan-showcase-theme-x10' ); ?></a>
			</div>
		</header>

		<ol class="steps" aria-label="<?php echo esc_attr_x( 'Process steps', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
			<li class="step" data-reveal>
				<h3 class="step__title"><?php esc_html_e( 'Inquiry', 'nolan-showcase-theme-x10' ); ?></h3>
				<p class="step__desc"><?php esc_html_e( 'Tell us what you’re making (or celebrating). We’ll confirm fit, timing, and the level of coverage you need.', 'nolan-showcase-theme-x10' ); ?></p>
			</li>
			<li class="step" data-reveal>
				<h3 class="step__title"><?php esc_html_e( 'Planning', 'nolan-showcase-theme-x10' ); ?></h3>
				<p class="step__desc"><?php esc_html_e( 'We build a light plan around your story: location, timing, wardrobe notes, and a shot flow that feels natural.', 'nolan-showcase-theme-x10' ); ?></p>
			</li>
			<li class="step" data-reveal>
				<h3 class="step__title"><?php esc_html_e( 'Session day', 'nolan-showcase-theme-x10' ); ?></h3>
				<p class="step__desc"><?php esc_html_e( 'You’ll be guided with easy prompts and clear direction. We keep the pacing steady and the energy calm.', 'nolan-showcase-theme-x10' ); ?></p>
			</li>
			<li class="step" data-reveal>
				<h3 class="step__title"><?php esc_html_e( 'Editing', 'nolan-showcase-theme-x10' ); ?></h3>
				<p class="step__desc"><?php esc_html_e( 'Bright, warm color with true skin tones and consistency across the story. Every gallery is curated with intention.', 'nolan-showcase-theme-x10' ); ?></p>
			</li>
			<li class="step" data-reveal>
				<h3 class="step__title"><?php esc_html_e( 'Delivery', 'nolan-showcase-theme-x10' ); ?></h3>
				<p class="step__desc"><?php esc_html_e( 'You receive a shareable gallery with print-ready downloads, favorites tools, and guidance for albums and wall art.', 'nolan-showcase-theme-x10' ); ?></p>
			</li>
		</ol>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="pillars" data-reveal>
			<div class="pillars__copy">
				<h2 class="section-title"><?php esc_html_e( 'Signature style pillars', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'A consistent look that stays timeless — with room for your personality.', 'nolan-showcase-theme-x10' ); ?></p>
				<ul class="pillars__list">
					<li><?php esc_html_e( 'Cinematic light', 'nolan-showcase-theme-x10' ); ?></li>
					<li><?php esc_html_e( 'Calm, specific direction', 'nolan-showcase-theme-x10' ); ?></li>
					<li><?php esc_html_e( 'Editorial composition', 'nolan-showcase-theme-x10' ); ?></li>
					<li><?php esc_html_e( 'Bright, print-first finish', 'nolan-showcase-theme-x10' ); ?></li>
				</ul>
				<a class="btn btn-secondary btn-smball" href="<?php echo $who_url; ?>"><?php esc_html_e( 'Who we are', 'nolan-showcase-theme-x10' ); ?></a>
			</div>
			<div class="pillars__media" aria-hidden="true">
				<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/about-approach-01.jpg' ); ?>" width="960" height="720" alt="" loading="lazy" decoding="async">
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="about-preview" data-reveal>
			<div class="about-preview__media" aria-hidden="true">
				<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/about-studio-01.jpg' ); ?>" width="960" height="720" alt="" loading="lazy" decoding="async">
			</div>
			<div class="about-preview__copy">
				<h2 class="section-title"><?php esc_html_e( 'A small studio built for calm, confident sessions.', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'We keep sets light and direction clear — so your images feel natural, elevated, and deeply personal.', 'nolan-showcase-theme-x10' ); ?></p>
				<ul class="checklist">
					<li><?php esc_html_e( 'Pre-session planning with mood + shot flow', 'nolan-showcase-theme-x10' ); ?></li>
					<li><?php esc_html_e( 'Location + wardrobe guidance that actually helps', 'nolan-showcase-theme-x10' ); ?></li>
					<li><?php esc_html_e( 'Editing that respects skin and light', 'nolan-showcase-theme-x10' ); ?></li>
				</ul>
				<div class="about-preview__actions">
					<a class="btn btn-primary" href="<?php echo $contact_url; ?>"><?php esc_html_e( 'Start an inquiry', 'nolan-showcase-theme-x10' ); ?></a>
					<a class="btn btn-text" href="<?php echo $who_url; ?>"><?php esc_html_e( 'Meet the studio', 'nolan-showcase-theme-x10' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section--band">
	<div class="container">
		<div class="stats" data-reveal aria-label="<?php echo esc_attr_x( 'Proof band', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
			<div class="stat">
				<p class="stat__num"><span data-countup data-to="6">6</span>+</p>
				<p class="stat__label"><?php esc_html_e( 'session styles', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
			<div class="stat">
				<p class="stat__num">48h</p>
				<p class="stat__label"><?php esc_html_e( 'sneak peek option', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
			<div class="stat">
				<p class="stat__num"><?php esc_html_e( 'NYC', 'nolan-showcase-theme-x10' ); ?></p>
				<p class="stat__label"><?php esc_html_e( 'available for travel', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
			<div class="stat">
				<p class="stat__num"><?php esc_html_e( 'Print', 'nolan-showcase-theme-x10' ); ?></p>
				<p class="stat__label"><?php esc_html_e( 'ready delivery', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<header class="section-head" data-reveal>
			<div>
				<h2 class="section-title"><?php esc_html_e( 'Spotlight stories', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'Three recent sets — each with a different pace, light, and intention.', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
		</header>

		<div class="carousel" data-carousel aria-label="<?php echo esc_attr_x( 'Spotlight carousel', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
			<div class="carousel__viewport">
				<article class="carousel__slide" data-carousel-slide>
					<div class="carousel__media" aria-hidden="true">
						<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/feature-story-01.jpg' ); ?>" width="960" height="640" alt="" loading="lazy" decoding="async">
					</div>
					<div>
						<p class="carousel__kicker"><?php esc_html_e( 'Featured story', 'nolan-showcase-theme-x10' ); ?></p>
						<h3 class="carousel__title"><?php esc_html_e( 'A downtown brand set built in soft window light', 'nolan-showcase-theme-x10' ); ?></h3>
						<p class="carousel__copy"><?php esc_html_e( 'Three looks, one location, and a shot flow designed for web + press. Bright whites, warm skin, and clean composition.', 'nolan-showcase-theme-x10' ); ?></p>
						<a class="btn btn-text" href="<?php echo $work_url; ?>"><?php esc_html_e( 'View work', 'nolan-showcase-theme-x10' ); ?></a>
					</div>
				</article>

				<article class="carousel__slide" data-carousel-slide hidden aria-hidden="true">
					<div class="carousel__media" aria-hidden="true">
						<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/hero-couple-01.jpg' ); ?>" width="960" height="640" alt="" loading="lazy" decoding="async">
					</div>
					<div>
						<p class="carousel__kicker"><?php esc_html_e( 'Featured story', 'nolan-showcase-theme-x10' ); ?></p>
						<h3 class="carousel__title"><?php esc_html_e( 'Engagement portraits that feel like a film still', 'nolan-showcase-theme-x10' ); ?></h3>
						<p class="carousel__copy"><?php esc_html_e( 'A relaxed walk, a few guided prompts, and light that does the heavy lifting. The result: natural images with editorial polish.', 'nolan-showcase-theme-x10' ); ?></p>
						<a class="btn btn-text" href="<?php echo $services_url; ?>"><?php esc_html_e( 'See session options', 'nolan-showcase-theme-x10' ); ?></a>
					</div>
				</article>

				<article class="carousel__slide" data-carousel-slide hidden aria-hidden="true">
					<div class="carousel__media" aria-hidden="true">
						<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/portfolio-event-01.jpg' ); ?>" width="960" height="640" alt="" loading="lazy" decoding="async">
					</div>
					<div>
						<p class="carousel__kicker"><?php esc_html_e( 'Featured story', 'nolan-showcase-theme-x10' ); ?></p>
						<h3 class="carousel__title"><?php esc_html_e( 'A celebration captured with flattering, clean light', 'nolan-showcase-theme-x10' ); ?></h3>
						<p class="carousel__copy"><?php esc_html_e( 'Candid coverage that respects the room. Detail frames, real moments, and a gallery that reads like a story.', 'nolan-showcase-theme-x10' ); ?></p>
						<a class="btn btn-text" href="<?php echo $contact_url; ?>"><?php esc_html_e( 'Ask about coverage', 'nolan-showcase-theme-x10' ); ?></a>
					</div>
				</article>
			</div>

			<div class="carousel__controls">
				<div class="carousel__nav">
					<button class="btn btn-secondary btn-smball" type="button" data-carousel-prev><?php esc_html_e( 'Previous', 'nolan-showcase-theme-x10' ); ?></button>
					<button class="btn btn-secondary btn-smball" type="button" data-carousel-next><?php esc_html_e( 'Next', 'nolan-showcase-theme-x10' ); ?></button>
				</div>
				<div class="carousel__dots" aria-label="<?php echo esc_attr_x( 'Carousel dots', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
					<button class="carousel__dot is-active" type="button" data-carousel-dot data-slide="0" aria-pressed="true"><span class="screen-reader-text"><?php esc_html_e( 'Slide 1', 'nolan-showcase-theme-x10' ); ?></span></button>
					<button class="carousel__dot" type="button" data-carousel-dot data-slide="1" aria-pressed="false"><span class="screen-reader-text"><?php esc_html_e( 'Slide 2', 'nolan-showcase-theme-x10' ); ?></span></button>
					<button class="carousel__dot" type="button" data-carousel-dot data-slide="2" aria-pressed="false"><span class="screen-reader-text"><?php esc_html_e( 'Slide 3', 'nolan-showcase-theme-x10' ); ?></span></button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<header class="section-head" data-reveal>
			<div>
				<h2 class="section-title"><?php esc_html_e( 'Editing philosophy', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'Bright whites, warm highlights, and true skin tones — a clean finish that still feels like you.', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
		</header>

		<div class="before-after" data-before-after data-reveal>
			<div class="before-after__frame" aria-label="<?php echo esc_attr_x( 'Before and after reveal', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
				<img class="before-after__img" src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/portfolio-bw-01.jpg' ); ?>" width="1280" height="800" alt="<?php echo esc_attr_x( 'Before', 'before after', 'nolan-showcase-theme-x10' ); ?>" loading="lazy" decoding="async">
				<div class="before-after__after" aria-hidden="true">
					<img class="before-after__img" src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/portfolio-portrait-01.jpg' ); ?>" width="1280" height="800" alt="" loading="lazy" decoding="async">
				</div>
				<div class="before-after__handle" aria-hidden="true">↔</div>
			</div>
			<div class="before-after__range">
				<label class="screen-reader-text" for="before-after-range"><?php esc_html_e( 'Reveal slider', 'nolan-showcase-theme-x10' ); ?></label>
				<input id="before-after-range" type="range" min="0" max="100" value="50" data-before-after-range>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<header class="section-head" data-reveal>
			<div>
				<h2 class="section-title"><?php esc_html_e( 'Testimonials', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'Realistic words from fictional clients — the kind we’re proud to earn.', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
		</header>

		<div class="testimonials-rotator" data-testimonials data-reveal>
			<figure class="testimonial" data-testimonial>
				<blockquote class="testimonial__quote"><?php esc_html_e( '“I expected to feel awkward — I didn’t, even once. The direction was calm and specific, and the images look like they belong in a magazine.”', 'nolan-showcase-theme-x10' ); ?></blockquote>
				<figcaption class="testimonial__meta"><?php esc_html_e( 'Ava R. — Founder portraits', 'nolan-showcase-theme-x10' ); ?></figcaption>
			</figure>

			<figure class="testimonial" data-testimonial hidden aria-hidden="true">
				<blockquote class="testimonial__quote"><?php esc_html_e( '“Our timeline stayed intact and the gallery tells the day perfectly. Bright, clean color — nothing over-edited, nothing missed.”', 'nolan-showcase-theme-x10' ); ?></blockquote>
				<figcaption class="testimonial__meta"><?php esc_html_e( 'Noah & Elise — Wedding weekend', 'nolan-showcase-theme-x10' ); ?></figcaption>
			</figure>

			<figure class="testimonial" data-testimonial hidden aria-hidden="true">
				<blockquote class="testimonial__quote"><?php esc_html_e( '“We needed a brand set that could cover web, press, and ads. The planning was clear and the consistency across scenes was exactly what we hoped for.”', 'nolan-showcase-theme-x10' ); ?></blockquote>
				<figcaption class="testimonial__meta"><?php esc_html_e( 'Mina K. — Brand campaign', 'nolan-showcase-theme-x10' ); ?></figcaption>
			</figure>

			<div class="testimonials-rotator__nav" aria-label="<?php echo esc_attr_x( 'Testimonial controls', 'aria label', 'nolan-showcase-theme-x10' ); ?>">
				<button class="testimonials-rotator__btn is-active" type="button" data-testimonial-btn data-slide="0" aria-pressed="true"><?php esc_html_e( '01', 'nolan-showcase-theme-x10' ); ?></button>
				<button class="testimonials-rotator__btn" type="button" data-testimonial-btn data-slide="1" aria-pressed="false"><?php esc_html_e( '02', 'nolan-showcase-theme-x10' ); ?></button>
				<button class="testimonials-rotator__btn" type="button" data-testimonial-btn data-slide="2" aria-pressed="false"><?php esc_html_e( '03', 'nolan-showcase-theme-x10' ); ?></button>
			</div>
		</div>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="pricing" data-reveal>
			<div class="pricing__copy">
				<h2 class="section-title"><?php esc_html_e( 'Booking & investment', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'No one-size-fits-all packages. We’ll recommend coverage based on the story, deliverables, and how you’ll use the images.', 'nolan-showcase-theme-x10' ); ?></p>
				<ul class="checklist">
					<li><?php esc_html_e( 'Clear deliverables and usage guidance (for brands)', 'nolan-showcase-theme-x10' ); ?></li>
					<li><?php esc_html_e( 'Print-first editing + social-ready crops', 'nolan-showcase-theme-x10' ); ?></li>
					<li><?php esc_html_e( 'Optional 48-hour sneak peek for select sessions', 'nolan-showcase-theme-x10' ); ?></li>
				</ul>
				<div class="section-actions">
					<a class="btn btn-primary" href="<?php echo $contact_url; ?>"><?php esc_html_e( 'Check availability', 'nolan-showcase-theme-x10' ); ?></a>
					<a class="btn btn-secondary" href="<?php echo $services_url; ?>"><?php esc_html_e( 'Explore services', 'nolan-showcase-theme-x10' ); ?></a>
				</div>
			</div>
			<div class="pricing__media" aria-hidden="true">
				<img src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/hero-brand-01.jpg' ); ?>" width="960" height="720" alt="" loading="lazy" decoding="async">
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<header class="section-head" data-reveal>
			<div>
				<h2 class="section-title"><?php esc_html_e( 'FAQ', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'A few common questions — answered with clarity.', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
		</header>

		<div class="faq" data-reveal>
			<details>
				<summary><?php esc_html_e( 'Do you help with wardrobe and locations?', 'nolan-showcase-theme-x10' ); ?></summary>
				<p><?php esc_html_e( 'Yes. You’ll receive wardrobe notes and location guidance based on the light, the season, and the feeling you want. The goal is to make the session day easy.', 'nolan-showcase-theme-x10' ); ?></p>
			</details>
			<details>
				<summary><?php esc_html_e( 'How long does delivery take?', 'nolan-showcase-theme-x10' ); ?></summary>
				<p><?php esc_html_e( 'Turnaround depends on the project size. You’ll always receive a clear delivery window before we shoot, with an optional 48-hour sneak peek for select sessions.', 'nolan-showcase-theme-x10' ); ?></p>
			</details>
			<details>
				<summary><?php esc_html_e( 'Do you offer black & white edits?', 'nolan-showcase-theme-x10' ); ?></summary>
				<p><?php esc_html_e( 'Absolutely. We include black & white conversions when they strengthen the story — not as an afterthought.', 'nolan-showcase-theme-x10' ); ?></p>
			</details>
			<details>
				<summary><?php esc_html_e( 'Can you match our brand color palette?', 'nolan-showcase-theme-x10' ); ?></summary>
				<p><?php esc_html_e( 'Yes. For brand work we plan scenes and wardrobe around your palette, then edit for consistency across the full set so your images work together.', 'nolan-showcase-theme-x10' ); ?></p>
			</details>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<header class="section-head" data-reveal>
			<div>
				<h2 class="section-title"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x10' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'Planning notes and styling guides — designed to keep your session day calm.', 'nolan-showcase-theme-x10' ); ?></p>
			</div>
			<div class="section-actions">
				<a class="btn btn-secondary btn-smball" href="<?php echo $resources_url; ?>"><?php esc_html_e( 'All Resources', 'nolan-showcase-theme-x10' ); ?></a>
			</div>
		</header>

		<div class="grid grid--posts">
			<?php
			$latest = new WP_Query(
				array(
					'post_type'           => 'post',
					'posts_per_page'      => 3,
					'ignore_sticky_posts' => true,
				)
			);
			if ( $latest->have_posts() ) :
				while ( $latest->have_posts() ) :
					$latest->the_post();
					?>
					<article <?php post_class( 'post-card' ); ?> data-reveal>
						<h3 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></p>
						<p class="post-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : wp_strip_all_tags( get_the_content() ), 24 ) ); ?></p>
						<a class="btn btn-text" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read', 'nolan-showcase-theme-x10' ); ?></a>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				$fallback = array(
					array( 'kicker' => __( 'Wardrobe', 'nolan-showcase-theme-x10' ), 'title' => __( 'What to wear for bright, editorial photos', 'nolan-showcase-theme-x10' ), 'img' => 'resource-wardrobe-01.jpg' ),
					array( 'kicker' => __( 'Locations', 'nolan-showcase-theme-x10' ), 'title' => __( 'Finding light: streets, rooftops, and studios', 'nolan-showcase-theme-x10' ), 'img' => 'resource-location-01.jpg' ),
					array( 'kicker' => __( 'Print', 'nolan-showcase-theme-x10' ), 'title' => __( 'From gallery to wall art: a print-first workflow', 'nolan-showcase-theme-x10' ), 'img' => 'resource-print-01.jpg' ),
				);
				foreach ( $fallback as $card ) :
					?>
					<article class="resource-card resource-card--image" data-reveal>
						<img class="resource-card__img" src="<?php echo nolan_showcase_theme_x10_asset_url( 'assets/images/' . $card['img'] ); ?>" width="960" height="640" alt="" loading="lazy" decoding="async">
						<p class="resource-card__kicker"><?php echo esc_html( $card['kicker'] ); ?></p>
						<h3 class="resource-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
						<a class="btn btn-text" href="<?php echo $resources_url; ?>"><?php esc_html_e( 'Open resources', 'nolan-showcase-theme-x10' ); ?></a>
					</article>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>

<section class="section section--cta">
	<div class="container">
		<div class="final-cta" data-reveal>
			<h2 class="final-cta__title"><?php esc_html_e( 'Ready to plan something beautiful?', 'nolan-showcase-theme-x10' ); ?></h2>
			<p class="final-cta__copy"><?php esc_html_e( 'Tell us what you’re making — we’ll recommend a calm plan and the right kind of coverage, with a bright, cinematic finish.', 'nolan-showcase-theme-x10' ); ?></p>
			<div class="final-cta__actions">
				<a class="btn btn-primary" href="<?php echo $contact_url; ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x10' ); ?></a>
				<a class="btn btn-secondary" href="<?php echo $work_url; ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-x10' ); ?></a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

