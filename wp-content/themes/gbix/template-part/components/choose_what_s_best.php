<?php

$heading = get_sub_field( 'heading' );
$cta = get_sub_field( 'cta' );

echo '
<!-- whats best -->
<section class="what-is-best">
    <div class="container">
        <div class="text-center pb-30">
            <h2 class="h2">'.$heading.'</h2>
        </div>';

        if ( have_rows('select_plan') ) :
        
            echo '<div class="row no-gutters align-items-center justify-content-center">';

            $i = 1;
            while( have_rows('select_plan') ) : the_row();
        
                $icon_normal = get_sub_field('icon_normal');
                $icon_selected = get_sub_field('icon_selected');
                $sub_heading = get_sub_field('sub_heading');
                $heading = get_sub_field('heading');
                $description = get_sub_field('description');
                echo '<div class="cell-lg-6 wib-cell">';
                    if ($i == 1) {
                        echo '<input type="radio" id="wib-radio-'.$i.'" name="wib-radio" checked="">';
                    } else{
                        echo '<input type="radio" id="wib-radio-'.$i.'" name="wib-radio" >';
                    }
                    
                    echo '<label for="wib-radio-'.$i.'" class="wib-block">
                        <div class="wib-icon">
                            <img class="icon-normal" src="'.esc_url($icon_normal['url']).'" alt="'.esc_html($icon_normal['alt']).'">
                            <img class="icon-selected" src="'.esc_url($icon_selected['url']).'" alt="'.esc_html($icon_selected['alt']).'">
                        </div>';
                        if( $sub_heading ) echo '<div class="top-title">'.$sub_heading.'</div>';
                        if ( $heading ) echo '<h4 class="h4">'.$heading.'</h4>';
                        if ( $description ) echo '<p>'.$description.'</p>';
                    echo '</label>
                </div>';
                $i++;
            endwhile;
            echo '</div>';
        
        endif;
        if( $cta ) echo '<div class="text-center pt-30"><a href="'.esc_url($cta['url']).'" class="btn">'.esc_attr($cta['title']).'</a></div>';
        echo '
    </div>
</section>
';
?>