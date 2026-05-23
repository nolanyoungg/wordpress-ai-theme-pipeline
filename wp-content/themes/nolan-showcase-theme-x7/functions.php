<?php
/**
 * Theme functions and definitions.
 *
 * @package Nolan_Showcase_Theme_X7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NOLAN_SHOWCASE_X7_VERSION', '1.0.0' );
define( 'NOLAN_SHOWCASE_X7_DIR', trailingslashit( get_template_directory() ) );
define( 'NOLAN_SHOWCASE_X7_URI', trailingslashit( get_template_directory_uri() ) );

require_once NOLAN_SHOWCASE_X7_DIR . 'inc/class-theme-setup.php';
require_once NOLAN_SHOWCASE_X7_DIR . 'inc/class-enqueue-scripts.php';
require_once NOLAN_SHOWCASE_X7_DIR . 'inc/template-tags.php';
require_once NOLAN_SHOWCASE_X7_DIR . 'inc/template-functions.php';
require_once NOLAN_SHOWCASE_X7_DIR . 'inc/widgets.php';

Nolan_Showcase_X7_Theme_Setup::init();
Nolan_Showcase_X7_Enqueue_Scripts::init();

