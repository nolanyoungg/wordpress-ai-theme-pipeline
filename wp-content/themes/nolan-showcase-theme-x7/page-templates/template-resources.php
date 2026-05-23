<?php
/**
 * Template Name: Resources
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
					<p class="kicker"><?php esc_html_e( 'Resources', 'nolan-showcase-theme-x7' ); ?></p>
					<h1 class="hero__title"><?php esc_html_e( 'Planning, wardrobe, and a calmer camera day.', 'nolan-showcase-theme-x7' ); ?></h1>
					<p class="hero__lead"><?php echo wp_kses_post( __( 'Short, practical guides — designed to help you look and feel confident, and to keep your session moving with ease.', 'nolan-showcase-theme-x7' ) ); ?></p>
					<div class="cluster">
						<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire', 'nolan-showcase-theme-x7' ); ?></a>
						<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'See work', 'nolan-showcase-theme-x7' ); ?></a>
					</div>
				</div>
				<div class="hero__media">
					<img class="hero__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/resources-journal-flatlay.svg' ); ?>" alt="" width="720" height="520" loading="eager" decoding="async">
				</div>
			</div>
		</div>
	</section>

	<section class="section section--resources">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Latest posts', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'The newest notes from the journal.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>

			<?php
			$q = new WP_Query(
				array(
					'post_type'           => 'post',
					'posts_per_page'      => 6,
					'ignore_sticky_posts' => true,
				)
			);
			?>

			<div class="grid grid--posts">
				<?php if ( $q->have_posts() ) : ?>
					<?php
					while ( $q->have_posts() ) :
						$q->the_post();
						get_template_part( 'template-parts/content' );
					endwhile;
					wp_reset_postdata();
					?>
				<?php else : ?>
					<?php
					$fallback = array(
						array( 'title' => __( 'Wardrobe that reads expensive on camera', 'nolan-showcase-theme-x7' ), 'topic' => __( 'Wardrobe', 'nolan-showcase-theme-x7' ), 'img' => 'assets/images/gallery-black-white-portrait.svg' ),
						array( 'title' => __( 'How to pace your timeline for calm portraits', 'nolan-showcase-theme-x7' ), 'topic' => __( 'Planning', 'nolan-showcase-theme-x7' ), 'img' => 'assets/images/process-contact-sheet.svg' ),
						array( 'title' => __( 'What to expect from an editorial session', 'nolan-showcase-theme-x7' ), 'topic' => __( 'Experience', 'nolan-showcase-theme-x7' ), 'img' => 'assets/images/hero-editorial-portrait.svg' ),
						array( 'title' => __( 'Branding photos that convert: start with these shots', 'nolan-showcase-theme-x7' ), 'topic' => __( 'Branding', 'nolan-showcase-theme-x7' ), 'img' => 'assets/images/gallery-product-detail.svg' ),
						array( 'title' => __( 'How we edit: warm tones without orange skin', 'nolan-showcase-theme-x7' ), 'topic' => __( 'Editing', 'nolan-showcase-theme-x7' ), 'img' => 'assets/images/gallery-family-lifestyle.svg' ),
						array( 'title' => __( 'How to inquire with clarity (and book faster)', 'nolan-showcase-theme-x7' ), 'topic' => __( 'Booking', 'nolan-showcase-theme-x7' ), 'img' => 'assets/images/contact-studio-desk.svg' ),
					);
					foreach ( $fallback as $f ) :
						?>
						<article class="card card--media">
							<div class="card__media">
								<img src="<?php echo nolan_showcase_x7_asset( $f['img'] ); ?>" alt="" width="560" height="360" loading="lazy" decoding="async">
							</div>
							<div class="card__body">
								<p class="kicker kicker--small"><?php echo esc_html( $f['topic'] ); ?></p>
								<h3 class="h5 card__title"><?php echo esc_html( $f['title'] ); ?></h3>
								<a class="btn btn-text" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask a question', 'nolan-showcase-theme-x7' ); ?></a>
							</div>
						</article>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="section section--topics" aria-label="<?php esc_attr_e( 'Topics', 'nolan-showcase-theme-x7' ); ?>">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Topics', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Start here if you’re short on time.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>

			<div class="grid grid--services">
				<a class="card card--hover topic-card" href="#planning" id="planning">
					<h3 class="h5"><?php esc_html_e( 'Planning', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Timeline pacing, locations, and what to prioritize first.', 'nolan-showcase-theme-x7' ); ?></p>
				</a>
				<a class="card card--hover topic-card" href="#wardrobe" id="wardrobe">
					<h3 class="h5"><?php esc_html_e( 'Wardrobe', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Colors, textures, and silhouettes that photograph beautifully.', 'nolan-showcase-theme-x7' ); ?></p>
				</a>
				<a class="card card--hover topic-card" href="#editing" id="editing">
					<h3 class="h5"><?php esc_html_e( 'Editing', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Warm tones, clean contrast, and a premium black & white set.', 'nolan-showcase-theme-x7' ); ?></p>
				</a>
			</div>

			<div class="section-foot">
				<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask a question', 'nolan-showcase-theme-x7' ); ?></a>
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

