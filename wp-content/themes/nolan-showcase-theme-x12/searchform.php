<?php
/**
 * Search form template.
 *
 * Connects get_search_form() calls to an accessible search field. Assumes
 * WordPress handles query processing.
 *
 * @package Nolan_Showcase_Theme_X12
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field"><?php esc_html_e( 'Search', 'nolan-showcase-theme-x12' ); ?></label>
	<div class="inline-form">
		<input id="search-field" type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php echo esc_attr__( 'Search resources...', 'nolan-showcase-theme-x12' ); ?>">
		<button class="button button-primary" type="submit"><?php esc_html_e( 'Search', 'nolan-showcase-theme-x12' ); ?></button>
	</div>
</form>
