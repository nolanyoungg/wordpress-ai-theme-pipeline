<?php
/**
 * Theme setup.
 *
 * @package Nolan_Showcase_Theme_X7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Nolan_Showcase_X7_Theme_Setup {
	/**
	 * Bootstrap hooks.
	 *
	 * @return void
	 */
	public static function init() {
		add_action( 'after_setup_theme', array( __CLASS__, 'setup' ) );
		add_action( 'after_setup_theme', array( __CLASS__, 'register_menus' ) );
		add_action( 'init', array( __CLASS__, 'register_image_sizes' ) );
	}

	/**
	 * Theme supports.
	 *
	 * @return void
	 */
	public static function setup() {
		load_theme_textdomain( 'nolan-showcase-theme-x7', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 64,
				'width'       => 64,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'align-wide' );
	}

	/**
	 * Menus.
	 *
	 * @return void
	 */
	public static function register_menus() {
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'nolan-showcase-theme-x7' ),
				'footer'  => __( 'Footer Menu', 'nolan-showcase-theme-x7' ),
				'social'  => __( 'Social Menu', 'nolan-showcase-theme-x7' ),
			)
		);
	}

	/**
	 * Image sizes.
	 *
	 * @return void
	 */
	public static function register_image_sizes() {
		add_image_size( 'nolan_x7_card', 1200, 900, true );
		add_image_size( 'nolan_x7_feature', 1600, 1000, true );
	}
}

