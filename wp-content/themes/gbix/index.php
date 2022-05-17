<?php
/**
 * The main template file
 */
if (!defined('ABSPATH') || !function_exists('add_filter')) {
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	exit;
}
get_header();
echo '<div class="main-content">
	<section class="body-content py-30">
	<div class="container">';
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_content();
			}
		}
	echo '</div>
	</section>
</div>';
get_footer();
