<?php

function fastgreece_enqueue_parent_styles() {
    if (is_rtl()) {
        wp_style_add_data('fastgreece', 'rtl', 'replace');
    } else {
        wp_enqueue_style( 'parent-style', get_parent_theme_file_uri('/style.css') );
    }
}
add_action( 'wp_enqueue_scripts', 'fastgreece_enqueue_parent_styles' );
