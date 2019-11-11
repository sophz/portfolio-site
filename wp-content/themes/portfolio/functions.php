<?php
// Theme support for menus
function portfolio_setup() {

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

    // Register Menus
    register_nav_menus( array (
        'top-nav' => __( 'Top Nav', 'portfolio' ),
        'social-media'  => __( 'Social Media Nav', 'portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'portfolio_setup' );


/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {
	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );


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

/* Custom Post Type */
function create_custom_post_types() {
    register_post_type( 'work',
        array(
            'labels' => array(
                'name' => __( 'work' ),
                'singular_name' => __( 'work' )
            ),
            'public' => true,
        )
    );
		register_post_type( 'introductions',
				array(
						'labels' => array(
								'name' => __( 'introductions' ),
								'singular_name' => __( 'introduction' )
						),
						'public' => true,
				)
		);

		register_post_type( 'what-we-offer',
				array(
						'labels' => array(
								'name' => __( 'what-we-offer' ),
								'singular_name' => __( 'what-we-offer' )
						),
						'public' => true,
				)
		);
}
add_action( 'init', 'create_custom_post_types' );
