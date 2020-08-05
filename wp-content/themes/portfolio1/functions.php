<?php

// // Check Server PHP Version
// if (version_compare('7.4', phpversion(), '>')) {
//     die('You must be using PHP 7.4 or greater.');
// }

// // Check WP Version
// if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
//     die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site');
// }

/* get css */
    function include_css_files() {
        wp_enqueue_style('idm250-css', get_template_directory_uri() . '/assets/style.css');
    }

    add_action('wp_enqueue_scripts','include_css_files');

 /* get js */   
    function include_js_files() {
        wp_enqueue_script('idm250-js', get_template_directory_uri() . '/assets/script.js');
    }

    add_action('wp_enqueue_scripts','include_js_files');

/* Register Menu*/
function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');



function default_page_menu() {
   wp_list_pages('title_li=');
} 

/* Enable support for Post Thumbnails on posts and pages */

function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

?>

