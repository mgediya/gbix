<?php


if ( have_rows('two_column_block') ) :
    echo '
    <!-- Two Column -->
    <section class="two-column-comp bg-white">
    <div class="tcc-wrapper">';

    while( have_rows('two_column_block') ) : the_row();


    $heading = get_sub_field('heading');
    $description = get_sub_field('description');
    $cta = get_sub_field('cta');
    $image = get_sub_field('image');

    echo '<div class="tcc-row">
        <div class="tcc-col">
            <div class="tcc-content-block">';
                if( $heading ) echo '<h2>'.$heading.'</h2>';
                echo $description;
                if( $cta ) echo '<a href="'.esc_url($cta['url']).'" class="btn">'.esc_attr($cta['title']).'</a>';
            echo '</div>
        </div>
        <div class="tcc-col">
            <div class="tcc-image-block">
                <img src="'.esc_url($image['url']).'" alt="'.esc_attr($image['alt']).'">
            </div>
        </div>
    </div>';
endwhile;
echo '</div>
</section>
';

endif;
?>