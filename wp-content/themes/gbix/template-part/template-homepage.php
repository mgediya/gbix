<?php
/**
 * Template Name: Home Page
 */

get_header();

$hero_banner = get_field( 'hero_banner' );

if( $hero_banner ) {

	echo '
		<!-- banner area part -->
        <section class="hero-section">
            <div class="hero-top d-flex align-items-center shadow-bottom">
                <div class="hero-img">
                    <img src="'.esc_url( $hero_banner['image']['url'] ).'" alt="'.esc_url( $hero_banner['image']['alt'] ).'">
                </div>
                <div class="container hero-container">
                    <div class="row align-items-center">
                        <div class="cell-lg-6">
                            <div class="hero-left">
                                <h1 class="h1">'.$hero_banner['heading'].'</h1>';
                                if($hero_banner['description']) echo '<p>'.$hero_banner['description'].'</p>';
                                if ( $hero_banner['cta'] ) echo '<a href="'.$hero_banner['cta']['url'].'" target="'.$hero_banner['cta']['target'].'" class="btn">'.$hero_banner['cta']['title'].'</a>';
                            echo '</div>
                        </div>
                        <div class="cell-lg-6 d-lg-block d-none">
                            <div class="coin-wrap">
                                <img class="coin-1" src="'.get_template_directory_uri().'/assets/images/coin-1.png" alt="coin">
                                <img class="coin-2" src="'.get_template_directory_uri().'/assets/images/coin-2.png" alt="coin">
                                <img class="coin-3" src="'.get_template_directory_uri().'/assets/images/coin-3.png" alt="coin">
                                <img class="coin-4" src="'.get_template_directory_uri().'/assets/images/coin-4.png" alt="coin">
                                <div class="hero-right check-list">
                                <ul>';
                                foreach ($hero_banner['check_list'] as $list) :
                                    echo '<li>
                                            <h6 class="h6">'.$list['title'].'</h6>
                                            <p>'.$list['description'].'</p>
                                        </li>';
                                endforeach;

                                echo '</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-lg-none hero-right check-list">
                <div class="container">
                    <ul>';
                    foreach ($hero_banner['check_list'] as $list) :
                        echo '<li>
                                <h6 class="h6">'.$list['title'].'</h6>
                                <p>'.$list['description'].'</p>
                            </li>';
                    endforeach;
                    echo '</ul>';
                   
                    if ( $hero_banner['cta'] ) echo ' <div class="text-center"> <a href="'.$hero_banner['cta']['url'].'" target="'.$hero_banner['cta']['target'].'" class="btn">'.$hero_banner['cta']['title'].'</a></div>';
                echo '</div>
            </div>
        </section>
	';
}

    echo '<main class="main_content">';
        include(locate_template('template-part/components.php'));
    echo '</main>';
get_footer();
