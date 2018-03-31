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

function register_my_menu() {
    register_nav_menu('my-top-menu', 'My Top Menu');
}

add_action('after_setup_theme', 'register_my_menu');

function my_custom_post_type() {
	$labels = array(
		'name'               => _x( 'Languages', 'post type general name', 'Lahin_WP' ),
		'singular_name'      => _x( 'Language', 'post type singular name', 'Lahin_WP' ),
		'menu_name'          => _x( 'Languages', 'admin menu', 'Lahin_WP' ),
		'name_admin_bar'     => _x( 'Language', 'add new on admin bar', 'Lahin_WP' ),
		'add_new'            => _x( 'Add New', 'Language', 'Lahin_WP' ),
		'add_new_item'       => __( 'Add New Language', 'Lahin_WP' ),
		'new_item'           => __( 'New Language', 'Lahin_WP' ),
		'edit_item'          => __( 'Edit Language', 'Lahin_WP' ),
		'view_item'          => __( 'View Language', 'Lahin_WP' ),
		'all_items'          => __( 'All Languages', 'Lahin_WP' ),
		'search_items'       => __( 'Search Languages', 'Lahin_WP' ),
		'parent_item_colon'  => __( 'Parent Languages:', 'Lahin_WP' ),
		'not_found'          => __( 'No Languages found.', 'Lahin_WP' ),
		'not_found_in_trash' => __( 'No Languages found in Trash.', 'Lahin_WP' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'Lahin_WP' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail',  )
	);

	register_post_type( 'language', $args );

}

add_action( 'init', 'my_custom_post_type' );

