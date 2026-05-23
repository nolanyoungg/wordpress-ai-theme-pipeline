<?php
/**
 * Front page template with 13 sections.
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main">
	<?php get_template_part( 'template-parts/content', 'hero' ); ?>

	<section class="section section--statement">
		<div class="container container--narrow">
			<p class="kicker"><?php esc_html_e( 'Premium photography, quietly bold.', 'nolan-showcase-theme-x7' ); ?></p>
			<h2 class="h2"><?php esc_html_e( 'Images that feel like print — warm, cinematic, and effortlessly elevated.', 'nolan-showcase-theme-x7' ); ?></h2>
			<p class="lead"><?php echo wp_kses_post( __( 'MNY Photo creates a refined visual library for modern brands and once-in-a-lifetime days. We blend documentary honesty with editorial polish — so you look like yourself, at your best.', 'nolan-showcase-theme-x7' ) ); ?></p>
			<div class="cluster">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire for availability', 'nolan-showcase-theme-x7' ); ?></a>
				<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View the work', 'nolan-showcase-theme-x7' ); ?></a>
			</div>
		</div>
	</section>

	<section class="section section--portfolio" aria-label="<?php esc_attr_e( 'Portfolio', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Selected work', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'A curated edit — built for story, light, and detail.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>

			<div class="grid grid--portfolio">
				<?php
				$portfolio_cards = array(
					array(
						'title' => __( 'Wedding Moment', 'nolan-showcase-theme-x7' ),
						'meta'  => __( 'Documentary + portrait', 'nolan-showcase-theme-x7' ),
						'img'   => 'assets/images/gallery-wedding-moment.svg',
					),
					array(
						'title' => __( 'Branding Session', 'nolan-showcase-theme-x7' ),
						'meta'  => __( 'Founder + studio', 'nolan-showcase-theme-x7' ),
						'img'   => 'assets/images/gallery-branding-session.svg',
					),
					array(
						'title' => __( 'Event Coverage', 'nolan-showcase-theme-x7' ),
						'meta'  => __( 'Fast, flattering, clean', 'nolan-showcase-theme-x7' ),
						'img'   => 'assets/images/gallery-event-coverage.svg',
					),
					array(
						'title' => __( 'Product Detail', 'nolan-showcase-theme-x7' ),
						'meta'  => __( 'Campaign-ready texture', 'nolan-showcase-theme-x7' ),
						'img'   => 'assets/images/gallery-product-detail.svg',
					),
					array(
						'title' => __( 'Family Lifestyle', 'nolan-showcase-theme-x7' ),
						'meta'  => __( 'Warm, honest, elevated', 'nolan-showcase-theme-x7' ),
						'img'   => 'assets/images/gallery-family-lifestyle.svg',
					),
					array(
						'title' => __( 'Black & White', 'nolan-showcase-theme-x7' ),
						'meta'  => __( 'Classic contrast', 'nolan-showcase-theme-x7' ),
						'img'   => 'assets/images/gallery-black-white-portrait.svg',
					),
					array(
						'title' => __( 'Couple Session', 'nolan-showcase-theme-x7' ),
						'meta'  => __( 'Effortless romance', 'nolan-showcase-theme-x7' ),
						'img'   => 'assets/images/gallery-couple-session.svg',
					),
					array(
						'title' => __( 'Commercial Campaign', 'nolan-showcase-theme-x7' ),
						'meta'  => __( 'Premium brand library', 'nolan-showcase-theme-x7' ),
						'img'   => 'assets/images/gallery-commercial-campaign.svg',
					),
				);

				foreach ( $portfolio_cards as $card ) :
					?>
					<article class="card card--media">
						<div class="card__media">
							<img src="<?php echo nolan_showcase_x7_asset( $card['img'] ); ?>" alt="" width="560" height="360" loading="lazy" decoding="async">
						</div>
						<div class="card__body">
							<h3 class="h5 card__title"><?php echo esc_html( $card['title'] ); ?></h3>
							<p class="muted"><?php echo esc_html( $card['meta'] ); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="section-foot">
				<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Explore galleries', 'nolan-showcase-theme-x7' ); ?></a>
			</div>
		</div>
	</section>

	<section class="section section--services" aria-label="<?php esc_attr_e( 'Services', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'What we do', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Six ways we create images that sell — and stories that last.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<div class="grid grid--services">
				<?php
				$services = array(
					array(
						'title' => __( 'Weddings', 'nolan-showcase-theme-x7' ),
						'desc'  => __( 'Editorial coverage with documentary honesty and calm direction.', 'nolan-showcase-theme-x7' ),
					),
					array(
						'title' => __( 'Branding', 'nolan-showcase-theme-x7' ),
						'desc'  => __( 'Founder sessions and team libraries designed to convert.', 'nolan-showcase-theme-x7' ),
					),
					array(
						'title' => __( 'Events', 'nolan-showcase-theme-x7' ),
						'desc'  => __( 'Clean, flattering coverage for press and internal storytelling.', 'nolan-showcase-theme-x7' ),
					),
					array(
						'title' => __( 'Studio Portraits', 'nolan-showcase-theme-x7' ),
						'desc'  => __( 'Sculpted light and premium retouching — natural, not plastic.', 'nolan-showcase-theme-x7' ),
					),
					array(
						'title' => __( 'Family + Lifestyle', 'nolan-showcase-theme-x7' ),
						'desc'  => __( 'Warm, natural sessions designed for printing and sharing.', 'nolan-showcase-theme-x7' ),
					),
					array(
						'title' => __( 'Commercial', 'nolan-showcase-theme-x7' ),
						'desc'  => __( 'Product and campaign imagery with art direction included.', 'nolan-showcase-theme-x7' ),
					),
				);
				foreach ( $services as $svc ) :
					?>
					<article class="card card--hover">
						<h3 class="h5"><?php echo esc_html( $svc['title'] ); ?></h3>
						<p class="muted"><?php echo esc_html( $svc['desc'] ); ?></p>
						<a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Details', 'nolan-showcase-theme-x7' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--process" aria-label="<?php esc_attr_e( 'Process', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Process', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Five steps. Zero chaos.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<ol class="steps">
				<li class="steps__item"><span class="steps__num">01</span><span class="steps__txt"><?php esc_html_e( 'Inquire + clarity call — we align on goals, location, and timing.', 'nolan-showcase-theme-x7' ); ?></span></li>
				<li class="steps__item"><span class="steps__num">02</span><span class="steps__txt"><?php esc_html_e( 'Planning — shotlist, wardrobe, and light-first scheduling.', 'nolan-showcase-theme-x7' ); ?></span></li>
				<li class="steps__item"><span class="steps__num">03</span><span class="steps__txt"><?php esc_html_e( 'Shoot day — calm direction, clean framing, and real moments.', 'nolan-showcase-theme-x7' ); ?></span></li>
				<li class="steps__item"><span class="steps__num">04</span><span class="steps__txt"><?php esc_html_e( 'Edit — warm tones, premium black & white, consistent finish.', 'nolan-showcase-theme-x7' ); ?></span></li>
				<li class="steps__item"><span class="steps__num">05</span><span class="steps__txt"><?php esc_html_e( 'Deliver — curated gallery, fast sharing, print-ready files.', 'nolan-showcase-theme-x7' ); ?></span></li>
			</ol>
		</div>
	</section>

	<section class="section section--pillars" aria-label="<?php esc_attr_e( 'Signature style', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Signature style', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Four pillars that make it feel expensive.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<div class="grid grid--pillars">
				<div class="card card--padded">
					<h3 class="h5"><?php esc_html_e( 'Warm contrast', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Golden highlights, deep blacks, and skin tones that look real.', 'nolan-showcase-theme-x7' ); ?></p>
				</div>
				<div class="card card--padded">
					<h3 class="h5"><?php esc_html_e( 'Editorial framing', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Clean lines, negative space, and a quiet sense of intention.', 'nolan-showcase-theme-x7' ); ?></p>
				</div>
				<div class="card card--padded">
					<h3 class="h5"><?php esc_html_e( 'Calm direction', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'You’ll never wonder what to do with your hands.', 'nolan-showcase-theme-x7' ); ?></p>
				</div>
				<div class="card card--padded">
					<h3 class="h5"><?php esc_html_e( 'A finished gallery', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Not just highlights — a consistent story from start to end.', 'nolan-showcase-theme-x7' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--about-preview" aria-label="<?php esc_attr_e( 'About', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<div class="split">
				<div class="split__media">
					<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/hero-editorial-portrait.svg' ); ?>" alt="" width="720" height="520" loading="lazy" decoding="async">
				</div>
				<div class="split__content">
					<p class="kicker"><?php esc_html_e( 'Who we are', 'nolan-showcase-theme-x7' ); ?></p>
					<h2 class="h2"><?php esc_html_e( 'Cinematic photography — designed to feel like you.', 'nolan-showcase-theme-x7' ); ?></h2>
					<p class="lead"><?php echo wp_kses_post( __( 'MNY Photo is a boutique studio approach: fewer sessions, more intention. Our clients come for the look — and stay for the calm, guided experience.', 'nolan-showcase-theme-x7' ) ); ?></p>
					<div class="cluster">
						<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Our story', 'nolan-showcase-theme-x7' ); ?></a>
						<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Work together', 'nolan-showcase-theme-x7' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--stats" aria-label="<?php esc_attr_e( 'Stats', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<div class="stats">
				<div class="stats__item"><span class="stats__num">250+</span><span class="stats__label"><?php esc_html_e( 'Sessions delivered', 'nolan-showcase-theme-x7' ); ?></span></div>
				<div class="stats__item"><span class="stats__num">48h</span><span class="stats__label"><?php esc_html_e( 'First previews (typical)', 'nolan-showcase-theme-x7' ); ?></span></div>
				<div class="stats__item"><span class="stats__num">5★</span><span class="stats__label"><?php esc_html_e( 'Client-rated experience', 'nolan-showcase-theme-x7' ); ?></span></div>
				<div class="stats__item"><span class="stats__num">100%</span><span class="stats__label"><?php esc_html_e( 'Guided direction (always)', 'nolan-showcase-theme-x7' ); ?></span></div>
			</div>
		</div>
	</section>

	<section class="section section--testimonials" aria-label="<?php esc_attr_e( 'Testimonials', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Client notes', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Three reviews that say it better than we can.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>

			<div class="grid grid--testimonials">
				<article class="card card--padded">
					<p class="quote">“<?php esc_html_e( 'We looked like ourselves — just elevated. The direction was calm, and the gallery felt like a magazine story.', 'nolan-showcase-theme-x7' ); ?>”</p>
					<p class="muted">— <?php esc_html_e( 'Ava + Theo', 'nolan-showcase-theme-x7' ); ?></p>
				</article>
				<article class="card card--padded">
					<p class="quote">“<?php esc_html_e( 'Our brand library finally feels cohesive. The shotlist and planning made everything efficient and on-brand.', 'nolan-showcase-theme-x7' ); ?>”</p>
					<p class="muted">— <?php esc_html_e( 'Mara, Creative Director', 'nolan-showcase-theme-x7' ); ?></p>
				</article>
				<article class="card card--padded">
					<p class="quote">“<?php esc_html_e( 'Fast delivery, gorgeous color, and details we didn’t even know we wanted. Truly premium.', 'nolan-showcase-theme-x7' ); ?>”</p>
					<p class="muted">— <?php esc_html_e( 'Noah + Lin', 'nolan-showcase-theme-x7' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="section section--investment" aria-label="<?php esc_attr_e( 'Booking and investment', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<div class="split split--reverse">
				<div class="split__media">
					<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/contact-studio-desk.svg' ); ?>" alt="" width="720" height="520" loading="lazy" decoding="async">
				</div>
				<div class="split__content">
					<p class="kicker"><?php esc_html_e( 'Booking', 'nolan-showcase-theme-x7' ); ?></p>
					<h2 class="h2"><?php esc_html_e( 'Investment that matches the finish.', 'nolan-showcase-theme-x7' ); ?></h2>
					<p class="lead"><?php echo wp_kses_post( __( 'We take on a limited number of sessions each month to protect quality and turnaround times. Share your date, location, and goals — we’ll respond with availability and next steps.', 'nolan-showcase-theme-x7' ) ); ?></p>
					<ul class="checklist">
						<li><?php esc_html_e( 'Clear scope + deliverables', 'nolan-showcase-theme-x7' ); ?></li>
						<li><?php esc_html_e( 'Planning support included', 'nolan-showcase-theme-x7' ); ?></li>
						<li><?php esc_html_e( 'Consistent edits + premium black & white', 'nolan-showcase-theme-x7' ); ?></li>
					</ul>
					<div class="cluster">
						<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Send an inquiry', 'nolan-showcase-theme-x7' ); ?></a>
						<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read planning guides', 'nolan-showcase-theme-x7' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--faq" aria-label="<?php esc_attr_e( 'FAQ', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container container--narrow">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'FAQ', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Answers, without the fluff.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>

			<div class="faq">
				<details>
					<summary><?php esc_html_e( 'Do you help with posing?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Yes — you’ll get calm direction and natural prompts. The goal is to look like yourself, not a performance.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'How many photos do we receive?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'It depends on session type and duration. You’ll receive a curated, story-complete gallery plus a highlight set for fast sharing.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'What’s your editing style?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Warm, cinematic color with clean contrast, paired with a classic black & white set. Skin tones stay true and natural.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Do you travel?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Yes. We photograph across NYC and beyond. For destination sessions, we’ll provide transparent travel planning and fees.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'How do we book?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Send an inquiry with your date and goals. If we’re a fit, we’ll confirm details and reserve your date with an agreement and retainer.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="section section--resources" aria-label="<?php esc_attr_e( 'Resources', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Guides for wardrobe, timing, and a calm shoot day.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>

			<?php
			$resource_query = new WP_Query(
				array(
					'post_type'           => 'post',
					'posts_per_page'      => 3,
					'ignore_sticky_posts' => true,
				)
			);
			?>

			<div class="grid grid--posts">
				<?php
				if ( $resource_query->have_posts() ) :
					while ( $resource_query->have_posts() ) :
						$resource_query->the_post();
						get_template_part( 'template-parts/content' );
					endwhile;
					wp_reset_postdata();
				else :
					$fallback_resources = array(
						array(
							'title' => __( 'Wardrobe that reads expensive', 'nolan-showcase-theme-x7' ),
							'meta'  => __( 'Style', 'nolan-showcase-theme-x7' ),
							'img'   => 'assets/images/resources-journal-flatlay.svg',
						),
						array(
							'title' => __( 'Timeline pacing for calmer portraits', 'nolan-showcase-theme-x7' ),
							'meta'  => __( 'Planning', 'nolan-showcase-theme-x7' ),
							'img'   => 'assets/images/process-contact-sheet.svg',
						),
						array(
							'title' => __( 'How to get natural expressions', 'nolan-showcase-theme-x7' ),
							'meta'  => __( 'Experience', 'nolan-showcase-theme-x7' ),
							'img'   => 'assets/images/hero-editorial-portrait.svg',
						),
					);
					foreach ( $fallback_resources as $r ) :
						?>
						<article class="card card--media">
							<div class="card__media">
								<img src="<?php echo nolan_showcase_x7_asset( $r['img'] ); ?>" alt="" width="560" height="360" loading="lazy" decoding="async">
							</div>
							<div class="card__body">
								<p class="kicker kicker--small"><?php echo esc_html( $r['meta'] ); ?></p>
								<h3 class="h5 card__title"><?php echo esc_html( $r['title'] ); ?></h3>
								<a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read', 'nolan-showcase-theme-x7' ); ?></a>
							</div>
						</article>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<div class="section-foot">
				<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'View all resources', 'nolan-showcase-theme-x7' ); ?></a>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/section', 'final-cta' ); ?>
</main>

<?php
get_footer();

