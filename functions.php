<?php
function enqueue_theme_assets() {
    // CSSの登録
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0.0', 'all');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('theme-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array('theme-style'), '1.0.0', 'all');
    // JSの登録
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true); // trueはフッターで読み込む設定
    wp_enqueue_script('theme-custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('theme-script'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');

// function register_my_menu() {
//     register_nav_menu('primary-menu', __('Primary Menu'));
// }
// add_action('init', 'register_my_menu');
?>
