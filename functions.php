<?php
add_action( 'wp_enqueue_scripts', 'blank_child_enqueue_styles' );
function blank_child_enqueue_styles() {
    $parent_style = 'blank-child-parent-style'; // 'Your-parent-theme-style'.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>