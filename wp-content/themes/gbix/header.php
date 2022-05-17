<?php
/**
* Default site header.
*/

if ( !defined( 'ABSPATH' ) || !function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes() ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" >
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="theme-color" content="#7b0a2e"/>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />


	<?php wp_head(); ?>

    <?php 
    $brand_logo_white = get_field( 'brand_logo_white','option' );
    $brand_logo_green = get_field( 'brand_logo_green','option' );

    // NO BANNER
    $brand_logo = $brand_logo_white ;
    $loginBtn = '-white' ;
    $inner_banner = get_field( 'inner_banner' );

    if( $inner_banner['sub_heading'] === '' || $inner_banner['heading'] === '' ) {
        $headerVariant = 'header-colored';
        $brand_logo = $brand_logo_green ;
        $loginBtn = '' ;
    }

    ?>
</head>
<body <?php body_class() ?>>
	<?php
	echo '<!-- start -->
	<div class="wrapper">
		<div class="main-container">
		<!-- device menu -->
			<div class="mbnav d-md-none">
                <div class="mbnav__backdrop"></div>
                <div class="mbnav__state" data-clickable="true">
                    <!--  main responsive menu -->
                    <div class="mbnav__inner">';
                    if ( has_nav_menu( 'main-menu' ) ) {
                        wp_nav_menu(array('theme_location' => 'main-menu','container' => 'ul'));
                    }
                    echo'</div>
                </div>
            </div>';
            
			echo'<header class="main-header '.$headerVariant.'">
                    <div class="container-large d-flex align-items-center justify-content-between">
                    <!-- hamburger -->
                    <div class="d-lg-none">
                        <a href="javascript:;" class="hamburger"><span></span></a>
                    </div>
                    <div class="header-left">';
                        if($brand_logo){
                            echo'<a href="'.home_url( '/' ).'" class="brand">
                                <img src="'.$brand_logo['url'].'" alt="'.get_bloginfo('name').'">
                            </a>';
                        }
                    echo '</div>
                    <div class="header-right d-flex align-items-center">';
                            if ( has_nav_menu( 'main-menu' ) ) {
                                echo'<nav div class="navigation">';
                                        wp_nav_menu(array('theme_location' => 'main-menu','container' => 'ul'));
                                    echo'</nav>';
                            }
                            $open_account = get_field( 'open_account','option' );
                            $login = get_field( 'login','option' );
                            if( $open_account || $login ) {
                            echo '<div class="header-btn">
                                <a href="'.esc_url($open_account['url']).'" target="'.esc_attr( $open_account['target'] ).'" class="btn -account">'.esc_html($open_account['title']).'</a>
                                <a href="'.esc_url($login['url']).'" target="'.esc_attr( $login['target'] ).'" class="btn -outline -login '.$loginBtn.'">'.esc_html($login['title']).'</a>
                            </div>';
                            }
                    echo '</div>
                </div>
            </header>';
