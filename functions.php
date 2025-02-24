<?php
add_theme_support('woocommerce');
function mytheme_enqueue_styles() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
function mytheme_breadcrumbs() {
    if (function_exists('bcn_display')) {
        echo '<nav class="breadcrumbs">';
        bcn_display();
        echo '</nav>';
    }
}
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');
?>
