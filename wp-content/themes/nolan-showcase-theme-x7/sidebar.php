<?php
/**
 * Sidebar template.
 *
 * @package Nolan_Showcase_Theme_X7
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="site-sidebar" aria-label="<?php esc_attr_e( 'Sidebar', 'nolan-showcase-theme-x7' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

