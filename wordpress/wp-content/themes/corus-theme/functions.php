<?php
// Our custom post type function
function create_posttype() {
 
    register_post_type( 'gallery',
    // Custom post type Options
        array(
            'labels' => array(
                'name' => __( 'gallery' ),
                'singular_name' => __( 'gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gallery'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
?>