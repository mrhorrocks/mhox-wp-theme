<!-- enqueue hooks, styles & JS -->
<?php

// LOAD CSS HERE
function load_stylesheets()
{
    // custom.css
    wp_register_style('custom', get_template_directory_uri() . '/customstyles/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

    // another_custom.css
    wp_register_style('another_custom', get_template_directory_uri() . '/customstyles/another_custom.css', array(), 1, 'all');
    wp_enqueue_style('another_custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// LOAD SCRIPTS HERE
function addjs()
{
    // custom.js
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

    // another_custom_js
    wp_register_script('another_custom', get_template_directory_uri() . '/js/another_custom.js', array(), 1, 1, 1);
    wp_enqueue_script('another_custom');
}
add_action('wp_enqueue_scripts', 'addjs');

// THEME SUPPORT
add_theme_support('menus');

// REGISTER MENUS
register_nav_menus(
    array(
        'top_menu' => __('Top Menu', 'theme'),
    )
);
?>