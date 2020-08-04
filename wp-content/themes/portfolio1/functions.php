
<?php 
    function include_css_files() {
        wp_enqueue_style('idm250-css', get_template_directory_uri() . '/assets/style.css');
    }

    add_action('wp_enqueue_scripts','include_css_files');

    
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

?>

