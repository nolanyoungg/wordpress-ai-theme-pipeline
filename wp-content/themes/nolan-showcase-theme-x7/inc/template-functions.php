<?php
/**
 * Template helper functions.
 *
 * @package Nolan_Showcase_Theme_X7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme URI helper.
 *
 * @param string $path Relative path.
 * @return string
 */
function nolan_showcase_x7_asset( $path ) {
	return esc_url( NOLAN_SHOWCASE_X7_URI . ltrim( $path, '/' ) );
}

/**
 * Fallback menu links for primary navigation.
 *
 * @return array<int, array{label:string,url:string}>
 */
function nolan_showcase_x7_fallback_nav_links() {
	return array(
		array(
			'label' => __( 'What We Do', 'nolan-showcase-theme-x7' ),
			'url'   => home_url( '/what-we-do/' ),
		),
		array(
			'label' => __( 'Who We Are', 'nolan-showcase-theme-x7' ),
			'url'   => home_url( '/who-we-are/' ),
		),
		array(
			'label' => __( 'Work', 'nolan-showcase-theme-x7' ),
			'url'   => home_url( '/work/' ),
		),
		array(
			'label' => __( 'Resources', 'nolan-showcase-theme-x7' ),
			'url'   => home_url( '/resources/' ),
		),
		array(
			'label' => __( 'Contact', 'nolan-showcase-theme-x7' ),
			'url'   => home_url( '/contact/' ),
		),
	);
}

/**
 * Safe excerpt.
 *
 * @param int $length Max words.
 * @return string
 */
function nolan_showcase_x7_get_excerpt( $length = 28 ) {
	$excerpt = wp_strip_all_tags( get_the_excerpt() );
	$words   = preg_split( '/\\s+/', trim( $excerpt ) );

	if ( ! is_array( $words ) ) {
		return '';
	}

	if ( count( $words ) <= $length ) {
		return $excerpt;
	}

	return implode( ' ', array_slice( $words, 0, $length ) ) . '…';
}

/**
 * Accessible pagination wrapper.
 *
 * @return void
 */
function nolan_showcase_x7_the_posts_pagination() {
	the_posts_pagination(
		array(
			'mid_size'           => 1,
			'prev_text'          => esc_html__( 'Previous', 'nolan-showcase-theme-x7' ),
			'next_text'          => esc_html__( 'Next', 'nolan-showcase-theme-x7' ),
			'screen_reader_text' => esc_html__( 'Posts navigation', 'nolan-showcase-theme-x7' ),
		)
	);
}

