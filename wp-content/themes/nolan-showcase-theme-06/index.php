<?php
/**
 * Main template file.
 *
 * @package Nolan_Showcase_Theme_06
 */

get_header();
?>

<section class="hero-section" aria-labelledby="hero-title">
	<div class="hero-grid">
		<div class="hero-copy">
			<p class="eyebrow"><?php esc_html_e( 'Independent studio theme', 'nolan-showcase-theme-06' ); ?></p>
			<h1 id="hero-title"><?php esc_html_e( 'Shape a portfolio that feels deliberate from the first scroll.', 'nolan-showcase-theme-06' ); ?></h1>
			<p><?php esc_html_e( 'Nolan Showcase Theme 06 gives architecture, interiors, and design studios a refined classic WordPress foundation with sharp hierarchy, responsive sections, and accessible interaction patterns.', 'nolan-showcase-theme-06' ); ?></p>
			<div class="hero-actions">
				<a class="button button-primary" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-06' ); ?></a>
				<a class="button button-secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a Brief', 'nolan-showcase-theme-06' ); ?></a>
			</div>
		</div>
		<div class="hero-panel" aria-label="<?php echo esc_attr_x( 'Project dashboard preview', 'aria label', 'nolan-showcase-theme-06' ); ?>">
			<div class="panel-topline"><span></span><span></span><span></span></div>
			<div class="project-card project-card-large">
				<p><?php esc_html_e( 'Featured system', 'nolan-showcase-theme-06' ); ?></p>
				<h2><?php esc_html_e( 'Harbor House identity and interiors', 'nolan-showcase-theme-06' ); ?></h2>
			</div>
			<div class="panel-stack">
				<div><strong><?php esc_html_e( '18', 'nolan-showcase-theme-06' ); ?></strong><span><?php esc_html_e( 'Launch assets', 'nolan-showcase-theme-06' ); ?></span></div>
				<div><strong><?php esc_html_e( '4.8x', 'nolan-showcase-theme-06' ); ?></strong><span><?php esc_html_e( 'Inquiry lift', 'nolan-showcase-theme-06' ); ?></span></div>
			</div>
		</div>
	</div>
</section>

<section class="section section-light" aria-labelledby="services-title">
	<div class="section-head">
		<p class="eyebrow"><?php esc_html_e( 'Studio-ready sections', 'nolan-showcase-theme-06' ); ?></p>
		<h2 id="services-title"><?php esc_html_e( 'Present the work, the thinking, and the next step.', 'nolan-showcase-theme-06' ); ?></h2>
	</div>
	<div class="service-grid">
		<article>
			<span class="card-number">01</span>
			<h3><?php esc_html_e( 'Editorial case studies', 'nolan-showcase-theme-06' ); ?></h3>
			<p><?php esc_html_e( 'Balanced image placeholders, project metadata, and concise copy blocks make portfolio entries easy to scan.', 'nolan-showcase-theme-06' ); ?></p>
		</article>
		<article>
			<span class="card-number">02</span>
			<h3><?php esc_html_e( 'Conversion rhythm', 'nolan-showcase-theme-06' ); ?></h3>
			<p><?php esc_html_e( 'Clear calls to action are integrated without turning the homepage into a sales page.', 'nolan-showcase-theme-06' ); ?></p>
		</article>
		<article>
			<span class="card-number">03</span>
			<h3><?php esc_html_e( 'Accessible navigation', 'nolan-showcase-theme-06' ); ?></h3>
			<p><?php esc_html_e( 'The mobile menu uses semantic controls, aria state, keyboard support, and visible focus treatment.', 'nolan-showcase-theme-06' ); ?></p>
		</article>
	</div>
</section>

<section class="section split-section" aria-labelledby="process-title">
	<div>
		<p class="eyebrow"><?php esc_html_e( 'Operating model', 'nolan-showcase-theme-06' ); ?></p>
		<h2 id="process-title"><?php esc_html_e( 'A measured structure for premium service brands.', 'nolan-showcase-theme-06' ); ?></h2>
	</div>
	<div class="timeline" data-reveal-list>
		<div><span><?php esc_html_e( 'Discover', 'nolan-showcase-theme-06' ); ?></span><p><?php esc_html_e( 'Define the brief, audience, constraints, and presentation priorities.', 'nolan-showcase-theme-06' ); ?></p></div>
		<div><span><?php esc_html_e( 'Compose', 'nolan-showcase-theme-06' ); ?></span><p><?php esc_html_e( 'Arrange case studies, proof points, and contact prompts into a confident homepage sequence.', 'nolan-showcase-theme-06' ); ?></p></div>
		<div><span><?php esc_html_e( 'Launch', 'nolan-showcase-theme-06' ); ?></span><p><?php esc_html_e( 'Ship a self-contained classic theme with local assets and static preview parity.', 'nolan-showcase-theme-06' ); ?></p></div>
	</div>
</section>

<?php if ( have_posts() ) : ?>
	<section class="section posts-section" aria-labelledby="latest-title">
		<div class="section-head">
			<p class="eyebrow"><?php esc_html_e( 'Journal', 'nolan-showcase-theme-06' ); ?></p>
			<h2 id="latest-title"><?php esc_html_e( 'Latest writing', 'nolan-showcase-theme-06' ); ?></h2>
		</div>
		<div class="post-grid">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			?>
		</div>
		<?php the_posts_navigation(); ?>
	</section>
<?php endif; ?>

<?php
get_footer();

