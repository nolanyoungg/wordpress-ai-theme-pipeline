<?php
/**
 * Search form template.
 *
 * Purpose:
 * - Provides the theme’s styled search form, used by `get_search_form()`.
 *
 * @package Nolan_Showcase_Theme_X11
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="search-form__label">
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'nolan-showcase-theme-x11' ); ?></span>
		<input type="search" class="search-form__field" placeholder="<?php echo esc_attr__( 'Search…', 'nolan-showcase-theme-x11' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<button type="submit" class="btn btn-secondary btn-smball"><?php esc_html_e( 'Search', 'nolan-showcase-theme-x11' ); ?></button>
</form>
