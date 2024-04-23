<?php
function enqueue_parent_theme_style() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_theme_style');
