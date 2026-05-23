<?php
/**
 * Template Name: Work
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
					<p class="kicker"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x7' ); ?></p>
					<h1 class="hero__title"><?php esc_html_e( 'A warm-luxury edit — curated by light and story.', 'nolan-showcase-theme-x7' ); ?></h1>
					<p class="hero__lead"><?php echo wp_kses_post( __( 'Explore galleries by category. Every collection is designed to feel cohesive — not a random highlight reel.', 'nolan-showcase-theme-x7' ) ); ?></p>
					<div class="cluster">
						<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire', 'nolan-showcase-theme-x7' ); ?></a>
						<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Services', 'nolan-showcase-theme-x7' ); ?></a>
					</div>
				</div>
				<div class="hero__media">
					<img class="hero__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-couple-session.svg' ); ?>" alt="" width="720" height="520" loading="eager" decoding="async">
				</div>
			</div>
		</div>
	</section>

	<section class="section section--work">
		<div class="container">
			<nav class="filter-nav" aria-label="<?php esc_attr_e( 'Work categories', 'nolan-showcase-theme-x7' ); ?>">
				<button class="filter-nav__btn is-active" type="button" data-filter="all"><?php esc_html_e( 'All', 'nolan-showcase-theme-x7' ); ?></button>
				<button class="filter-nav__btn" type="button" data-filter="weddings"><?php esc_html_e( 'Weddings', 'nolan-showcase-theme-x7' ); ?></button>
				<button class="filter-nav__btn" type="button" data-filter="branding"><?php esc_html_e( 'Branding', 'nolan-showcase-theme-x7' ); ?></button>
				<button class="filter-nav__btn" type="button" data-filter="events"><?php esc_html_e( 'Events', 'nolan-showcase-theme-x7' ); ?></button>
				<button class="filter-nav__btn" type="button" data-filter="studio"><?php esc_html_e( 'Studio', 'nolan-showcase-theme-x7' ); ?></button>
				<button class="filter-nav__btn" type="button" data-filter="commercial"><?php esc_html_e( 'Commercial', 'nolan-showcase-theme-x7' ); ?></button>
			</nav>

			<?php
			$work_cards = array(
				array( 'title' => __( 'Downtown ceremony', 'nolan-showcase-theme-x7' ), 'cat' => 'weddings', 'img' => 'assets/images/gallery-wedding-moment.svg' ),
				array( 'title' => __( 'City bridal portraits', 'nolan-showcase-theme-x7' ), 'cat' => 'weddings', 'img' => 'assets/images/gallery-couple-session.svg' ),
				array( 'title' => __( 'Founder studio library', 'nolan-showcase-theme-x7' ), 'cat' => 'branding', 'img' => 'assets/images/gallery-branding-session.svg' ),
				array( 'title' => __( 'Editorial headshots', 'nolan-showcase-theme-x7' ), 'cat' => 'studio', 'img' => 'assets/images/gallery-studio-session.svg' ),
				array( 'title' => __( 'Conference stage moments', 'nolan-showcase-theme-x7' ), 'cat' => 'events', 'img' => 'assets/images/gallery-event-coverage.svg' ),
				array( 'title' => __( 'Product close-ups', 'nolan-showcase-theme-x7' ), 'cat' => 'commercial', 'img' => 'assets/images/gallery-product-detail.svg' ),
				array( 'title' => __( 'Lifestyle family warmth', 'nolan-showcase-theme-x7' ), 'cat' => 'families', 'img' => 'assets/images/gallery-family-lifestyle.svg' ),
				array( 'title' => __( 'Black & white portrait set', 'nolan-showcase-theme-x7' ), 'cat' => 'studio', 'img' => 'assets/images/gallery-black-white-portrait.svg' ),
				array( 'title' => __( 'Brand event details', 'nolan-showcase-theme-x7' ), 'cat' => 'events', 'img' => 'assets/images/gallery-event-coverage.svg' ),
				array( 'title' => __( 'Commercial campaign hero', 'nolan-showcase-theme-x7' ), 'cat' => 'commercial', 'img' => 'assets/images/gallery-commercial-campaign.svg' ),
				array( 'title' => __( 'Warm couple editorial', 'nolan-showcase-theme-x7' ), 'cat' => 'weddings', 'img' => 'assets/images/gallery-couple-session.svg' ),
				array( 'title' => __( 'Branding location session', 'nolan-showcase-theme-x7' ), 'cat' => 'branding', 'img' => 'assets/images/gallery-branding-session.svg' ),
			);
			?>

			<div class="grid grid--work" data-work-grid>
				<?php foreach ( $work_cards as $card ) : ?>
					<article class="work-card card card--media" data-work-card data-cat="<?php echo esc_attr( $card['cat'] ); ?>">
						<div class="card__media">
							<img src="<?php echo nolan_showcase_x7_asset( $card['img'] ); ?>" alt="" width="560" height="360" loading="lazy" decoding="async">
						</div>
						<div class="card__body">
							<p class="kicker kicker--small"><?php echo esc_html( ucfirst( $card['cat'] ) ); ?></p>
							<h3 class="h5 card__title"><?php echo esc_html( $card['title'] ); ?></h3>
							<a class="btn btn-text" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a similar session', 'nolan-showcase-theme-x7' ); ?></a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<section class="featured-story card card--padded">
				<div class="featured-story__grid">
					<div>
						<p class="kicker"><?php esc_html_e( 'Featured story', 'nolan-showcase-theme-x7' ); ?></p>
						<h2 class="h3"><?php esc_html_e( 'A gallery that feels like a film still — warm, quiet, and refined.', 'nolan-showcase-theme-x7' ); ?></h2>
						<p class="muted"><?php esc_html_e( 'We build a beginning-to-end narrative: details, pacing, and portraits that feel effortless. If you want an experience that feels calm, this is your place.', 'nolan-showcase-theme-x7' ); ?></p>
						<div class="cluster">
							<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask about your date', 'nolan-showcase-theme-x7' ); ?></a>
							<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Services', 'nolan-showcase-theme-x7' ); ?></a>
						</div>
					</div>
					<div class="featured-story__media">
						<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/gallery-wedding-moment.svg' ); ?>" alt="" width="720" height="520" loading="lazy" decoding="async">
					</div>
				</div>
			</section>

			<div class="section-foot">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire', 'nolan-showcase-theme-x7' ); ?></a>
				<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Planning resources', 'nolan-showcase-theme-x7' ); ?></a>
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

