<?php



function load_stylesheets(){



wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all',true);

wp_enqueue_style('styles');

wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all',true);

wp_enqueue_style('animate');

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');

wp_enqueue_style('bootstrap');

wp_register_style('owl', get_template_directory_uri() . '/css/owl.theme.default.min.cs', array(), 1, 'all');

wp_enqueue_style('owl');




wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 1, 'all');

wp_enqueue_style('owl-carousel');




wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all', true);

wp_enqueue_style('responsive');






}

add_action('wp_enqueue_scripts', 'load_stylesheets' );





function mitemawp_menu(){

    register_nav_menu('primary','Top Navigation');
    add_action('init','mitemawp_menu');
}
?>