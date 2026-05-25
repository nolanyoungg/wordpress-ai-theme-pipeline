<?php
/**
 * Purpose: Accessible search form.
 * WordPress role: Used by get_search_form().
 * Related files: search.php, 404.php, sidebar.php.
 * Important behavior: Escapes query and labels the input for assistive technology.
 *
 * @package Nolan_Showcase_Theme_X13
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'nolan-showcase-theme-x13' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr__( 'Search resources', 'nolan-showcase-theme-x13' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<button class="button" type="submit"><?php esc_html_e( 'Search', 'nolan-showcase-theme-x13' ); ?></button>
</form>
