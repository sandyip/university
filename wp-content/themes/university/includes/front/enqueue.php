<?php 
function university_enqueue(){
	$url = get_theme_file_uri();
	$ver = UNI_DEV_MODE ? time() : false;
	//css
	wp_register_style('bootstrap_css', $url . '/assets/stylesheets/bootstrap.css', [] , $ver);
	wp_register_style('style_css', $url . '/assets/stylesheets/style.css', [] , $ver);
	wp_register_style('responsive_css', $url . '/assets/stylesheets/responsive.css', [] , $ver);
	wp_register_style('colors_css', $url . '/assets/stylesheets/colors/color1.css', [] , $ver);
	wp_register_style('animate_css', $url . '/assets/stylesheets/animate.css', [] , $ver);
	wp_enqueue_style('bootstrap_css');
	wp_enqueue_style('style_css');
	wp_enqueue_style('responsive_css');
	wp_enqueue_style('colors_css');
	wp_enqueue_style('animate_css');

	//js
	wp_register_script('bootstrap_js', $url .'/assets/javascript/bootstrap.min.js', [] , $ver, true);
	wp_register_script('easing_js', $url .'/assets/javascript/jquery.easing.js', [] , $ver, true);
	wp_register_script('verticalCarousel_js', $url .'/assets/javascript/jQuery.verticalCarousel.js', [] , $ver, true);
	wp_register_script('owlcarousel_js', $url .'/assets/javascript/owl.carousel.js', [] , $ver, true);
	wp_register_script('parallax_js', $url .'/assets/javascript/parallax.js', [] , $ver, true);
	wp_register_script('waypoints_js', $url .'/assets/javascript/jquery-waypoints.js', [] , $ver, true);

	wp_register_script('tweet_js', $url .'/assets/javascript/jquery.tweet.min.js', [] , $ver, true);
	wp_register_script('matchHeight_js', $url .'/assets/javascript/jquery.matchHeight-min.js', [] , $ver, true);
	wp_register_script('validate_js', $url .'/assets/javascript/jquery-validate.js', [] , $ver, true);
	wp_register_script('tools_js', $url .'/assets/javascript/jquery.themepunch.tools.min.js', [] , $ver, true);
	wp_register_script('revolution_js', $url .'/assets/javascript/jquery.themepunch.revolution.min.js', [] , $ver, true);
	wp_register_script('slider_js', $url .'/assets/javascript/slider.js', [] , $ver, true);
	wp_register_script('cookie_js', $url .'/assets/javascript/jquery.cookie.js', [] , $ver, true);
	wp_register_script('main_js', $url .'/assets/javascript/main.js', [] , $ver, true);

	wp_enqueue_script('jQuery');
	wp_enqueue_script('bootstrap_js');
	wp_enqueue_script('easing_js');
	wp_enqueue_script('verticalCarousel_js');
	wp_enqueue_script('owlcarousel_js');
	wp_enqueue_script('parallax_js');
	wp_enqueue_script('waypoints_js');
	wp_enqueue_script('tweet_js');
	wp_enqueue_script('matchHeight_js');
	wp_enqueue_script('validate_js');
	wp_enqueue_script('tools_js');
	wp_enqueue_script('revolution_js');
	wp_enqueue_script('slider_js');
	wp_enqueue_script('cookie_js');
	wp_enqueue_script('main_js');


}


?>



