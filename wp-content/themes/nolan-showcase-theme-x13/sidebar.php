<?php
/**
 * Purpose: Sidebar widget area.
 * WordPress role: Included by templates that support secondary content.
 * Related files: functions.php, index.php, single.php.
 * Important behavior: Renders a useful fallback when no widgets are assigned.
 *
 * @package Nolan_Showcase_Theme_X13
 */
?>
<aside class="sidebar" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'nolan-showcase-theme-x13' ); ?>">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php else : ?>
		<section class="widget"><h2><?php esc_html_e( 'Need website help?', 'nolan-showcase-theme-x13' ); ?></h2><p><?php esc_html_e( 'Ask about design, support, fixes, analytics, performance, WooCommerce, or AI automation.', 'nolan-showcase-theme-x13' ); ?></p><a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'nolan-showcase-theme-x13' ); ?></a></section>
	<?php endif; ?>
</aside>
