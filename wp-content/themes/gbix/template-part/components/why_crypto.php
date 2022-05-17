<?php 
$heading = get_sub_field('heading');
$description = get_sub_field('description');
$image_caption = get_sub_field('image_caption');
$image = get_sub_field('image');
$image_info = get_sub_field('image_info');
echo '
<!-- why crypto  -->
<section class="why-crypto bg-lines-pattern">
    <div class="container">
        <div class="wc-row d-flex">
            <div class="cell-lg-5">
                <div class="wc-content-block">
                    <h2>'.$heading.'</h2>';
                    if ($description) echo $description ;
                echo '</div>
            </div>
            <div class="cell-lg-7">';
            if( $image_caption ) echo '<div class="wc-image-caption"><p>'.$image_caption.'</p></div>';
                echo '<div class="wc-image-block">
                    <img src="'.esc_url($image['url']).'" alt="'.esc_html($image['alt']).'">
                </div>';
                if( $image_info ) echo '<div class="wc-image-info"><span>'.$image_info.'</span></div>';
            echo '</div> 
        </div>
    </div>
</section>
';
?>