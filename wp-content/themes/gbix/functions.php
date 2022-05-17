<?php
/**
* Load the theme.
*/

if ( !defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

/**
 * Define theme's prefix.
 */
define( 'THEME_PREFIX', 'gbix' );

/**
 * - Register Navigation Name
 * @var array
 */
register_nav_menus( array(
	'main-menu' => 'Main Menu',
	'footer-menu-1' => 'Footer Menu 1',
	'footer-menu-2' => 'Footer Menu 2',
	'footer-menu-3' => 'Footer Menu 3',
) );

/**
 * Switch default core markup to output valid HTML5.
 */
add_theme_support( 'html5', [ 'script', 'style' ] );

/**
 * Declare support for title theme feature.
 */
add_theme_support( 'title-tag' );

/**
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

/**
 * Add theme support files.
 */
require get_template_directory() . '/includes/custom-functions.php';
require get_template_directory() . '/includes/custom-action.php';
require get_template_directory() . '/includes/custom-filter.php';
require get_template_directory() . '/includes/theme-scripts.php';