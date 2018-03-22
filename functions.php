<?php

// REGULAR FUNCTIONS
// Load jQuery
if ( !is_admin() ) {
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js' );
}

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');



function custom_excerpt_length( $length ) {
	return 45;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




// ADD THEME SUPPORT
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );
add_theme_support( "post-thumbnails" );



// ADD WIDGETS TO FOOTER
function trenazieri_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Col 1',
		'id'            => 'footer_01',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

	register_sidebar( array(
		'name'          => 'Footer Col 2',
		'id'            => 'footer_02',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

	register_sidebar( array(
		'name'          => 'Footer Col 3',
		'id'            => 'footer_03',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

	register_sidebar( array(
		'name'          => 'Footer Col 4',
		'id'            => 'footer_04',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => 'Sidebar Widgets',
			'id'   => 'sidebar-widgets',
			'description'   => 'These are widgets for the sidebar.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		));
	}

}
add_action( 'widgets_init', 'trenazieri_widgets_init' );



// REMOVAL
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// BOOTSTRAP
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


?>