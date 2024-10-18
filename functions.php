<?php
function web_create_enqueue_styles() {
        wp_enqueue_style('reset-style', get_template_directory_uri(). '/reset.css');

		wp_enqueue_style( 'web_create-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'web_create_enqueue_styles' );
?>