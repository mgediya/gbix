<?php
/**
 * The template for displaying search results pages
 *
 * @since 1.0.0
 */
get_header();

$search_text = isset($_REQUEST['s']) ? $_REQUEST['s'] : '';
$search_text = strip_tags( trim($search_text) );
global $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


echo '<div class="main-content search-result-page">
	<div class="container">
		<div class="breadcrumbs">
			<ul>';
				if( function_exists('bcn_display') ){
					bcn_display();
				}
			echo '</ul>
		</div>
	</div>
    <section class="sr-banner">
        <div class="container">';
            // <div class="sec-heading text-center"><h1 class="h2">Showing results for: '.$search_text.'</h1></div>
            echo '<div class="search-form-wrap">';
                $pager = isset($_REQUEST['pager']) ? $_REQUEST['pager'] : '1';
                echo '<form method="get" class="search-form" id="filter_form" action="'.esc_url( home_url( '/' ) ).'">
                    <input type="search" value="'.$search_text.'" name="s" placeholder="'.__('Search', 'gbix').'" />
                    <button class="icon-search">Search</button>
                    <input type="hidden" name="pager" id="pager" value="'. $pager.'" >
                </form>';
                // <div class="clear-search icon-close"></div>
            echo '</div>
        </div>
    </section>
	<section class="sr-block">
		<div class="container">
			<div class="sr-result">';
				if ( have_posts() ) {
					echo '<span class="sr-value">';
						printf( esc_html( _n( '%d result for', '%d results for', (int) $wp_query->found_posts, 'twentytwentyone' ) ),
						(int) $wp_query->found_posts );
					echo '</span>';
					echo '<div class="sr-term">'.$search_text.'</div>';
					while ( have_posts() ) {
						the_post();
						$post_id = get_the_ID();
						$alt = '';
						$featured_img_url = get_the_post_thumbnail_url( $post_id,'full');
						if( !$featured_img_url ){
							$attachment_id = get_post_thumbnail_id( $post_id );
							$alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
						}
						$cat_terms_string = '';
						$cat_terms = get_the_terms($post_id, 'category');
						if ($cat_terms && !is_wp_error($cat_terms)) {
							$cat_terms_string = join(', ', wp_list_pluck($cat_terms, 'name'));
						}
						// $terms_string = '';
						// $terms = get_the_terms($post_id, 'post_tag');
						// if ($terms && !is_wp_error($terms)) {
						// 	$terms_string = join(', ', wp_list_pluck($terms, 'name'));
						// }
						$description = get_the_excerpt($post_id);
						$length = 230;
						if (strlen($description) <= $length) {
							$description = $description;
						} else {
							$description = substr($description, 0, $length) . ' ...';
						}
						// if( $featured_img_url || $description ) {
							echo '<div class="sr-items search-p-'.$post_id.'">
								<div class="row">';
									if( $featured_img_url ) {
										echo '<div class="cell-sm-4 pl-xl-30">
											<figure class="sr-img">
												<img src="'.$featured_img_url.'" alt="'.$alt.'">
											</figure>
										</div>';
									}
									echo '<div class="cell-sm-8 sr-content">
										<div class="sr-desc">';
											if( $cat_terms_string ) {
												echo '<div class="sr-type">'.$cat_terms_string.'</div>';
											}
											if( $post_id ) {
												echo '<h4><a href="'.get_permalink( $post_id ).'" target="" class="sr-title">'.get_the_title( $post_id ).'</a></h4>';
											}
											if( $description ) {
												echo '<p>'.$description.'</p>';
											}
											// if( $terms_string ) {
											// 	echo '<div class="sr-tag-wrap">';
											// 		if( $terms_string ) {
											// 			echo '<span>'.$terms_string.'</span>';
											// 		}
											// 	echo '</div>';
											// }
										echo '</div>
									</div>
								</div>
							</div>';
						// }
					} // End the loop.
					if( $wp_query->max_num_pages > 1 ) {
						$prev_link = get_pagenum_link($paged - 1);
						$next_link = get_pagenum_link($paged + 1);
						echo '<div class="pagination d-flex justify-content-center">
							<ul>';
								if( $paged== 1 ) {
									echo '<li><a class="prev disabled" disable>'.__('Prev', 'gbix').'</a></li>';
								} else {
									echo '<li><a href="'.$prev_link.'" class="prev">'.__('Prev', 'gbix').'</a></li>';
								}
								echo '<li>'.$paged.'</li>
								<li>of</li>
								<li>'.$wp_query->max_num_pages.'</li>';
								if( $wp_query->max_num_pages == $paged ) {
									echo '<li><a class="next disabled" disable>'.__('Next', 'gbix').'</a></li>';
								} else {
									echo '<li><a href="'.$next_link.'" class="next">'.__('Next', 'gbix').'</a></li>';
								}
							echo '</ul>
						</div>';
					}
				} else {
					echo '<h5> '.__('No post is available for','gbix').': '.$search_text.'</h5>';
				}
			echo '</div>
		</div>
	</section>
</div>';

get_footer();
?>