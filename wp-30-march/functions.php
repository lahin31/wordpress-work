<?php 

load_theme_textdomain('Lahin_WP');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo'); 
add_theme_support('custom-background');
add_theme_support('widgets');
add_image_size('fashionImage', 338, 250, true);
add_image_size('ourTeamImg', 260, 375, true);



function myCustomFiles() {
	// styles 
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style('style-css', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('style-wp', get_stylesheet_uri());
	wp_enqueue_style('mainStyles-css', get_template_directory_uri().'/assets/css/mainStyles.css');
	wp_enqueue_style('flexslider-css', get_template_directory_uri().'/assets/css/flexslider.css');
	wp_enqueue_style('swipebox-css', get_template_directory_uri().'/assets/css/swipebox.css');
	wp_enqueue_style('fontawesome-css', get_template_directory_uri().'/assets/css/font-awesome.css');
	wp_enqueue_style('font-google-api', 'http://fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese');
	wp_enqueue_style('font-google-api-icon', 'http://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
	wp_enqueue_style('font-google-api-icon-two', 'http://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');

	// scripts
	wp_enqueue_script('main-script', get_template_directory_uri().'/assets/js/mainScript.js', array('jquery'));
	wp_enqueue_script('rgbslider-script', get_template_directory_uri().'/assets/js/rgbSlide.min.js', array('jquery'));
	wp_enqueue_script('flexslider-script', get_template_directory_uri().'/assets/js/jquery.flexslider.js', array('jquery'));
	wp_enqueue_script('swipebox-script', get_template_directory_uri().'/assets/js/jquery.swipebox.min.js', array('jquery'));
	wp_enqueue_script('smooth-scroll', get_template_directory_uri().'/assets/js/SmoothScroll.min.js', array('jquery'));
	wp_enqueue_script('move-top-script', get_template_directory_uri().'/assets/js/move-top.js', array('jquery'));
	wp_enqueue_script('easing-script', get_template_directory_uri().'/assets/js/easing.js', array('jquery'));
	wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/assets/js/bootstrap.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'myCustomFiles');

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="scroll"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


function register_my_menu() {
	register_nav_menu('my-top-menu', 'My Top Menu');
	register_nav_menu('my-footer-menu', 'My Footer Menu');
}

add_action('after_setup_theme', 'register_my_menu');

// Making our custom post tags

function my_custom_post_type() {
    $labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'Lahin_WP' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'Lahin_WP' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'Lahin_WP' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'Lahin_WP' ),
		'add_new'            => _x( 'Add New', 'Slider', 'Lahin_WP' ),
		'add_new_item'       => __( 'Add New Slider', 'Lahin_WP' ),
		'new_item'           => __( 'New Slider', 'Lahin_WP' ),
		'edit_item'          => __( 'Edit Slider', 'Lahin_WP' ),
		'view_item'          => __( 'View Slider', 'Lahin_WP' ),
		'all_items'          => __( 'All Sliders', 'Lahin_WP' ),
		'search_items'       => __( 'Search Sliders', 'Lahin_WP' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'Lahin_WP' ),
		'not_found'          => __( 'No Sliders found.', 'Lahin_WP' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash.', 'Lahin_WP' )
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
		'supports'           => array( 'title', 'thumbnail' )
	);

	register_post_type( 'slider', $args );
};

add_action('init', 'my_custom_post_type');

function my_custom_post_type_events() {
    $labels = array(
		'name'               => _x( 'Events', 'post type general name', 'Lahin_WP' ),
		'singular_name'      => _x( 'Event', 'post type singular name', 'Lahin_WP' ),
		'menu_name'          => _x( 'Events', 'admin menu', 'Lahin_WP' ),
		'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'Lahin_WP' ),
		'add_new'            => _x( 'Add New', 'Event', 'Lahin_WP' ),
		'add_new_item'       => __( 'Add New Event', 'Lahin_WP' ),
		'new_item'           => __( 'New Event', 'Lahin_WP' ),
		'edit_item'          => __( 'Edit Event', 'Lahin_WP' ),
		'view_item'          => __( 'View Event', 'Lahin_WP' ),
		'all_items'          => __( 'All Events', 'Lahin_WP' ),
		'search_items'       => __( 'Search Events', 'Lahin_WP' ),
		'parent_item_colon'  => __( 'Parent Events:', 'Lahin_WP' ),
		'not_found'          => __( 'No Events found.', 'Lahin_WP' ),
		'not_found_in_trash' => __( 'No Events found in Trash.', 'Lahin_WP' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'Lahin_WP' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'event' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor' )
	);

	register_post_type( 'event', $args );
};

add_action('init', 'my_custom_post_type_events');

function my_custom_post_type_fashions() {
    $labels = array(
		'name'               => _x( 'Fashions', 'post type general name', 'Lahin_WP' ),
		'singular_name'      => _x( 'Fashion', 'post type singular name', 'Lahin_WP' ),
		'menu_name'          => _x( 'Fashions', 'admin menu', 'Lahin_WP' ),
		'name_admin_bar'     => _x( 'Fashion', 'add new on admin bar', 'Lahin_WP' ),
		'add_new'            => _x( 'Add New', 'Fashion', 'Lahin_WP' ),
		'add_new_item'       => __( 'Add New Fashion', 'Lahin_WP' ),
		'new_item'           => __( 'New Fashion', 'Lahin_WP' ),
		'edit_item'          => __( 'Edit Fashion', 'Lahin_WP' ),
		'view_item'          => __( 'View Fashion', 'Lahin_WP' ),
		'all_items'          => __( 'All Fashions', 'Lahin_WP' ),
		'search_items'       => __( 'Search Fashions', 'Lahin_WP' ),
		'parent_item_colon'  => __( 'Parent Fashions:', 'Lahin_WP' ),
		'not_found'          => __( 'No Fashions found.', 'Lahin_WP' ),
		'not_found_in_trash' => __( 'No Fashions found in Trash.', 'Lahin_WP' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'Lahin_WP' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'fashion' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor' )
	);

	register_post_type( 'fashion', $args );
};

add_action('init', 'my_custom_post_type_fashions');


function my_custom_post_type_our_teams() {
    $labels = array(
		'name'               => _x( 'OurTeams', 'post type general name', 'Lahin_WP' ),
		'singular_name'      => _x( 'OurTeam', 'post type singular name', 'Lahin_WP' ),
		'menu_name'          => _x( 'OurTeams', 'admin menu', 'Lahin_WP' ),
		'name_admin_bar'     => _x( 'OurTeam', 'add new on admin bar', 'Lahin_WP' ),
		'add_new'            => _x( 'Add New', 'OurTeam', 'Lahin_WP' ),
		'add_new_item'       => __( 'Add New OurTeam', 'Lahin_WP' ),
		'new_item'           => __( 'New OurTeam', 'Lahin_WP' ),
		'edit_item'          => __( 'Edit OurTeam', 'Lahin_WP' ),
		'view_item'          => __( 'View OurTeam', 'Lahin_WP' ),
		'all_items'          => __( 'All OurTeams', 'Lahin_WP' ),
		'search_items'       => __( 'Search OurTeams', 'Lahin_WP' ),
		'parent_item_colon'  => __( 'Parent OurTeams:', 'Lahin_WP' ),
		'not_found'          => __( 'No OurTeams found.', 'Lahin_WP' ),
		'not_found_in_trash' => __( 'No OurTeams found in Trash.', 'Lahin_WP' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'Lahin_WP' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'ourTeam' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor' )
	);

	register_post_type( 'ourTeam', $args );
};

add_action('init', 'my_custom_post_type_our_teams');


function my_custom_post_type_our_services() {
    $labels = array(
		'name'               => _x( 'OurServices', 'post type general name', 'Lahin_WP' ),
		'singular_name'      => _x( 'OurService', 'post type singular name', 'Lahin_WP' ),
		'menu_name'          => _x( 'OurServices', 'admin menu', 'Lahin_WP' ),
		'name_admin_bar'     => _x( 'OurService', 'add new on admin bar', 'Lahin_WP' ),
		'add_new'            => _x( 'Add New', 'OurService', 'Lahin_WP' ),
		'add_new_item'       => __( 'Add New OurService', 'Lahin_WP' ),
		'new_item'           => __( 'New OurService', 'Lahin_WP' ),
		'edit_item'          => __( 'Edit OurService', 'Lahin_WP' ),
		'view_item'          => __( 'View OurService', 'Lahin_WP' ),
		'all_items'          => __( 'All OurServices', 'Lahin_WP' ),
		'search_items'       => __( 'Search OurServices', 'Lahin_WP' ),
		'parent_item_colon'  => __( 'Parent OurServices:', 'Lahin_WP' ),
		'not_found'          => __( 'No OurServices found.', 'Lahin_WP' ),
		'not_found_in_trash' => __( 'No OurServices found in Trash.', 'Lahin_WP' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'Lahin_WP' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'ourService' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor' )
	);

	register_post_type( 'ourService', $args );
};

add_action('init', 'my_custom_post_type_our_services');



// Registering custom texonomy 
// create two taxonomies, AboutUS and writers for the post type "book"
function about_custom_texo() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'AboutUS', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'About', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search AboutUS', 'textdomain' ),
		'all_items'         => __( 'All AboutUS', 'textdomain' ),
		'parent_item'       => __( 'Parent About', 'textdomain' ),
		'parent_item_colon' => __( 'Parent About:', 'textdomain' ),
		'edit_item'         => __( 'Edit About', 'textdomain' ),
		'update_item'       => __( 'Update About', 'textdomain' ),
		'add_new_item'      => __( 'Add New About', 'textdomain' ),
		'new_item_name'     => __( 'New About Name', 'textdomain' ),
		'menu_name'         => __( 'About', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'about_slug' ),
	);

	register_taxonomy( 'about_cats', array( 'aboutus' ), $args );

}

add_action( 'init', 'about_custom_texo');

// Custom Texonomy Category for About US 

function about_custom_category() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Category', 'textdomain' ),
		'update_item'       => __( 'Update Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Category', 'textdomain' ),
		'new_item_name'     => __( 'New Category Name', 'textdomain' ),
		'menu_name'         => __( 'Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'about_slug' ),
	);

	register_taxonomy( 'about_us_category', array( 'aboutus' ), $args );

}

add_action( 'init', 'about_custom_category');













// Including our custom meta files 

if( file_exists( dirname(__FILE__).'/ourservice-icon-meta.php' ) ){
	include(dirname(__FILE__).'/ourservice-icon-meta.php');
};

if(file_exists(dirname(__FILE__).'/ourevents-country-meta.php')) {
	include(dirname(__FILE__).'/ourevents-country-meta.php');
};

if(file_exists(dirname(__FILE__).'/ourteam-meta.php')) {
	include(dirname(__FILE__).'/ourteam-meta.php');
};

require_once('include/meta-box/functions.php');

function my_custom_post_type_about_us() {
    $labels = array(
		'name'               => _x( 'AboutUS', 'post type general name', 'Lahin_WP' ),
		'singular_name'      => _x( 'AboutUS', 'post type singular name', 'Lahin_WP' ),
		'menu_name'          => _x( 'AboutUS', 'admin menu', 'Lahin_WP' ),
		'name_admin_bar'     => _x( 'AboutUS', 'add new on admin bar', 'Lahin_WP' ),
		'add_new'            => _x( 'Add New', 'AboutUS', 'Lahin_WP' ),
		'add_new_item'       => __( 'Add New AboutUS', 'Lahin_WP' ),
		'new_item'           => __( 'New AboutUS', 'Lahin_WP' ),
		'edit_item'          => __( 'Edit AboutUS', 'Lahin_WP' ),
		'view_item'          => __( 'View AboutUS', 'Lahin_WP' ),
		'all_items'          => __( 'All AboutUS', 'Lahin_WP' ),
		'search_items'       => __( 'Search AboutUS', 'Lahin_WP' ),
		'parent_item_colon'  => __( 'Parent AboutUS:', 'Lahin_WP' ),
		'not_found'          => __( 'No AboutUS found.', 'Lahin_WP' ),
		'not_found_in_trash' => __( 'No AboutUS found in Trash.', 'Lahin_WP' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'Lahin_WP' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'aboutus' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor' )
	);

	register_post_type( 'aboutus', $args );
};

add_action('init', 'my_custom_post_type_about_us');





// widgets area

function Home_Footer_widgets_area()
{
	register_sidebar( array(
		'name'          => 'Home Footer Top',
		'id'            => 'home_footer_widget',
		'before_widget' => '<div class="footer-agiletop">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => 'Home Footer Bottom',
		'id'            => 'home_footer_bottom',
		'before_widget' => '<div class="footer-agileinfo"> <div class="col-md-4 col-sm-4 footer-wthreegrid">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Home Footer Bottom Copyright',
		'id'            => 'home_footer_copyright',
		'before_widget' => '<div class="container">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );	
}

add_action('widgets_init','Home_Footer_widgets_area');