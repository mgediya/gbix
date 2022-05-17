<?php

$title = get_sub_field( 'title' );
$stats = get_sub_field( 'stats' );
$description = get_sub_field( 'description' );
$image_desktop = get_sub_field( 'image_desktop' );
$image_mobile = get_sub_field( 'image_mobile' );

echo '
<!-- Annual Return -->
<section class="annual-return">
    <div class="container">
        <div class="row">
            <div class="cell-xxl-3 cell-lg-6">
                <div class="ar-content">
                <h2 class="h2">'.$title.'</h2>';
                    if ( have_rows('stats') ) :
                        echo '<div class="ar-block-wrap d-flex">';
                        while( have_rows('stats') ) : the_row();
                            echo '<div class="ar-block">
                            <div class="ar-block-percent -first">'.get_sub_field('count').'</div>
                            <p>'.get_sub_field('type').'</p>
                            </div>';
                        endwhile;
                            echo ' </div>';
                        endif;
                    if($description) echo '<p>'.$description.'</p>';
                echo '</div>
                
            </div>
            <div class="cell-xxl-9 cell-lg-6 d-flex align-items-end">
                <div class="ar-img">
                    <img class="d-md-block d-none" src="'.esc_url( $image_desktop['url'] ).'" alt="'.esc_url( $image_desktop['alt'] ).'">
                    <img class="d-md-none d-block"src="'.esc_url( $image_mobile['url'] ).'" alt="'.esc_url( $image_mobile['alt'] ).'">
                </div>
            </div>
        </div>
    </div>
</section>';
?>