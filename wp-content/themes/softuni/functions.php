<?php

/**
 * Never worry about cache again!
 */
function load_assets($hook) {
	// create my own version codes
	// $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'js/custom.js' ));
	// $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));

	$args = array(
		'in_footer' => true,
		'strategy' => 'defer',
	);

	wp_enqueue_script('jquery-1.12.3.min', get_template_directory_uri() . '/assets/js/jquery-1.12.3.min.js', array(), '1.0.0', $args);
	wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', $args);
	wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', $args);
	wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', $args);


	wp_enqueue_style('bootstrap.min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.0.0');
	wp_enqueue_style('ionicons.css', get_template_directory_uri() . '/assets/css/ionicons.css', false, '1.0.0');
	wp_enqueue_style('magnific-popup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css', false, '1.0.0');
	wp_enqueue_style('main.css', get_template_directory_uri() . '/assets/css/main.css', false, '1.0.5');
	wp_enqueue_style('owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css', false, '1.0.0');
	wp_enqueue_style('owl.carousel.theme.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.theme.min.css', false, '1.0.0');
}
add_action('wp_enqueue_scripts', 'load_assets');


function softuni_register_nav_menus() {
	register_nav_menus(
		array(
			'primary_menu' => __('Primary Menu', 'softuni'),
			'popular_services' => __('Popular Services', 'softuni'),
			'important_link' => __('Important Links', 'softuni'),
			'latest_services' => __('Latest Services', 'softuni')
		)
	);
}

add_action('after_setup_theme', 'softuni_register_nav_menus');
