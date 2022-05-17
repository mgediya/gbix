<?php

$title = get_sub_field( 'title' );
$description = get_sub_field( 'description' );

echo '
<!-- Crypto Platforms -->
<section class="crypto-platforms bg-light-green rounded-all triangle-left shadow-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="cell-lg-6">
                <div class="cp-content">
                    <div class="sec-heading mb-30">
                        <h2 class="h2 mb-30">'.$title.'</h2>';
                        if( $description ) echo '<p>'.$description.'</p>';
                    echo '</div>';
                    if ( have_rows('cryptos_list') ) :
                    echo '<div class="row justify-content-center">';
                    while( have_rows('cryptos_list') ) : the_row();
                            echo '<div class="cell-lg-4 cell-md-3 cell-sm-4 cell-6 cp-list d-flex flex-nowrap align-items-center">
                                <div class="cp-list-icon"><img src="'.esc_url( get_sub_field('icon')['url'] ).'" alt="'.esc_url( get_sub_field('icon')['alt'] ).'"></div>
                                <span>'.get_sub_field('name').'</span>
                            </div>';
                        endwhile;
                        echo '</div>';
                    endif;
                echo '</div>
            </div>
            <div class="cell-lg-6">
                <div class="cp-img">
                    <img src="'.esc_url( get_sub_field('cryptos_image')['url'] ).'" alt="'.esc_url( get_sub_field('cryptos_image')['alt'] ).'">
                </div>
            </div>
        </div>
    </div>
</section>';
?>