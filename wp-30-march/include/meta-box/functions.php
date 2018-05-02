<?php



if ( defined( 'ABSPATH' ) && ! defined( 'RWMB_VER' ) ) {
    require_once dirname( __FILE__ ) . '/inc/loader.php';
    $loader = new RWMB_Loader();
    $loader->init();
}


add_filter( 'rwmb_meta_boxes', 'prefix_meta_boxes' );
function prefix_meta_boxes( $meta_boxes ) {
    $prefix = 'prefix-';

    $meta_boxes[] = array(
        'title'  => 'Test Meta Box',
        'post_types' => array( 'slider' ),
        'fields' => array(
            array(
                'id' => $prefix . 'main_title',
                'type' => 'text',
                'name' => esc_html__( 'Main Title', 'Lahin_WP' ),
            ),
            array(
                'id' => $prefix . 'main_text',
                'type' => 'textarea',
                'name' => esc_html__( 'Text', 'Lahin_WP' ),
                'cols' => 60,
                'rows' => 6
            ),
            
        ),
    );
    return $meta_boxes;
}


function ML_about_us_meta_boxes( $meta_boxes ) {
     $prefix = 'prefix-';

    $meta_boxes[] = array(
        'id' => 'subtitle_for_us',
        'title' => esc_html__( 'Write Subtitle', 'Lahin_WP' ),
        'post_types' => array( 'aboutus' ),
        'context' => 'after_title',
        // 'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix.'subtitle',
                'type' => 'text',
                'name' => esc_html__( 'Subtitle', 'Lahin_WP' ),
                'desc' => esc_html__( 'Write your subtitle', 'Lahin_WP' ),
            )
        ),
    );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'ML_about_us_meta_boxes' );


function ML_upload_image_meta_boxes( $meta_boxes ) {
     $prefix = 'prefix-';

    $meta_boxes[] = array(
        'id' => 'upload_image',
        'title' => esc_html__( 'Upload Images', 'Lahin_WP' ),
        'post_types' => array( 'aboutus' ),
        // 'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix.'abt_image',
                'type' => 'image',
                'name' => esc_html__( 'Upload Image', 'Lahin_WP' ),
                'desc' => esc_html__( 'Put your Image', 'Lahin_WP' ),
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'ML_upload_image_meta_boxes' );
