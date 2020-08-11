<?php 

/* get css */
function include_css_files() {
    wp_enqueue_style('idm250-css', get_template_directory_uri() . '/assets/style.css');
}

add_action('wp_enqueue_scripts','include_css_files');

/* get js */   
function include_js_files() {
    wp_enqueue_script(
        'idm250-js', 
        get_template_directory_uri() . '/assets/script.js',
        [],
        false,
        true
    );
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