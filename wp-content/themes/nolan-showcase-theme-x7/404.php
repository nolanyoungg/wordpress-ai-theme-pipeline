<?php
/**
 * 404 template.
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main section section--404">
	<div class="container container--narrow">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Page not found', 'nolan-showcase-theme-x7' ); ?></h1>
			<p class="page-subtitle"><?php esc_html_e( 'The page you’re looking for may have moved. Try a search, or explore the pages below.', 'nolan-showcase-theme-x7' ); ?></p>
		</header>

		<div class="card card--padded">
			<?php get_search_form(); ?>
			<hr class="hr">
			<div class="quick-links">
				<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-x7' ); ?></a>
				<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x7' ); ?></a>
				<a class="btn btn-text" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'nolan-showcase-theme-x7' ); ?></a>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();

