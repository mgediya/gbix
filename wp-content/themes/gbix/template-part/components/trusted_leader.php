<?php 

$heading = get_sub_field( 'heading' );
$description = get_sub_field( 'description' );

echo '
<!-- Trusted Leader -->
<section class="trusted-leader bg-lines-pattern">
    <div class="container tl-wrap">
        <div class="coin-wrap">
            <img class="coin-1" src="'.get_template_directory_uri().'/assets/images/coin-3.png" alt="coin">
            <img class="coin-2" src="'.get_template_directory_uri().'/assets/images/coin-4.png" alt="coin">
            <img class="coin-3" src="'.get_template_directory_uri().'/assets/images/coin-5.png" alt="coin">
            <img class="coin-4" src="'.get_template_directory_uri().'/assets/images/coin-2.png" alt="coin">
        </div>
        <div class="tl-content text-center">
            <h2 class="h2">'.$heading.'</h2>';
            if ( $description ) echo '<div class="px-xl-30">'.$description.'</div>';
        echo '</div>
    </div>
</section>';
?>