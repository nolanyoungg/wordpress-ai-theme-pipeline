<?php
/**
 * Search form template.
 *
 * @package Nolan_Showcase_Theme_X1
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'nolan-showcase-theme-x1' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr__( 'Search…', 'nolan-showcase-theme-x1' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<button type="submit" class="search-submit"><?php esc_html_e( 'Search', 'nolan-showcase-theme-x1' ); ?></button>
</form>

