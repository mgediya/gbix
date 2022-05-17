<?php

$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$description = get_sub_field('description');
$book_image = get_sub_field('book_image');
$form_shortcode = get_sub_field( 'form_shortcode' );
$select_page = get_sub_field( 'select_page' );

$secltionClass = "";

if( $select_page == "home" ){
    $secltionClass = 'space-minus';
}elseif ( $select_page == "contact" ){
    $secltionClass = 'space-bottom-minus rounded-top';
}else{
    $secltionClass = 'space-bottom-minus rounded-top';
}

echo '
<!-- free-report -->
<section class="free-report '.$secltionClass.'">
    <div class="fr-wrap">
        <div class="row align-items-end">
            <div class="cell-lg-6">
                <div class="fr-content">
                    <div class="top-title">'.$sub_heading.'</div>
                    <h2 class="h2">'.$heading.'</h2>
                    <p>'.$description.'</p>
                    <div class="fr-form">';
                    echo do_shortcode ($form_shortcode);
                    echo '</div>
                </div>
            </div>
            <div class="cell-lg-6">
                <div class="fr-img">
                    <img src="'.esc_url($book_image['url']).'" alt="'.esc_attr($book_image['alt']).'">
                </div>
            </div>
        </div>
    </div>
</section>';
?>