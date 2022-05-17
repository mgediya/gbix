<?php

$heading = get_sub_field( 'heading' );
$description = get_sub_field( 'description' );
$description = get_sub_field( 'description' );
$cta_label = get_sub_field( 'cta_label' );
$cta_open_account = get_sub_field( 'cta' );

echo '
<!-- why-gbix -->
<section class="why-gbix bg-light-green rounded-all triangle-left triangle-right">
    <div class="container">
        <div class="text-center pb-30">
            <h2 class="h2">'.$heading.'</h2>
        </div>';

         if ( have_rows('why_gbix_list') ) :
            echo '<div class="wg-wrap">';
             while( have_rows('why_gbix_list') ) : the_row();
                 $icon = get_sub_field('icon');
                 $title = get_sub_field('title');
                 $description = get_sub_field('description');

                 echo '
                 <div class="wg-block d-flex flex-nowrap">
                    <div class="wg-icon">
                        <img src="'.$icon.'" alt="gbix-service-icon">
                    </div>
                    <div class="wg-content">
                        <h4 class="h4">'.$title.'</h4>';
                        if($description) echo '<p>'.$description.'</p>';


                         if ( have_rows('why_gbix_team') ) :
                            echo '<div class="wg-outer-wrap">
                                    <div class="wg-outer">
                                        <div class="wg-inner d-flex flex-nowrap">';
                             while( have_rows('why_gbix_team') ) : the_row();
                        
                             $description = get_sub_field('description');
                             $title = get_sub_field('title');
                             $designation = get_sub_field('designation');

                             echo '
                                <div class="wg-inner-block">
                                    <q>'. $description.'</q>
                                    <h6 class="h6">'.$title.'</h6>
                                    <span>'.$designation.'</span>
                                </div>';
                        
                             endwhile;
                                echo ' </div>
                                </div>
                            </div>';
                         endif;

                    echo '</div>
                </div>';
        
             endwhile;

             if( $cta_open_account ) {
        echo '<div class="wg-bottom text-center pt-30">
        <h4 class="h4">'.$cta_label.'</h4>
            <a href="'.esc_url($cta_open_account["url"]).'" target="'.esc_attr( $cta_open_account['target'] ).'" class="btn">'.esc_html($cta_open_account['title']).'</a>
            </div>';
        }
        echo '</div>';
         endif;
        
        echo '
    </div>
</section>';
?>