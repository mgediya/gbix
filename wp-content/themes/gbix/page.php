<?php
/**
 * Default page tmeplate.
 */
if (!defined('ABSPATH') || !function_exists('add_filter')) {
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	exit;
}

get_header();

$inner_banner = get_field( 'inner_banner' );

if( $inner_banner['sub_heading'] || $inner_banner['heading']  ) {

	echo '
    <!-- banner area part -->
    <section class="inner-hero">
        <div class="container">
            <div class="inner-hero-heading text-center">';
                if( $inner_banner['sub_heading'] ) echo '<div class="top-title">'.$inner_banner['sub_heading'].'</div>';
                echo '<h1 class="h1">'.$inner_banner['heading'].'</h1>
            </div>
        </div>
    </section>
	';
}

    echo '<main class="main_content">';
        include(locate_template('template-part/components.php'));
    echo '</main>';
get_footer();
