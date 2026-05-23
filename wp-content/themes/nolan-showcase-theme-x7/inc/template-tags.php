<?php
/**
 * Template tags.
 *
 * @package Nolan_Showcase_Theme_X7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nolan_showcase_x7_posted_on' ) ) {
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 *
	 * @return void
	 */
	function nolan_showcase_x7_posted_on() {
		$time_string = sprintf(
			'<time class="entry-date published updated" datetime="%1$s">%2$s</time>',
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);

		echo '<span class="post-meta__item post-meta__date">' . wp_kses_post( $time_string ) . '</span>';
	}
}

if ( ! function_exists( 'nolan_showcase_x7_posted_by' ) ) {
	/**
	 * Prints HTML with meta information for the current author.
	 *
	 * @return void
	 */
	function nolan_showcase_x7_posted_by() {
		$author = sprintf(
			'<a class="url fn n" href="%1$s">%2$s</a>',
			esc_url( get_author_posts_url( (int) get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		);

		echo '<span class="post-meta__item post-meta__author">' . wp_kses_post( $author ) . '</span>';
	}
}

if ( ! function_exists( 'nolan_showcase_x7_entry_footer' ) ) {
	/**
	 * Prints categories/tags footer.
	 *
	 * @return void
	 */
	function nolan_showcase_x7_entry_footer() {
		if ( 'post' !== get_post_type() ) {
			return;
		}

		$categories = get_the_category_list( esc_html__( ', ', 'nolan-showcase-theme-x7' ) );
		if ( $categories ) {
			echo '<span class="post-meta__item post-meta__cats">' . wp_kses_post( $categories ) . '</span>';
		}

		$tags = get_the_tag_list( '', esc_html__( ', ', 'nolan-showcase-theme-x7' ) );
		if ( $tags ) {
			echo '<span class="post-meta__item post-meta__tags">' . wp_kses_post( $tags ) . '</span>';
		}
	}
}

