<?php 
function university_setup_theme(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');

	register_nav_menu('header', __('Header Menu', 'university'));
	register_nav_menu('header2', __('Secondary Menu', 'university'));

}


?>