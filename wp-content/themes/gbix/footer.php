<?php
/**
* The template for displaying the footer
*/

$address = get_field( 'address','option' );
$email = get_field( 'email','option' );
$phone = get_field( 'phone','option' );
$copyright = get_field( 'copyright','option' );
$brand_logo_white = get_field( 'brand_logo_white','option' );

		echo '
		</div>
        <!-- footer part -->
        <footer class="main-footer">
            <div class="container-large">
                <div class="row justify-content-between">
                    <div class="cell-xxl-7 cell-lg-6 footer-left">
                        <a href="'.home_url( '/' ).'" class="brand">
                            <img src="'.$brand_logo_white['url'].'" alt="'.get_bloginfo('name').'">
                        </a>
                        <ul>';
                            $phoneNbr = preg_replace( '/[^A-Za-z0-9\-]/', '',$phone );
                            if( $address ) echo '<li><i class="icon-location-pin"></i><address>'.$address.'</address></li>';
                            if( $phone ) echo '<li><i class="icon-phone"></i><a href="tel:'.$phoneNbr.'">'.$phone.'</a></li>';
                            if( $email ) echo '<li><i class="icon-mail"></i><a href="mailto:'.$email.'">'.$email.'</a></li>';
                       echo  '</ul>
                        <div class="d-lg-block d-none footer-bottom">
                            <p>Copyright 2022 GBIX. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="cell-xxl-5 cell-lg-6 footer-right">
                        <div class="row">
                            <div class="cell-sm-4 cell-6 footer-quick-links">';
                                wp_nav_menu(array('theme_location' => 'footer-menu-1','container' => 'ul'));
                            echo '</div>
                            <div class="cell-sm-8 cell-6">
                                <div class="row">
                                    <div class="cell-sm-6">';
                                    wp_nav_menu(array('theme_location' => 'footer-menu-2','container' => 'ul'));
                                    echo '</div>
                                    <div class="cell-sm-6">';
                                    wp_nav_menu(array('theme_location' => 'footer-menu-3','container' => 'ul'));
                                    echo '</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-12 d-lg-none footer-bottom">
                        <p>Copyright 2022 GBIX. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>';
		wp_footer();
	echo '</body>
</html>';
