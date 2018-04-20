<?php 

load_theme_textdomain('Lahin_WP');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('custom-background');
add_theme_support('widgets');

function read_more($limit) {
    $post_content = explode(" ", get_the_content());
    $less_content = array_slice($post_content, 0 , $limit);
    echo implode(" ", $less_content);
}

function my_nav_menu() {
    register_nav_menu('lahin-top-menu', 'Lahin Top Menu');;
}

add_action('after_setup_theme', 'my_nav_menu');