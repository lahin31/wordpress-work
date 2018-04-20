<?php 

load_theme_textdomain('Lahin_WP');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('custom-background');
add_theme_support('widgets');

function myScriptFiles() {
    // style
    wp_enqueue_style('font-google-api', 'http://fonts.googleapis.com/css?family=Nova+Mono');
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('style-css', get_template_directory_uri().'/assets/css/templatemo-style.css');
    wp_enqueue_style('style-wp', get_template_directory_uri());
    
    // scripts
    wp_enqueue_script('tether-min-js', 'https://www.atlasestateagents.co.uk/javascript/tether.min.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts', 'myScriptFiles');

function read_more($limit) {
    $post_content = explode(" ", get_the_content());
    $less_content = array_slice($post_content, 0 , $limit);
    echo implode(" ", $less_content);
}

function my_nav_menu() {
    register_nav_menu('lahin-top-menu', 'Lahin Top Menu');;
}

add_action('after_setup_theme', 'my_nav_menu');
