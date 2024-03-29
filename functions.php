<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    $parenthandle = 'bard-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'bard-child-justine-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
}
