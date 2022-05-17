<?php
/**
* Load the custom functions.
*/

if ( !defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

/* ACF option */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> __( 'Theme Options', 'gbix' ),
		'menu_title'	=> __( 'Theme Options', 'gbix' ),
		'menu_slug' 	=> 'theme-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> __( 'Theme Options', 'gbix' ),
		'menu_title'	=> __( 'Theme Options', 'gbix' ),
		'parent_slug'	=> 'theme-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> __( '404', 'gbix' ),
		'menu_title'	=> __( '404', 'gbix' ),
		'parent_slug'	=> 'theme-options',
	));
}

/* SVG icon function start */
function svg_icon( $wp_icon, $classes="", $width="", $height="" ){
	ob_start();
		$context = stream_context_create(
			array(
				"http" => array(
					"header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
				)
			)
		);
		$wp_iconSVG = file_get_contents( $wp_icon , false, $context);
		$dom = new DOMDocument();
		@$dom->loadHTML($wp_iconSVG);
		foreach($dom->getElementsByTagName('svg') as $element) {
			if( !empty( $classes ) ){
				$element->setAttribute('class', $classes );
			}
			if( !empty( $width ) ){
				$element->setAttribute('width', $width );
			}
			if( !empty( $height ) ){
				$element->setAttribute('height', $height );
			}
		}
		$dom->saveHTML();
		$wp_iconSVG = $dom->saveHTML();
		echo $wp_iconSVG;
	return ob_get_clean();
}
/* SVG icon function end */