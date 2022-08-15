<?php
/*
    Theme Support

   - Adds a dynamic title tag support, which adds it automatically to the wordpress page
   - The Title value is decided within the CMS in the 'Tagline' field
*/
function blogtheme_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_theme_setup', 'blogtheme_theme_support');

/*
    Menus

    - Establish nav menu array and titles from backend
    - Register the navigation menus to wordpress
*/
function blogtheme_menus() {
    $location = [
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items',
    ];

    register_nav_menus($location);
}

add_action('init', 'blogtheme_menus');


/*
    Enqueue Styles

    - Theme versions derive from style.css
*/
function blogtheme_register_styles()
{
    // Variables
    $version = wp_get_theme()->get('Version');

    // Name of stylesheet, URL of stylesheet, Dependencies array, Version, Media to load
    wp_enqueue_style('blogtheme-style', get_template_directory_uri() . "/style.css", array("blogsite-bootstrap"), $version, "all");
    wp_enqueue_style('blogtheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "1.0", "all");
    wp_enqueue_style('blogtheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "1.0", "all");
}

add_action('wp_enqueue_scripts', 'blogsite_register_styles');

/*
    Enqueue Scripts
*/
function blogtheme_register_scripts() {

    // Script Name, URL, Dependencies, Version, Location (true means Footer, false means Header)
    wp_enqueue_script('blogtheme-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('blogtheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.jss", array(), '1.16.0', true);
    wp_enqueue_script('blogtheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
    wp_enqueue_script('blogtheme-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

add_action('wp_enqueue_scripts','blogsite_register_styles');

?>