<?php
function theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 75,
		'width'       => 300,
		'flex-width' => true,
	));
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function registerMenus() {
    register_nav_menu('primary', 'Header Nav');
}

add_action('after_setup_theme', 'registerMenus');

function loadStyleScript() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('themeStyle', get_template_directory_uri() . '/css/themeStyle.css');

    wp_enqueue_script('jqueryNew', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array('jquery'), 3.5, true);
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), 4.5, true);
    wp_enqueue_script('PopperJS', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), 1.16, true);
}

add_action('init', 'loadStyleScript');

function header_alt($default_alt = 'Image') {
    $header = get_custom_header();
    if ( ! $header ) {
       return $default_alt;
    }
    return get_post_meta($header->attachment_id, '_wp_attachment_image_alt', true);
}

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'init', 'register_navwalker' );