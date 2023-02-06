<?php
/**
 * Function for loading js and css files required for the frontend 
 *
 * @return void
 */
function csp_scripts_frontend() {
    wp_enqueue_style( 'style', PLUGIN_URL_ASSETTS . '/css/style.css', array(),  time(), 'all' );

    if ( is_singular('branch') ) {
        wp_enqueue_style( 'branch-style', PLUGIN_URL_ASSETTS . '/css/single-branch-style.css', array(),  time(), 'all' );
        wp_enqueue_script( 'branch-js', PLUGIN_URL_ASSETTS . '/js/branch.js', array( 'jquery' ), time(),true );
    }
}
add_action( 'wp_enqueue_scripts', 'csp_scripts_frontend' );