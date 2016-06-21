<?php

// Load styles
function theme_styles() {
   // wp_enqueue_style('theme_stylesheet', get_template_directory_uri().'/style.css');
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('grid_styles', get_template_directory_uri().'/css/grid.css');
    wp_enqueue_style('main_styles', get_template_directory_uri().'/css/main.css');
    }
add_action('wp_enqueue_scripts', 'theme_styles');

// Load scripts
function theme_scripts() {
    wp_enqueue_script('theme_js', get_template_directory_uri(). '/js/scripts.js', '','', 'true');
    }
add_action('wp_enqueue_scripts', 'theme_scripts');    

// Enable menus
function register_tnhm_menus() {
    register_nav_menus(
        array (
            'header-menu' => 'TNHM Main Menu',   
            'footer-menu' => 'TNHM Footer Menu'         
        )
    );
}
add_action('init', 'register_tnhm_menus'); 

// Add theme support
add_theme_support('post-thumbnails' );
add_theme_support('custom-background');
add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// Set Custom Image sizes
// add_image_size('examp-1', 500, 374, true);
// add_image_size('examp-2', 765, 456, true);
// add_image_size('examp-3', 1400, 234, true);
// pull into theme using the_post_thumbnail('examp-1');

// remove paragraph tags on content
// remove_filter( 'the_content', 'wpautop' );







