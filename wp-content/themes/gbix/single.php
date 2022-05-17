<?php
/**
 * Post template.
 */
if (!defined('ABSPATH') || !function_exists('add_filter')) {
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	exit;
}
get_header();
echo '<section class="inner-hero">';
	$post_img = get_the_post_thumbnail();
	echo '<div class="inner-hero-img img-to-bg">'.$post_img.'</div>';
	echo '<div class="container inner-hero-content text-center py-30">
		<h1>'.get_the_title().'</h1>
	</div>
</section>';
echo '<div class="main-content">
	<section class="body-content py-30">
	<div class="container">';
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_content();
				// get_template_part( 'template-parts/content/content-single' );
			}
		}
	echo '</div>
	</section>
</div>';
get_footer();