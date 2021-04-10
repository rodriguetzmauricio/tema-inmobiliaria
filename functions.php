<?php 

function agregar_css_js(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/css/bootstrap.css');

    wp_enqueue_script('popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js',array ( 'jquery' ),'2.9.1',true);
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js',array ( 'popper' ),'5.0',true);

}


add_action('wp_enqueue_scripts', 'agregar_css_js');


