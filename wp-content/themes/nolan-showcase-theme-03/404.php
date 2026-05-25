<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme_03
 */

get_header();
?>

<main id="main-content" class="site-main">
	<section class="section section--tight">
		<div class="container">
			<div class="not-found">
				<p class="kicker"><?php esc_html_e( '404', 'nolan-showcase-theme-03' ); ?></p>
				<h1><?php esc_html_e( 'This page slipped out of frame.', 'nolan-showcase-theme-03' ); ?></h1>
				<p><?php esc_html_e( 'Try one of these links, or search the journal.', 'nolan-showcase-theme-03' ); ?></p>

				<div class="cluster">
					<a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'nolan-showcase-theme-03' ); ?></a>
					<a class="button button--secondary" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-03' ); ?></a>
					<a class="button button--ghost" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-03' ); ?></a>
				</div>

				<?php get_search_form(); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

