<?php

function theme_files() {
    wp_enqueue_style( 'bootstrap-import', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style( 'main-styles', get_stylesheet_uri());
    wp_enqueue_style('animation-load', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script( 'stars-load', get_template_directory_uri() . '/js/stars.js', array(), '1', true);
    wp_enqueue_script( 'buttons-load', get_template_directory_uri() . '/js/buttons.js', array(), '1', false);
    wp_enqueue_script('font-family', '//fonts.googleapis.com/css2?family=Pacifico&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap');
}
add_action( 'wp_enqueue_scripts', 'theme_files' );

add_theme_support( 'post-thumbnails' );