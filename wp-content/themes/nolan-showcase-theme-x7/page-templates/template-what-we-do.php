<?php
/**
 * Template Name: What We Do
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main">
	<section class="hero hero--inner">
		<div class="container">
			<div class="hero__grid">
				<div class="hero__copy">
					<p class="kicker"><?php esc_html_e( 'What we do', 'nolan-showcase-theme-x7' ); ?></p>
					<h1 class="hero__title"><?php esc_html_e( 'Six services — one consistent finish: warm, cinematic, premium.', 'nolan-showcase-theme-x7' ); ?></h1>
					<p class="hero__lead"><?php echo wp_kses_post( __( 'Choose the session that fits your season. We’ll guide planning, pacing, and delivery so your gallery feels cohesive and expensive — without feeling forced.', 'nolan-showcase-theme-x7' ) ); ?></p>
					<div class="cluster">
						<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire', 'nolan-showcase-theme-x7' ); ?></a>
						<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View work', 'nolan-showcase-theme-x7' ); ?></a>
					</div>
				</div>
				<div class="hero__media">
					<img class="hero__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-commercial-campaign.svg' ); ?>" alt="" width="720" height="520" loading="eager" decoding="async">
				</div>
			</div>
		</div>
	</section>

	<section class="section section--overview">
		<div class="container container--narrow">
			<p class="kicker"><?php esc_html_e( 'Overview', 'nolan-showcase-theme-x7' ); ?></p>
			<h2 class="h2"><?php esc_html_e( 'A simple process, a premium finish.', 'nolan-showcase-theme-x7' ); ?></h2>
			<p class="lead"><?php echo wp_kses_post( __( 'Every session includes planning support, calm direction, and a cohesive edit. We’re here for clients who want images that feel like print — and still feel like them.', 'nolan-showcase-theme-x7' ) ); ?></p>
		</div>
	</section>

	<section class="section section--service-cards" aria-label="<?php esc_attr_e( 'Service details', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Services', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Choose your session type.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>

			<?php
			$services = array(
				array(
					'id'          => 'weddings',
					'title'       => __( 'Weddings', 'nolan-showcase-theme-x7' ),
					'img'         => 'assets/images/gallery-wedding-moment.svg',
					'desc'        => __( 'Editorial coverage with documentary honesty and gentle direction.', 'nolan-showcase-theme-x7' ),
					'best_for'    => __( 'Couples who want timeless story + style.', 'nolan-showcase-theme-x7' ),
					'deliver'     => __( 'Full gallery, highlights, premium black & white.', 'nolan-showcase-theme-x7' ),
					'cta'         => __( 'Ask about your date', 'nolan-showcase-theme-x7' ),
				),
				array(
					'id'          => 'branding',
					'title'       => __( 'Branding', 'nolan-showcase-theme-x7' ),
					'img'         => 'assets/images/gallery-branding-session.svg',
					'desc'        => __( 'Founder sessions and brand libraries that convert with restraint.', 'nolan-showcase-theme-x7' ),
					'best_for'    => __( 'Founders, creatives, service brands, teams.', 'nolan-showcase-theme-x7' ),
					'deliver'     => __( 'Web-ready set, socials crops, usage-friendly variants.', 'nolan-showcase-theme-x7' ),
					'cta'         => __( 'Build a shotlist', 'nolan-showcase-theme-x7' ),
				),
				array(
					'id'          => 'events',
					'title'       => __( 'Events', 'nolan-showcase-theme-x7' ),
					'img'         => 'assets/images/gallery-event-coverage.svg',
					'desc'        => __( 'Fast, flattering coverage for press, speakers, and details.', 'nolan-showcase-theme-x7' ),
					'best_for'    => __( 'Brand activations, conferences, galas.', 'nolan-showcase-theme-x7' ),
					'deliver'     => __( 'Curated gallery + PR selects delivered on schedule.', 'nolan-showcase-theme-x7' ),
					'cta'         => __( 'Request coverage', 'nolan-showcase-theme-x7' ),
				),
				array(
					'id'          => 'studio',
					'title'       => __( 'Studio Portraits', 'nolan-showcase-theme-x7' ),
					'img'         => 'assets/images/gallery-studio-session.svg',
					'desc'        => __( 'Sculpted light and clean direction with premium retouching.', 'nolan-showcase-theme-x7' ),
					'best_for'    => __( 'Headshots, editorial portraits, teams.', 'nolan-showcase-theme-x7' ),
					'deliver'     => __( 'Selects + retouched finals, consistent tones.', 'nolan-showcase-theme-x7' ),
					'cta'         => __( 'Book studio time', 'nolan-showcase-theme-x7' ),
				),
				array(
					'id'          => 'families',
					'title'       => __( 'Family + Lifestyle', 'nolan-showcase-theme-x7' ),
					'img'         => 'assets/images/gallery-family-lifestyle.svg',
					'desc'        => __( 'Natural prompts, honest moments, elevated finish.', 'nolan-showcase-theme-x7' ),
					'best_for'    => __( 'Families, couples, milestones.', 'nolan-showcase-theme-x7' ),
					'deliver'     => __( 'Curated gallery + print-ready files.', 'nolan-showcase-theme-x7' ),
					'cta'         => __( 'Request dates', 'nolan-showcase-theme-x7' ),
				),
				array(
					'id'          => 'commercial',
					'title'       => __( 'Commercial', 'nolan-showcase-theme-x7' ),
					'img'         => 'assets/images/gallery-commercial-campaign.svg',
					'desc'        => __( 'Campaign-ready product and lifestyle images with art direction.', 'nolan-showcase-theme-x7' ),
					'best_for'    => __( 'Product launches, seasonal campaigns, boutiques.', 'nolan-showcase-theme-x7' ),
					'deliver'     => __( 'Hero set + ad variants, usage planning support.', 'nolan-showcase-theme-x7' ),
					'cta'         => __( 'Request a quote', 'nolan-showcase-theme-x7' ),
				),
			);
			?>

			<div class="grid grid--service-detail">
				<?php foreach ( $services as $svc ) : ?>
					<article id="<?php echo esc_attr( $svc['id'] ); ?>" class="service-card card card--padded">
						<div class="service-card__top">
							<div class="service-card__media">
								<img src="<?php echo nolan_showcase_x7_asset( $svc['img'] ); ?>" alt="" width="560" height="360" loading="lazy" decoding="async">
							</div>
							<div class="service-card__copy">
								<h3 class="h4"><?php echo esc_html( $svc['title'] ); ?></h3>
								<p class="muted"><?php echo esc_html( $svc['desc'] ); ?></p>
								<ul class="checklist checklist--compact">
									<li><strong><?php esc_html_e( 'Best for:', 'nolan-showcase-theme-x7' ); ?></strong> <?php echo esc_html( $svc['best_for'] ); ?></li>
									<li><strong><?php esc_html_e( 'Deliverables:', 'nolan-showcase-theme-x7' ); ?></strong> <?php echo esc_html( $svc['deliver'] ); ?></li>
								</ul>
								<div class="cluster">
									<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $svc['cta'] ); ?></a>
									<a class="btn btn-text" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'See examples', 'nolan-showcase-theme-x7' ); ?></a>
								</div>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section section--comparison" aria-label="<?php esc_attr_e( 'Comparison grid', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Compare', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Quick comparison by outcome.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<div class="table-wrap" role="region" aria-label="<?php esc_attr_e( 'Service comparison', 'nolan-showcase-theme-x7' ); ?>" tabindex="0">
				<table class="comparison">
					<thead>
						<tr>
							<th scope="col"><?php esc_html_e( 'Service', 'nolan-showcase-theme-x7' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Outcome', 'nolan-showcase-theme-x7' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Best for', 'nolan-showcase-theme-x7' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr><th scope="row"><?php esc_html_e( 'Weddings', 'nolan-showcase-theme-x7' ); ?></th><td><?php esc_html_e( 'Story-complete gallery', 'nolan-showcase-theme-x7' ); ?></td><td><?php esc_html_e( 'Timeless documentary + portraits', 'nolan-showcase-theme-x7' ); ?></td></tr>
						<tr><th scope="row"><?php esc_html_e( 'Branding', 'nolan-showcase-theme-x7' ); ?></th><td><?php esc_html_e( 'Cohesive brand library', 'nolan-showcase-theme-x7' ); ?></td><td><?php esc_html_e( 'Web + socials conversion', 'nolan-showcase-theme-x7' ); ?></td></tr>
						<tr><th scope="row"><?php esc_html_e( 'Events', 'nolan-showcase-theme-x7' ); ?></th><td><?php esc_html_e( 'Press-ready selects', 'nolan-showcase-theme-x7' ); ?></td><td><?php esc_html_e( 'Brand moments + details', 'nolan-showcase-theme-x7' ); ?></td></tr>
						<tr><th scope="row"><?php esc_html_e( 'Studio', 'nolan-showcase-theme-x7' ); ?></th><td><?php esc_html_e( 'Sculpted portrait set', 'nolan-showcase-theme-x7' ); ?></td><td><?php esc_html_e( 'Headshots + editorial', 'nolan-showcase-theme-x7' ); ?></td></tr>
						<tr><th scope="row"><?php esc_html_e( 'Lifestyle', 'nolan-showcase-theme-x7' ); ?></th><td><?php esc_html_e( 'Warm, natural moments', 'nolan-showcase-theme-x7' ); ?></td><td><?php esc_html_e( 'Families + milestones', 'nolan-showcase-theme-x7' ); ?></td></tr>
						<tr><th scope="row"><?php esc_html_e( 'Commercial', 'nolan-showcase-theme-x7' ); ?></th><td><?php esc_html_e( 'Campaign hero set', 'nolan-showcase-theme-x7' ); ?></td><td><?php esc_html_e( 'Products + launches', 'nolan-showcase-theme-x7' ); ?></td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<section class="section section--process">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Process', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'How it works', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<ol class="steps">
				<li class="steps__item"><span class="steps__num">01</span><span class="steps__txt"><?php esc_html_e( 'Inquiry + scope — we confirm the outcome you want.', 'nolan-showcase-theme-x7' ); ?></span></li>
				<li class="steps__item"><span class="steps__num">02</span><span class="steps__txt"><?php esc_html_e( 'Planning — timeline, styling, and location guidance.', 'nolan-showcase-theme-x7' ); ?></span></li>
				<li class="steps__item"><span class="steps__num">03</span><span class="steps__txt"><?php esc_html_e( 'Shoot — calm direction and clean composition.', 'nolan-showcase-theme-x7' ); ?></span></li>
				<li class="steps__item"><span class="steps__num">04</span><span class="steps__txt"><?php esc_html_e( 'Edit — cohesive warm tones + premium black & white.', 'nolan-showcase-theme-x7' ); ?></span></li>
				<li class="steps__item"><span class="steps__num">05</span><span class="steps__txt"><?php esc_html_e( 'Deliver — curated gallery + assets made for sharing.', 'nolan-showcase-theme-x7' ); ?></span></li>
			</ol>
		</div>
	</section>

	<section class="section section--faq">
		<div class="container container--narrow">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'FAQ', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Quick answers', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<div class="faq">
				<details>
					<summary><?php esc_html_e( 'Can you help us plan locations?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Yes. We’ll recommend locations based on light, privacy, and the mood you want — from clean city lines to quiet, warm interiors.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Do you offer add-ons?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Select add-ons may include additional coverage hours, a second photographer, or rush editing depending on session type.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'How far out should we book?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'For weddings and seasonal dates, earlier is better. For branding and studio work, we often have weekday availability with shorter lead times.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Do you deliver black & white?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Yes — you’ll receive a premium black & white set curated for mood and contrast.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Where can we see pricing?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Send a quick inquiry and we’ll respond with current collections, availability, and a recommended next step based on your goals.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="section section--content">
		<div class="container container--narrow">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/section', 'final-cta' ); ?>
</main>

<?php
get_footer();

