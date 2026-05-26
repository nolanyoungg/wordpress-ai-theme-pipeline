<?php
/**
 * Search form template.
 *
 * @package Nolan_Showcase_Theme_07
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="search-form__label">
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'nolan-showcase-theme-07' ); ?></span>
		<input type="search" class="search-form__field" placeholder="<?php echo esc_attr__( 'Search…', 'nolan-showcase-theme-07' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<button type="submit" class="btn btn-secondary btn-small"><?php esc_html_e( 'Search', 'nolan-showcase-theme-07' ); ?></button>
</form>

