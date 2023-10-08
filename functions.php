<?php
/**
 * TailWP functions and definitions
 *
 * @package tailwp
 */

/**
 * enqueue scripts and styles.
 */
function load_scripts() {
    wp_enqueue_script( 'tailwp-jquery', get_template_directory_uri() . '/assets/js/jquery-3-1-1.min.js', array('jquery'), '3.1.1', true );
    wp_enqueue_style( 'tailwp-tailwind', get_template_directory_uri() . '/output.css', [], '0.0.1');
    wp_enqueue_script( 'tailwp-preline', get_template_directory_uri() . '/node_modules/preline/dist/preline.js', [], '3.3.3');
    wp_enqueue_style( 'tailwp-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


function wp_config(){
    // Registrando menus
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'wphahamu' ),
    ) );

    // Adicionando suporte ao tema
    $args = array(
        'height'	=> 600,
        'width'		=> 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'single-post-thumbnail', 1024, 800 );
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
        'height' => '46',
        'width' => '220'
    ]);
}
add_action( 'after_setup_theme', 'wp_config', 0 );
