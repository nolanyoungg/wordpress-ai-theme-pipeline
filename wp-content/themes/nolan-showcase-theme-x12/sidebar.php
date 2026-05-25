<?php
/**
 * Sidebar template.
 *
 * Connects registered widget areas to blog/archive layouts. Assumes widgets
 * are optional; a helpful default is shown when none are configured.
 *
 * @package Nolan_Showcase_Theme_X12
 */
?>
<aside class="sidebar" aria-label="<?php echo esc_attr_x( 'Sidebar', 'aria label', 'nolan-showcase-theme-x12' ); ?>">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php else : ?>
		<section class="widget">
			<h2 class="widget-title"><?php esc_html_e( 'Plan your next website move', 'nolan-showcase-theme-x12' ); ?></h2>
			<p><?php esc_html_e( 'Use resources, service pages, and the contact form to prioritize design, maintenance, performance, SEO, analytics, and automation needs.', 'nolan-showcase-theme-x12' ); ?></p>
		</section>
	<?php endif; ?>
</aside>
