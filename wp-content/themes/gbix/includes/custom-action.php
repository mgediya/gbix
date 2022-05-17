<?php
/**
* Load the custom functions.
*/

if ( !defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}
/**
 * Upload SVG file permission
 */
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

/**
 * Add excerpt support to pages
 */
add_action('init', 'wp_admin_excerpt_init');

function wp_admin_excerpt_init() {
    add_post_type_support( 'page', 'excerpt' );
}

/**
 * Add quick-collapse feature to ACF Flexible Content fields
 */
add_action('acf/input/admin_head', function() { ?>
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                var collapseButtonClass = 'collapse-all';

                // Add a clickable link to the label line of flexible content fields
                $('.acf-field-flexible-content > .acf-label')
                    .append('<a class=" button ' + collapseButtonClass + '" style="position: absolute; top: 0; right: 0; cursor: pointer;">Collapse All</a>');

                // Simulate a click on each flexible content item's "collapse" button when clicking the new link
                $('.' + collapseButtonClass).on('click', function() {
                    $('.acf-flexible-content .layout:not(.-collapsed) .acf-fc-layout-controls .-collapse').click();
                });
            });
        })(jQuery);
    </script> <?php
});
add_action('admin_head', 'acf_collapse_css');

function acf_collapse_css() {
echo '<style>
	.acf-field-flexible-content .acf-label {
		padding-bottom: 10px;
	}
	</style>';
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function custom_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Block', 'gbix' ),
			'id'            => 'footer-block',
			'description'   => esc_html__( 'Add widgets here to appear menu in your footer.', 'gbix' ),
			'before_widget' => '<div id="%1$s" class="mb-sm-30 mb-0">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="sidebar-title">',
			'after_title'   => '</div>',
		)
	);
}
add_action( 'widgets_init', 'custom_widgets_init' );