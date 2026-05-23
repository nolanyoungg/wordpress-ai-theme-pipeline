<?php
/**
 * Template Name: Who We Are
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
					<p class="kicker"><?php esc_html_e( 'Who we are', 'nolan-showcase-theme-x7' ); ?></p>
					<h1 class="hero__title"><?php esc_html_e( 'A boutique studio approach — calm direction, cinematic finish.', 'nolan-showcase-theme-x7' ); ?></h1>
					<p class="hero__lead"><?php echo wp_kses_post( __( 'MNY Photo is built for clients who care about story and detail. We keep the process simple, the energy calm, and the work exceptionally made.', 'nolan-showcase-theme-x7' ) ); ?></p>
					<div class="cluster">
						<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Inquire', 'nolan-showcase-theme-x7' ); ?></a>
						<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'See the work', 'nolan-showcase-theme-x7' ); ?></a>
					</div>
				</div>
				<div class="hero__media">
					<img class="hero__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/about-photographer.svg' ); ?>" alt="" width="720" height="520" loading="eager" decoding="async">
				</div>
			</div>
		</div>
	</section>

	<section class="section section--story">
		<div class="container container--narrow">
			<p class="kicker"><?php esc_html_e( 'Brand story', 'nolan-showcase-theme-x7' ); ?></p>
			<h2 class="h2"><?php esc_html_e( 'Photography that feels like memory — with an editorial edge.', 'nolan-showcase-theme-x7' ); ?></h2>
			<p class="lead"><?php echo wp_kses_post( __( 'The best images don’t shout. They hold attention. Our approach is built on clean framing, warm contrast, and an experience that helps you feel present. We photograph what’s real — then finish it with the kind of restraint that reads premium.', 'nolan-showcase-theme-x7' ) ); ?></p>
		</div>
	</section>

	<section id="values" class="section section--values">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Values', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Warmth. Clarity. Craft.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<div class="grid grid--pillars">
				<div class="card card--padded">
					<h3 class="h5"><?php esc_html_e( 'Warmth over trends', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'We build a look that lasts — and feels like you when you revisit it in ten years.', 'nolan-showcase-theme-x7' ); ?></p>
				</div>
				<div class="card card--padded">
					<h3 class="h5"><?php esc_html_e( 'Calm direction', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Clear prompts and gentle pacing so you can relax into the moment.', 'nolan-showcase-theme-x7' ); ?></p>
				</div>
				<div class="card card--padded">
					<h3 class="h5"><?php esc_html_e( 'Details are the story', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Hands, texture, light — the small things that make the memory feel real.', 'nolan-showcase-theme-x7' ); ?></p>
				</div>
				<div class="card card--padded">
					<h3 class="h5"><?php esc_html_e( 'Finish that reads expensive', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'A cohesive gallery with premium black & white and consistent color.', 'nolan-showcase-theme-x7' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--approach">
		<div class="container">
			<div class="split">
				<div class="split__media">
					<img src="<?php echo nolan_showcase_x7_asset( 'assets/images/process-contact-sheet.svg' ); ?>" alt="" width="720" height="520" loading="lazy" decoding="async">
				</div>
				<div class="split__content">
					<p class="kicker"><?php esc_html_e( 'Approach', 'nolan-showcase-theme-x7' ); ?></p>
					<h2 class="h2"><?php esc_html_e( 'Documentary honesty, editorial composition.', 'nolan-showcase-theme-x7' ); ?></h2>
					<p class="lead"><?php echo wp_kses_post( __( 'We’ll create space for real moments — then guide you into portraits that feel effortless. You’ll never feel left alone, and you’ll never feel over-directed.', 'nolan-showcase-theme-x7' ) ); ?></p>
					<ul class="checklist">
						<li><?php esc_html_e( 'Light-first pacing', 'nolan-showcase-theme-x7' ); ?></li>
						<li><?php esc_html_e( 'Simple movement prompts', 'nolan-showcase-theme-x7' ); ?></li>
						<li><?php esc_html_e( 'Clean lines + negative space', 'nolan-showcase-theme-x7' ); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="experience" class="section section--experience">
		<div class="container">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'Client experience', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'We keep it simple — and beautifully handled.', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<div class="grid grid--services">
				<article class="card card--hover">
					<h3 class="h5"><?php esc_html_e( 'Before', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Planning guidance, shotlist support, and wardrobe notes — so you arrive confident.', 'nolan-showcase-theme-x7' ); ?></p>
				</article>
				<article class="card card--hover">
					<h3 class="h5"><?php esc_html_e( 'During', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Calm prompts, clean framing, and natural moments captured without disruption.', 'nolan-showcase-theme-x7' ); ?></p>
				</article>
				<article class="card card--hover">
					<h3 class="h5"><?php esc_html_e( 'After', 'nolan-showcase-theme-x7' ); ?></h3>
					<p class="muted"><?php esc_html_e( 'Curated edits, premium black & white, and a gallery designed for sharing + printing.', 'nolan-showcase-theme-x7' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="section section--editing">
		<div class="container container--narrow">
			<p class="kicker"><?php esc_html_e( 'Editing philosophy', 'nolan-showcase-theme-x7' ); ?></p>
			<h2 class="h2"><?php esc_html_e( 'Retouching that keeps you human.', 'nolan-showcase-theme-x7' ); ?></h2>
			<p class="lead"><?php echo wp_kses_post( __( 'We refine what distracts, preserve what’s real, and finish each image with warm contrast and clean skin tones. The goal is you — not a filter.', 'nolan-showcase-theme-x7' ) ); ?></p>
		</div>
	</section>

	<section class="section section--trust">
		<div class="container">
			<div class="trust-strip">
				<div class="trust-strip__item"><?php esc_html_e( 'Clear communication', 'nolan-showcase-theme-x7' ); ?></div>
				<div class="trust-strip__item"><?php esc_html_e( 'Fast turnarounds', 'nolan-showcase-theme-x7' ); ?></div>
				<div class="trust-strip__item"><?php esc_html_e( 'Print-ready delivery', 'nolan-showcase-theme-x7' ); ?></div>
				<div class="trust-strip__item"><?php esc_html_e( 'Warm cinematic finish', 'nolan-showcase-theme-x7' ); ?></div>
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

