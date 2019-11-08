
<?php

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );



/* Custom Post Type */
function create_custom_post_types() {
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'projects' ),
                'singular_name' => __( 'project' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'projects' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );
?>
