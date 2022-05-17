<?php
/**
* Load the custom scripts and styles.
*/

if ( !defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

/**
 * [action__front_script Function to add script at front side]
 *
 */
function action__front_script() {
    // Register and enqueue style
    wp_register_style( THEME_PREFIX . '-wp-style', get_template_directory_uri() . '/style.css', array(), '1.0' );
    wp_enqueue_style( THEME_PREFIX . '-wp-style' );
    wp_register_style( THEME_PREFIX . '-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0' );
    wp_enqueue_style( THEME_PREFIX . '-style' );

    wp_register_style( THEME_PREFIX . '-typekit', 'https://use.typekit.net/xjw1kky.css', array(), '1.0' );
    wp_enqueue_style( THEME_PREFIX . '-typekit' );

    // Register and enqueue scripts js
    // Slick
    wp_register_script( THEME_PREFIX . '-slick-jquery', get_template_directory_uri() . '/assets/js/slick-1.8.1.min.js', array( 'jquery' ), '1.8.1', true );
    wp_enqueue_script( THEME_PREFIX . '-slick-jquery' );

    // overlayScrollbars
    wp_register_script( THEME_PREFIX . '-overlayScrollbars-jquery', get_template_directory_uri() . '/assets/js/jquery.overlayScrollbars.min.js', array( 'jquery' ), '1.8.1', true );
    wp_enqueue_script( THEME_PREFIX . '-overlayScrollbars-jquery' );

    // Device Menu
    wp_register_script( THEME_PREFIX . '-device-menu-jquery', get_template_directory_uri() . '/assets/js/device-menu.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( THEME_PREFIX . '-device-menu-jquery' );

    // Scripts
    wp_register_script( THEME_PREFIX . '-scripts-jquery', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( THEME_PREFIX . '-scripts-jquery' );
}
add_action( 'wp_enqueue_scripts', 'action__front_script' );