<?php 

$heading = get_sub_field('heading');
$cta = get_sub_field('cta');

echo '
<!-- crypto currencies -->
<section class="crypto-currencies why-gbix bg-light-green rounded-all triangle-left">
    <div class="container">
        <div class="text-center pb-30 sec-heading">
            <h2 class="h2">'.$heading.'</h2>
        </div>
        <div class="cc-logo-grid">';
            if ( have_rows('cryptos_list') ) :
                echo '<div class="row">';
                while( have_rows('cryptos_list') ) : the_row();
                $icon = get_sub_field('icon');
                $name = get_sub_field('name');
            
                    echo '
                    <div class="cell-lg-3 cell-md-3 cell-sm-4 cell-6 cp-list d-flex flex-nowrap align-items-center">
                    <div class="cp-list-icon">
                        <img src="'.esc_url($icon['url']).'" alt="'.esc_html($icon['alt']).'">
                    </div>
                    <span>'.$name.'</span>
                </div>
                    ';
            
                endwhile;
                echo '</div>';
            
            endif;
    
        echo '</div>
        <div class="text-center pb-30">';
        if( $cta ) echo '<a href="'.esc_url($cta['url']).'" class="btn" target="'.esc_attr($cta['target']).'">'.esc_html($cta['title']).'</a>';
        echo '</div>
    </div>
</section>
';
?>