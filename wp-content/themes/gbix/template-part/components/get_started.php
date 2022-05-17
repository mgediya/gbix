<?php
$heading = get_sub_field('heading');
$cta = get_sub_field('cta');

echo '
<!-- section Get Started -->
<section class="get-started bg-light-green rounded-all triangle-left overflow-hidden shadow-bottom">
    <div class="container">
        <div class="text-center sec-heading gs-title">
            <h2 class="h2">'.$heading.'</h2>
        </div>
        <!-- three column grid -->';
         if ( have_rows('get_started_card') ) : 
            echo '<div class="d-flex gs-row">';
             while( have_rows('get_started_card') ) : the_row();
                $icon = get_sub_field('icon');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                echo '
                <div class="cell-lg-4 cell-md-6 mb-30">
                    <div class="gs-card">
                        <div class="gs-card-icon">
                        <img src="'.esc_url($icon['url']).'" alt="'.esc_html($icon['alt']).'">
                        </div>
                        <div class="gs-card-content">
                            <h4>'.$title.'</h4>';
                            if( $description ) echo '<p>'.$description.'</p>';
                        echo '</div>
                    </div>
                </div>
                ';
             endwhile; 
        echo ' </div>';
         endif;
        
       
        if( $cta )  echo '<div class="gs-cta-block"> <a href="'.esc_url($cta['url']).'" class="btn">'.esc_attr($cta['title']).'</a> </div>';
       echo'
    </div>
</section>
';
?>