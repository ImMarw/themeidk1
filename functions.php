<?php
function csablona_enqueue_styles()
{
    wp_enqueue_style('csablona-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style('mytheme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', [], '5.3.0');
    wp_enqueue_script('mytheme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', [], '5.3.0', true);
}
add_action('wp_enqueue_scripts', 'csablona_enqueue_styles');

function mytheme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
        'footer'  => __('Footer Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

function add_bootstrap_nav_classes($args)
{
    if ($args['theme_location'] == 'primary') {
        $args['menu_class'] = 'navbar-nav ms-auto';
        $args['container'] = false;
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'add_bootstrap_nav_classes');

function mytheme_customize_register($wp_customize)
{
    $wp_customize->add_section('contact_section', array(
        'title'    => __('Contact Information', 'mytheme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('contact_address', array(
        'default'   => '123 Street Name, City, Country',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_address', array(
        'label'   => __('Address', 'mytheme'),
        'section' => 'contact_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'mytheme_customize_register');
