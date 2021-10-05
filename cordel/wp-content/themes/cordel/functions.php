<?php 

/**
 * Fanzoca - Cordel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fanzoca Cordel
 */

/**
* Enqueue scripts and styles.
*/
function fanzoca_cordel_scripts(){
	// Theme's main stylesheet
	//import vendors
	wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/vendors/normalize.css', array(), '', 'all' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/vendors/bootstrap.min.css', array(), '5.0.0', 'all' );
	wp_enqueue_style( 'fanzoca-cordel-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '3.0', 'all' );
	wp_enqueue_style( 'evara-font-css', get_template_directory_uri() . '/assets/css/vendors/evara-font.css', array(), '', 'all' );
	wp_enqueue_style( 'uicons-regular-straight-css', get_template_directory_uri() . '/assets/css/vendors/uicons-regular-straight.css', array(), '', 'all' );
	//import plugins
	wp_enqueue_style( 'jquery-ui-css', get_template_directory_uri() . '/assets/css/plugins/jquery-ui.css', array(), '', 'all' );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/plugins/magnific-popup.css', array(), '', 'all' );
	wp_enqueue_style( 'select2.min-css', get_template_directory_uri() . '/assets/css/plugins/select2.min.css', array(), '', 'all' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/plugins/slick.css', array(), '', 'all' );
	wp_enqueue_style( 'perfect-scrollbar-css', get_template_directory_uri() . '/assets/css/plugins/perfect-scrollbar.css', array(), '', 'all' );
	

	// Theme's main scripts
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js', array(), '', true );
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/vendor/jquery-3.6.0.min.js', array(), '', true );
	wp_enqueue_script( 'jquery-migrate-js', get_template_directory_uri() . '/assets/js/vendor/jquery-migrate-3.3.0.min.js', array(), '', true );
	wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/assets/js/vendor/bootstrap.bundle.min.js', array(), '', true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/plugins/slick.js', array(), '', true );
	wp_enqueue_script( 'jquery-syotimer-js', get_template_directory_uri() . '/assets/js/plugins/jquery.syotimer.min.js', array(), '', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/plugins/wow.js', array(), '', true );
	wp_enqueue_script( 'jquery-ui-js', get_template_directory_uri() . '/assets/js/plugins/jquery-ui.js', array(), '', true );
	wp_enqueue_script( 'perfect-scrollbar-js', get_template_directory_uri() . '/assets/js/plugins/perfect-scrollbar.js', array(), '', true );
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/plugins/magnific-popup.js', array(), '', true );
	wp_enqueue_script( 'select2-js', get_template_directory_uri() . '/assets/js/plugins/select2.min.js', array(), '', true );
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/plugins/waypoints.js', array(), '', true );
	wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/js/plugins/counterup.js', array(), '', true );
	wp_enqueue_script( 'jquery-countdown-js', get_template_directory_uri() . '/assets/js/plugins/jquery.countdown.min.js', array(), '', true );
	wp_enqueue_script( 'images-loaded-js', get_template_directory_uri() . '/assets/js/plugins/images-loaded.js', array(), '', true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/plugins/isotope.js', array(), '', true );
	wp_enqueue_script( 'scrollup-js', get_template_directory_uri() . '/assets/js/plugins/scrollup.js', array(), '', true );
	wp_enqueue_script( 'jquery-vticker-js', get_template_directory_uri() . '/assets/js/plugins/jquery.vticker-min.js', array(), '', true );
	wp_enqueue_script( 'jquery-theia-sticky-js', get_template_directory_uri() . '/assets/js/plugins/jquery.theia.sticky.js', array(), '', true );
	wp_enqueue_script( 'jquery-elevatezoom-js', get_template_directory_uri() . '/assets/js/plugins/jquery.elevatezoom.js', array(), '', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );
	wp_enqueue_script( 'shop-js', get_template_directory_uri() . '/assets/js/shop.js', array(), '', true );
	
}
add_action( 'wp_enqueue_scripts', 'fanzoca_cordel_scripts' );

function fanzoca_cordel_config(){
	register_nav_menus( 
		array(
			'fanzoca_cordel_main_menu'	=> 'Fanzoca Cordel Main Menu',
		)
	);

	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width'		=> 255,
		'single_image_width'		=> 255,
		'product_grid'				=> array(
			'default_rows'		=> 10,
			'min_rows'			=> 5,
			'max_rows'			=> 10,
			'default_columns'	=> 4,
			'min_columns'		=>  4,
			'max_columns'		=>  4,
		)
	) );

}
add_action( 'after_setup_theme', 'fanzoca_cordel_config', 0);


add_action( 'woocommerce_before_shop_loop_item', 'product_cart_wrap_open' );
function product_cart_wrap_open(){
	echo '<div class="product-cart-wrap mb-30">';
}

add_action( 'woocommerce_after_shop_loop_item', 'product_cart_wrap_close' );
function product_cart_wrap_close(){
	echo '</div>';
}

add_action( 'woocommerce_before_shop_loop_item_title', 'product_img_action_wrap_open', 5 );
function product_img_action_wrap_open(){
	echo '<div class="product-img-action-wrap"><div class="product-img product-img-zoom">';
}

add_action( 'woocommerce_shop_loop_item_title', 'product_img_action_wrap_close', 5 );
function product_img_action_wrap_close(){
	echo '</div></div>';
}