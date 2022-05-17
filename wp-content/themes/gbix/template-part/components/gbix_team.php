<?php

$heading = get_sub_field( 'heading' );

echo '
<!-- Meet Team -->
    <section class="meet-team bg-light-green rounded-all triangle-left">
        <div class="container pb-30">
            <div class="sec-heading text-center mb-lg-30">
                <h2 class="h2">'.$heading.'</h2>
            </div>
        </div>';
        if ( have_rows('team') ) :
            echo '<div class="mt-slider d-flex flex-nowrap">';

            while( have_rows('team') ) : the_row();

                $image = get_sub_field('image');
                $name = get_sub_field('name');
                $designation = get_sub_field('designation');
                $linkedin = get_sub_field('linkedin');

                echo '<div class="mt-item">
                    <div class="mt-img">
                        <img src="'.esc_url($image['url']).'" alt="'.esc_attr($image['alt']).'">';
                        if ( $linkedin ) echo '<a href="'.$linkedin.'" class="icon-linkedin social-icon" target="_blank"></a>';
                    echo '</div>
                    <div class="mt-info text-center">
                        <h6 class="h6">'.$name.'</h6>';
                        if ( $designation ) echo '<p>'.$designation.'</p>';
                    echo '</div>
                </div>';

            endwhile;
            echo '</div>';

        endif;

    echo '</section>';
?>