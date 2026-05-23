<?php
/**
 * Search form template.
 *
 * @package Nolan_Showcase_Theme_X7
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="search-form__label" for="search-field">
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'nolan-showcase-theme-x7' ); ?></span>
	</label>
	<input id="search-field" class="search-form__field" type="search" placeholder="<?php echo esc_attr__( 'Search…', 'nolan-showcase-theme-x7' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	<button class="btn btn-ghost btn-small" type="submit"><?php esc_html_e( 'Search', 'nolan-showcase-theme-x7' ); ?></button>
</form>

