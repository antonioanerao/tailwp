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
