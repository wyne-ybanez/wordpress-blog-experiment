<?php
function blogsite_register_styles()
{
    // Name of stylesheet, URL of stylesheet, Dependencies, Version, Media to load
    wp_enqueue_style('blogsite-style', get_template_directory_uri() . "/style.css", array("blogsite-bootstrap"), "1.0", "all");
    wp_enqueue_style('blogsite-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "1.0", "all");
    wp_enqueue_style('blogsite-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "1.0", "all");
}

add_action('wp_enqueue_scripts', blogsite_register_styles);
