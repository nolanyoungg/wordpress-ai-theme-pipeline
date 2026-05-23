<?php
/**
 * Widgets/sidebars.
 *
 * @package Nolan_Showcase_Theme_X7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name'          => __( 'Sidebar', 'nolan-showcase-theme-x7' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Add widgets here to appear in the sidebar.', 'nolan-showcase-theme-x7' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget__title h5">',
				'after_title'   => '</h2>',
			)
		);
	}
);

