<?php
//Woocommerce Support
add_theme_support( 'woocommerce' );

// Link JavaScript and Jquery
function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/grid/bootstrap.min.css' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'stlying-css', get_template_directory_uri() . '/css/styles.css' );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive-style.css' );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/javascript.js', array( 'jquery' ), null, true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
	
//Navigation Menus

function register_my_menus() {
    register_nav_menus(
        array(
        'primary' => __( 'Primary Menu' ),
        'footer' => __( 'Footer Menu' ),
        )
    );
}
 add_action( 'init', 'register_my_menus' );

		
//Add Our Widget Locations
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'main',
            'name'          => __( 'Main Shop Sidebar' ),
            'description'   => __( 'The primary sidebar used for the shop' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

?>