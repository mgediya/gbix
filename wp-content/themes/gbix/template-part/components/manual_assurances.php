<?php 
$heading = get_sub_field('heading');

echo '
<!-- Manual Assurances -->
<section class="manual-assurances text-center">
    <div class="container">
        <div class="sec-heading pb-30">
            <h2 class="h2">'.$heading.'</h2>
        </div>';
         if ( have_rows('manual_block') ) :
            echo ' <div class="row">';
             while( have_rows('manual_block') ) : the_row();
                $icon = get_sub_field('icon');
                $name = get_sub_field('name');
        
                 echo '
                 <div class="cell-md-4">
                    <div class="ma-block">
                        <div class="ma-icon d-flex align-items-center justify-content-center">
                            <img src="'.esc_url($icon['url']).'" alt="'.esc_html($icon['alt']).'">
                        </div>
                        <h4 class="h4">'.$name.'</h4>
                    </div>
                </div>
                 ';
        
             endwhile;
             echo '</div>';
        
         endif;
        
       
            
    echo '</div>
</section>
';
?>