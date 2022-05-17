<?php
$title = get_sub_field( 'title' );

echo '
<!-- your journey -->
<section class="your-journey bg-lines-pattern">';
    if( $title ) {
        echo '<div class="container">
            <div class="small-title">'.$title.'</div>
        </div>';
    }

    if ( have_rows('cryptos_services') ) :
    echo '<div class="yj-wrap">
        <div class="yj-wrap-inner">
            <div class="yj-block-wrap" id="yj-block-wrap">';
            while( have_rows('cryptos_services') ) : the_row();
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $cta_open_account = get_sub_field('cta_open_account');
            $cta_learn_more = get_sub_field('cta_learn_more');
            $image = get_sub_field('image');

                echo '<div class="yj-block">
                    <div class="row align-items-center">
                        <div class="cell-md-6">
                            <div class="yj-block-content">
                                <h2 class="h2">'.$title.'</h2>';
                                if( $description ) echo '<p>'.$description.'</p>';
                                if( $cta_open_account || $cta_learn_more ) {
                                echo '<div class="btn-wrap">';
                                if( $cta_open_account ) echo '<a href="'.esc_url($cta_open_account["url"]).'" target="'.esc_attr( $cta_open_account['target'] ).'" class="btn">'.esc_html($cta_open_account['title']).'</a>';
                                if( $cta_learn_more ) echo '<a href="'.esc_url($cta_learn_more['url']).'" target="'.esc_attr( $cta_learn_more['target'] ).'" class="btn -outline">'.esc_html($cta_learn_more['title']).'</a>';
                                echo '</div>';
                                }
                            echo '</div>
                        </div>
                        <div class="cell-md-6">
                            <div class="yj-block-img">
                                <img src="'.esc_url( $image['url'] ).'"  alt="'.esc_url( $image['alt'] ).'">
                            </div>
                        </div>
                    </div>
                </div>';
            endwhile;

            echo '</div>
        </div>
    </div>';
endif;

echo '</section>';
?>