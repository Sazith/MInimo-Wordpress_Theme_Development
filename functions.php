<?php 

//Theme Title
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// css /js file calling
function minimo_css_js(){
    wp_enqueue_style('minimo-style',get_stylesheet_uri());

    wp_register_style('bootstrap',get_template_directory_uri( ).'./include/css/bootstrap.css', array(), '5.3.1','all');
    wp_enqueue_style( 'bootstrap');

    wp_register_style( 'custom', get_template_directory_uri( ).'./include/css/custom.css');
    wp_enqueue_style( 'custom' );

    //jquery
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri( ).'./include/js/bootstrap.bundle.js', array(), '5.3.1', 'true' );
    wp_enqueue_script( 'main', get_template_directory_uri( ).'./include/js/main.js', array(), '1.0.0', 'true' );

}

add_action('wp_enqueue_scripts', 'minimo_css_js');

register_nav_menus( 
    array('primary-menu' =>'Header Menu')
);