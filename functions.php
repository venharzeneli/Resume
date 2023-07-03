<?php

// Enqueuing
function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');




// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));
    

// Register custom post type for Skills
function register_skills_post_type() {
    $labels = array(
        'name'               => 'Skills',
        'singular_name'      => 'Skill',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Skill',
        'edit_item'          => 'Edit Skill',
        'new_item'           => 'New Skill',
        'view_item'          => 'View Skill',
        'search_items'       => 'Search Skills',
        'not_found'          => 'No skills found',
        'not_found_in_trash' => 'No skills found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Skills'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'skills' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor' ),
    );

    register_post_type( 'skills', $args );
}
add_action( 'init', 'register_skills_post_type' );


// Register custom post type for Experiences
function register_experiences_post_type() {
    $labels = array(
        'name'               => 'Experiences',
        'singular_name'      => 'Experience',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Experience',
        'edit_item'          => 'Edit Experience',
        'new_item'           => 'New Experience',
        'view_item'          => 'View Experience',
        'search_items'       => 'Search Experiences',
        'not_found'          => 'No experiences found',
        'not_found_in_trash' => 'No experiences found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Experiences'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'experiences' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor' ),
    );

    register_post_type( 'experiences', $args );
}
add_action( 'init', 'register_experiences_post_type' );


// Register custom post type for Education
function register_education_post_type() {
    $labels = array(
        'name'               => 'Education',
        'singular_name'      => 'Education',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Education',
        'edit_item'          => 'Edit Education',
        'new_item'           => 'New Education',
        'view_item'          => 'View Education',
        'search_items'       => 'Search Education',
        'not_found'          => 'No education found',
        'not_found_in_trash' => 'No education found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Education'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'education' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor' ),
    );

    register_post_type( 'education', $args );
}
add_action( 'init', 'register_education_post_type' );
function register_languages_post_type() {
    register_post_type('languages',
        array(
            'labels' => array(
                'name' => __('Languages'),
                'singular_name' => __('Language'),
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'languages'),
        )
    );
}
add_action('init', 'register_languages_post_type');
class Custom_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= '<li>';
        $output .= '<a>'; 
        $output .= $item->title;
        $output .= '</a>';
    }
}

function custom_menu() {
    wp_nav_menu(array(
        'theme_location' => 'top-menu',
        'walker' => new Custom_Nav_Walker(),
    ));
}
