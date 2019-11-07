<?php
/**
 * portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio
 */


 // This theme uses wp_nav_menu() in one location.
 register_nav_menus( array(
   'menu-1' => esc_html__( 'Primary', 'portfolio' ),
 ) );


 /**
  * Register widget area.
  *
  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
  */
 function portfolio_widgets_init() {
 	register_sidebar( array(
 		'name'          => esc_html__( 'Sidebar', 'portfolio' ),
 		'id'            => 'sidebar-1',
 		'description'   => esc_html__( 'Add widgets here.', 'portfolio' ),
 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
 		'after_widget'  => '</section>',
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 	) );
 }
 add_action( 'widgets_init', 'portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {
	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

/* Custom Post Type */
function create_custom_post_types() {
    register_post_type( 'work',
        array(
            'labels' => array(
                'name' => __( 'work' ),
                'singular_name' => __( 'work' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'work' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );
