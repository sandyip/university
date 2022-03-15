<?php 
function university_customize_register($wp_customize){


	//Header section start

	$wp_customize-> add_section('university_header_section', [
		'title' => __('Header Section', 'university'),
		'priority' => 30,
	]);

	$wp_customize -> add_setting('university_facebook_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_youtube_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_twitter_handle',[
		'default' => ''
	]);
	
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_facebook_handle_input', array(
		'label' => __('Facebook Link', 'university'),
		'section' => 'university_header_section',
		'settings' => 'university_facebook_handle',
		'description' => __('please enter your facebook link')
	)));

	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_youtube_handle_input', array(
		'label' => __('Youtube Link', 'university'),
		'section' => 'university_header_section',
		'settings' => 'university_youtube_handle',
		'description' => __('please enter your youtube link')
	)));
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_twitter_handle_input', array(
		'label' => __('Twitter Link', 'university'),
		'section' => 'university_header_section',
		'settings' => 'university_twitter_handle',
		'description' => __('please enter your twitter link')
	)));

	//Header section end

	//Footer section start
	$wp_customize -> add_panel('university',[
		'title'=>__('Footer Section', 'university'),
		'priority' => 40
	]);
	$wp_customize-> add_section('university_footer_section', [
		'title' => __('Footer Header', 'university'),
		'priority' => 40,
		'panel' =>  'university'
	]);
	$wp_customize -> add_setting('university_research_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_research_handle_input', array(
		'label' => __('Research', 'university'),
		'section' => 'university_footer_section',
		'settings' => 'university_research_handle',
		'type' => 'textarea'
	)));
	$wp_customize -> add_setting('university_engage_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_engage_handle_input', array(
		'label' => __('Engage', 'university'),
		'section' => 'university_footer_section',
		'settings' => 'university_engage_handle',
		'type' => 'textarea'
	)));
	$wp_customize -> add_setting('university_commitment_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_commitment_handle_input', array(
		'label' => __('Commitment', 'university'),
		'section' => 'university_footer_section',
		'settings' => 'university_commitment_handle',
		'type' => 'textarea'
	)));
	$wp_customize -> add_setting('university_innovation_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_innovation_handle_input', array(
		'label' => __('Innovation', 'university'),
		'section' => 'university_footer_section',
		'settings' => 'university_innovation_handle',
		'type' => 'textarea'
	)));

	//Enroll now

	$wp_customize-> add_section('university_enroll_section', [
		'title' => __('Enroll Now', 'university'),
		'priority' => 40,
		'panel' =>  'university'
	]);
	$wp_customize -> add_setting('university_law_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_engineering_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_higher_education_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_law_handle_input', array(
		'label' => __('Law Business', 'university'),
		'section' => 'university_enroll_section',
		'settings' => 'university_law_handle',
		'type' => 'textarea'
	)));
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_engineering_handle_input', array(
		'label' => __('Enginnering', 'university'),
		'section' => 'university_enroll_section',
		'settings' => 'university_engineering_handle',
		'type' => 'textarea'
	)));
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_higher_education_handle_input', array(
		'label' => __('Higher Education', 'university'),
		'section' => 'university_enroll_section',
		'settings' => 'university_higher_education_handle',
		'type' => 'textarea'
	)));

	//contact
	$wp_customize-> add_section('university_contact_section', [
		'title' => __('Contacts', 'university'),
		'priority' => 50,
		'panel' =>  'university'
	]);
	$wp_customize -> add_setting('university_email_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_phone_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_address_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_email_handle_input', array(
		'label' => __('Email', 'university'),
		'section' => 'university_contact_section',
		'settings' => 'university_email_handle',
		'type' => 'email'
	)));
	
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_phone_handle_input', array(
		'label' => __('Telephone', 'university'),
		'section' => 'university_contact_section',
		'settings' => 'university_phone_handle',
		'type' => 'number'
	)));
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_address_handle_input', array(
		'label' => __('Address', 'university'),
		'section' => 'university_contact_section',
		'settings' => 'university_address_handle',
		'type' => 'text'
	)));

	//university theme
	$wp_customize-> add_section('university_theme_section', [
		'title' => __('University Theme', 'university'),
		'priority' => 60,
		'panel' =>  'university'
	]);

	$wp_customize -> add_setting('university_uni_theme_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_uni_theme_handle_input', array(
		'label' => __('University Theme', 'university'),
		'section' => 'university_theme_section',
		'settings' => 'university_uni_theme_handle',
		'type' => 'textarea'
	)));
	//
	$wp_customize -> add_setting('university_flicker_img1_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize -> add_setting('university_flicker_img2_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize -> add_setting('university_flicker_img3_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize -> add_setting('university_flicker_img4_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize -> add_setting('university_flicker_img5_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize -> add_setting('university_flicker_img6_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'university_flicker_img1_handle_input', array(
		'label' => __('Flicker Image1', 'university'),
		'section' => 'university_theme_section',
		'settings' => 'university_flicker_img1_handle',
		
	)));
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'university_flicker_img2_handle_input', array(
		'label' => __('Flicker Image2', 'university'),
		'section' => 'university_theme_section',
		'settings' => 'university_flicker_img2_handle',
		
	)));
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'university_flicker_img3_handle_input', array(
		'label' => __('Flicker Image3', 'university'),
		'section' => 'university_theme_section',
		'settings' => 'university_flicker_img3_handle',
		
	)));
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'university_flicker_img4_handle_input', array(
		'label' => __('Flicker Image4', 'university'),
		'section' => 'university_theme_section',
		'settings' => 'university_flicker_img4_handle',
		
	)));
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'university_flicker_img5_handle_input', array(
		'label' => __('Flicker Image5', 'university'),
		'section' => 'university_theme_section',
		'settings' => 'university_flicker_img5_handle',
		
	)));
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'university_flicker_img6_handle_input', array(
		'label' => __('Flicker Image6', 'university'),
		'section' => 'university_theme_section',
		'settings' => 'university_flicker_img6_handle',
		
	)));

	//links
	$wp_customize-> add_section('university_links_section', [
		'title' => __('Links', 'university'),
		'priority' => 70,
		'panel' =>  'university'
	]);
	$wp_customize -> add_setting('university_footer_facebook_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_footer_twitter_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_footer_linkedin_handle',[
		'default' => ''
	]);
	$wp_customize -> add_setting('university_footer_google_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_footer_facebook_handle_input', array(
		'label' => __('facebook', 'university'),
		'section' => 'university_links_section',
		'settings' => 'university_footer_facebook_handle',
		'type' => 'email'
	)));
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_footer_twitter_handle_input', array(
		'label' => __('Twitter', 'university'),
		'section' => 'university_links_section',
		'settings' => 'university_footer_twitter_handle',
		'type' => 'email'
	)));
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_footer_linkedin_handle_input', array(
		'label' => __('Linkedin', 'university'),
		'section' => 'university_links_section',
		'settings' => 'university_footer_linkedin_handle',
		'type' => 'email'
	)));
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'university_footer_google_handle_input', array(
		'label' => __('Google', 'university'),
		'section' => 'university_links_section',
		'settings' => 'university_footer_google_handle',
		'type' => 'email'
	)));
	

}

?>