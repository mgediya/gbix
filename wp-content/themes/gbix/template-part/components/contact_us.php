<?php 

$sub_heading = get_sub_field( 'sub_heading' );
$heading = get_sub_field( 'heading' );
$description = get_sub_field( 'description' );
$address = get_sub_field( 'address' );
$phone = get_sub_field( 'phone' );
$email = get_sub_field( 'email' );
$select_page = get_sub_field( 'select_page' );
$form_shortcode = get_sub_field( 'form_shortcode' );

$secltionClass = "";
if( $select_page == "about" || $select_page == "invest" ){
    $secltionClass = 'bg-gradient space-minus';
}elseif ( $select_page == "security" ){
    $secltionClass = 'bg-gradient space-bottom-minus rounded-top';
}else{
    $secltionClass = 'bg-lines-pattern';
}

echo '
<section class="contact-us '.$secltionClass.'">
    <div class="container">
        <div class="row">
            <div class="cell-lg-6">
                <div class="cu-content pr-xl-30">';
                    if( $sub_heading ) echo '<div class="top-title">'.$sub_heading.'</div>';
                    if( $heading ) echo '<h2 class="h2">'.$heading.'</h2>';
                    if( $description ) echo '<p>'.$description.'</p>';
                    echo '<ul>';
                            $phoneNbr = preg_replace( '/[^A-Za-z0-9\-]/', '',$phone );
                            if( $address ) echo '<li><i class="icon-location-pin"></i><address>'.$address.'</address></li>';
                            if( $phone ) echo '<li><i class="icon-phone"></i><a href="tel:'.$phoneNbr.'">'.$phone.'</a></li>';
                            if( $email ) echo '<li><i class="icon-mail"></i><a href="mailto:'.$email.'">'.$email.'</a></li>';
                    echo  '</ul>
                </div>
            </div>
            <div class="cell-lg-6">
                <div class="cu-form pl-xl-30">';
                echo do_shortcode ($form_shortcode);
                echo '</div>
            </div>
        </div>
    </div>
</section>';
?>