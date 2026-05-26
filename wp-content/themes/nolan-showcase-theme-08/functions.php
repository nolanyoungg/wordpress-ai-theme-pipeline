<?php
/**
 * Theme functions for Nolan Showcase Theme 08.
 *
 * @package Nolan_Showcase_Theme_08
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NST08_VERSION', '1.0.0' );

function nst08_setup() {
	load_theme_textdomain( 'nolan-showcase-theme-08', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'nolan-showcase-theme-08' ),
			'footer'  => esc_html__( 'Footer Menu', 'nolan-showcase-theme-08' ),
		)
	);
}
add_action( 'after_setup_theme', 'nst08_setup' );

function nst08_assets() {
	wp_enqueue_style( 'nst08-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), NST08_VERSION );
	wp_enqueue_script( 'nst08-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), NST08_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'nst08_assets' );

function nst08_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Insight Column', 'nolan-showcase-theme-08' ),
			'id'            => 'footer-insight',
			'description'   => esc_html__( 'Optional footer content for trust notes or contact details.', 'nolan-showcase-theme-08' ),
			'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="footer-widget__title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nst08_widgets_init' );

function nst08_asset_uri( $path ) {
	return esc_url( get_template_directory_uri() . '/' . ltrim( $path, '/' ) );
}

function nst08_button( $label, $url = '#contact', $style = 'primary' ) {
	$class = 'button button--' . sanitize_html_class( $style );
	return '<a class="' . esc_attr( $class ) . '" href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a>';
}

function nst08_render_page_hero( $eyebrow, $title, $copy, $meta = array() ) {
	?>
	<section class="page-hero section-dark">
		<div class="container page-hero__grid">
			<div>
				<p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
				<h1><?php echo esc_html( $title ); ?></h1>
				<p class="lede"><?php echo esc_html( $copy ); ?></p>
				<div class="button-row">
					<?php echo wp_kses_post( nst08_button( 'Schedule a technical consult' ) ); ?>
					<?php echo wp_kses_post( nst08_button( 'View process', '#process', 'secondary' ) ); ?>
				</div>
			</div>
			<aside class="signal-panel" aria-label="<?php echo esc_attr__( 'Engagement snapshot', 'nolan-showcase-theme-08' ); ?>">
				<?php foreach ( $meta as $item ) : ?>
					<div>
						<span><?php echo esc_html( $item['label'] ); ?></span>
						<strong><?php echo esc_html( $item['value'] ); ?></strong>
					</div>
				<?php endforeach; ?>
			</aside>
		</div>
	</section>
	<?php
}

function nst08_render_service_page( $data ) {
	get_header();
	nst08_render_page_hero( $data['eyebrow'], $data['title'], $data['intro'], $data['meta'] );
	?>
	<main id="primary" class="site-main">
		<section class="section-light">
			<div class="container split">
				<div>
					<p class="eyebrow"><?php echo esc_html( $data['overview_label'] ); ?></p>
					<h2><?php echo esc_html( $data['overview_title'] ); ?></h2>
				</div>
				<p class="section-copy"><?php echo esc_html( $data['overview_copy'] ); ?></p>
			</div>
			<div class="container card-grid card-grid--three">
				<?php foreach ( $data['cards'] as $card ) : ?>
					<article class="layer-card">
						<span class="card-index"><?php echo esc_html( $card['index'] ); ?></span>
						<h3><?php echo esc_html( $card['title'] ); ?></h3>
						<p><?php echo esc_html( $card['copy'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
		<section class="section-dark" id="process">
			<div class="container split">
				<div>
					<p class="eyebrow"><?php echo esc_html( $data['checklist_label'] ); ?></p>
					<h2><?php echo esc_html( $data['checklist_title'] ); ?></h2>
				</div>
				<ul class="check-list">
					<?php foreach ( $data['checks'] as $check ) : ?>
						<li><?php echo esc_html( $check ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		<section class="section-accent">
			<div class="container">
				<p class="eyebrow"><?php echo esc_html__( 'Deliverables', 'nolan-showcase-theme-08' ); ?></p>
				<div class="deliverable-grid">
					<?php foreach ( $data['deliverables'] as $deliverable ) : ?>
						<div class="deliverable"><?php echo esc_html( $deliverable ); ?></div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<section class="section-light final-band" id="contact">
			<div class="container final-band__inner">
				<div>
					<p class="eyebrow"><?php echo esc_html__( 'Next step', 'nolan-showcase-theme-08' ); ?></p>
					<h2><?php echo esc_html( $data['cta_title'] ); ?></h2>
					<p><?php echo esc_html( $data['cta_copy'] ); ?></p>
				</div>
				<?php echo wp_kses_post( nst08_button( $data['cta_button'], home_url( '/contact/' ) ) ); ?>
			</div>
		</section>
	</main>
	<?php
	get_footer();
}

function nst08_render_post_summary() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
		<a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
		</a>
		<div class="post-card__meta"><?php echo esc_html( get_the_date() ); ?></div>
		<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
	</article>
	<?php
}
