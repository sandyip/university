<?php 


add_action( 'init', 'university_slider_post_type', 0 );

function university_slider_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sliders', 'Post Type General Name', 'university' ),
        'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'university' ),
        'menu_name'           => __( 'Sliders', 'university' ),
        'parent_item_colon'   => __( 'Parent Slider', 'university' ),
        'all_items'           => __( 'All Sliders', 'university' ),
        'view_item'           => __( 'View Slider', 'university' ),
        'add_new_item'        => __( 'Add New Slider', 'university' ),
        'add_new'             => __( 'Add New', 'university' ),
        'edit_item'           => __( 'Edit Slider', 'university' ),
        'update_item'         => __( 'Update Slider', 'university' ),
        'search_items'        => __( 'Search Slider', 'university' ),
        'not_found'           => __( 'Not Found', 'university' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'university' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'sliders', 'university' ),
        'description'         => __( 'Slider news and reviews', 'university' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor',  'thumbnail'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-arrow-down-alt',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'sliders', $args );
 
}

add_action( 'init', 'university_slider2_post_type', 0 );

//
function university_slider2_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sliders2', 'Post Type General Name', 'university' ),
        'singular_name'       => _x( 'Slider2', 'Post Type Singular Name', 'university' ),
        'menu_name'           => __( 'Sliders2', 'university' ),
        'parent_item_colon'   => __( 'Parent Slider2', 'university' ),
        'all_items'           => __( 'All Sliders2', 'university' ),
        'view_item'           => __( 'View Slider2', 'university' ),
        'add_new_item'        => __( 'Add New Slider2', 'university' ),
        'add_new'             => __( 'Add New', 'university' ),
        'edit_item'           => __( 'Edit Slider2', 'university' ),
        'update_item'         => __( 'Update Slider2', 'university' ),
        'search_items'        => __( 'Search Slider2', 'university' ),
        'not_found'           => __( 'Not Found', 'university' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'university' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'sliders2', 'university' ),
        'description'         => __( 'Slider2 news and reviews', 'university' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor',  'thumbnail'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-arrow-right-alt',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'sliders2', $args );
 
}
 
 //Testimonial part
add_action( 'init', 'university_testimonial_post_type', 0 );

//
function university_testimonial_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'university' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'university' ),
        'menu_name'           => __( 'Testimonials', 'university' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'university' ),
        'all_items'           => __( 'All Testimonials', 'university' ),
        'view_item'           => __( 'View Testimonial', 'university' ),
        'add_new_item'        => __( 'Add New Testimonial', 'university' ),
        'add_new'             => __( 'Add New', 'university' ),
        'edit_item'           => __( 'Edit Testimonial', 'university' ),
        'update_item'         => __( 'Update Testimonial', 'university' ),
        'search_items'        => __( 'Search Testimonial', 'university' ),
        'not_found'           => __( 'Not Found', 'university' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'university' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'testimonial', 'university' ),
        'description'         => __( 'Testimonial news and reviews', 'university' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor',  'thumbnail'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-businessman',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonial', $args );

   }

    //Events
    add_action( 'init', 'university_event_post_type', 0 );

    //
    function university_event_post_type() {
     
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Events', 'Post Type General Name', 'university' ),
            'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'university' ),
            'menu_name'           => __( 'Events', 'university' ),
            'parent_item_colon'   => __( 'Parent Event', 'university' ),
            'all_items'           => __( 'All Events', 'university' ),
            'view_item'           => __( 'View Event', 'university' ),
            'add_new_item'        => __( 'Add New Event', 'university' ),
            'add_new'             => __( 'Add New', 'university' ),
            'edit_item'           => __( 'Edit Event', 'university' ),
            'update_item'         => __( 'Update Event', 'university' ),
            'search_items'        => __( 'Search Event', 'university' ),
            'not_found'           => __( 'Not Found', 'university' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'university' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'event', 'university' ),
            'description'         => __( 'Event news and reviews', 'university' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor',  'thumbnail'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-bell',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'event', $args );
     
    }


    //courses
    add_action( 'init', 'university_course_post_type', 0 );

    //
    function university_course_post_type() {
     
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Courses', 'Post Type General Name', 'university' ),
            'singular_name'       => _x( 'course', 'Post Type Singular Name', 'university' ),
            'menu_name'           => __( 'Courses', 'university' ),
            'parent_item_colon'   => __( 'Parent course', 'university' ),
            'all_items'           => __( 'All Courses', 'university' ),
            'view_item'           => __( 'View course', 'university' ),
            'add_new_item'        => __( 'Add New course', 'university' ),
            'add_new'             => __( 'Add New', 'university' ),
            'edit_item'           => __( 'Edit course', 'university' ),
            'update_item'         => __( 'Update course', 'university' ),
            'search_items'        => __( 'Search course', 'university' ),
            'not_found'           => __( 'Not Found', 'university' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'university' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'course', 'university' ),
            'description'         => __( 'course news and reviews', 'university' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor',  'thumbnail'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-text-page',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'course', $args );
     
    }

    //portfolio cpt
     add_action( 'init', 'university_portfolio_post_type', 0 );

    //
    function university_portfolio_post_type() {
     
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Portfolios', 'Post Type General Name', 'university' ),
            'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'university' ),
            'menu_name'           => __( 'Portfolios', 'university' ),
            'parent_item_colon'   => __( 'Parent Portfolio', 'university' ),
            'all_items'           => __( 'All Portfolios', 'university' ),
            'view_item'           => __( 'View Portfolio', 'university' ),
            'add_new_item'        => __( 'Add New Portfolio', 'university' ),
            'add_new'             => __( 'Add New', 'university' ),
            'edit_item'           => __( 'Edit Portfolio', 'university' ),
            'update_item'         => __( 'Update Portfolio', 'university' ),
            'search_items'        => __( 'Search Portfolio', 'university' ),
            'not_found'           => __( 'Not Found', 'university' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'university' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'portfolio', 'university' ),
            'description'         => __( 'Portfolio news and reviews', 'university' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor',  'thumbnail'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres', 'category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'portfolio', $args );
     
    }

     //member cpt
     add_action( 'init', 'university_member_post_type', 0 );

    //
    function university_member_post_type() {
     
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Members', 'Post Type General Name', 'university' ),
            'singular_name'       => _x( 'Member', 'Post Type Singular Name', 'university' ),
            'menu_name'           => __( 'Members', 'university' ),
            'parent_item_colon'   => __( 'Parent Member', 'university' ),
            'all_items'           => __( 'All Members', 'university' ),
            'view_item'           => __( 'View Member', 'university' ),
            'add_new_item'        => __( 'Add New Member', 'university' ),
            'add_new'             => __( 'Add New', 'university' ),
            'edit_item'           => __( 'Edit Member', 'university' ),
            'update_item'         => __( 'Update Member', 'university' ),
            'search_items'        => __( 'Search Member', 'university' ),
            'not_found'           => __( 'Not Found', 'university' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'university' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'member', 'university' ),
            'description'         => __( 'Member news and reviews', 'university' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor',  'thumbnail'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-image-filter',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'member', $args );
     
    }
   


 

?>