<?php

//Setup
define('UNI_DEV_MODE', true);
//includes
include(get_theme_file_path('includes/front/enqueue.php'));
include(get_theme_file_path('includes/front/setup.php'));
include(get_theme_file_path('customizer/theme-customizer.php'));

//Hooks
add_action('after_setup_theme', 'university_setup_theme');
add_action('wp_enqueue_scripts', 'university_enqueue');
add_action('customize_register', 'university_customize_register');





?>