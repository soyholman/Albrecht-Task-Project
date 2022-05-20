<?php



function load_stylesheets(){



wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all',true);

wp_enqueue_style('styles');

wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all',true);

wp_enqueue_style('animate');

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all',true);

wp_enqueue_style('bootstrap');

wp_register_style('owl', get_template_directory_uri() . '/css/owl.theme.default.min.cs', array(), 1, 'all',true);

wp_enqueue_style('owl');




wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 1, 'all',true);

wp_enqueue_style('owl-carousel');




wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all', true);

wp_enqueue_style('responsive');






}

add_action('wp_enqueue_scripts', 'load_stylesheets' );

add_theme_support('menus');



function mitemawp_menu(){

    register_nav_menu('primary','Top Navigation');
    add_action('init','mitemawp_menu');
}


register_nav_menus(



    array(
        'top-menu'=>__('Top Menu','theme')  
    )


    
    );
function add_class_li($classes,$item,$args){
if(isset($args->li_class)){

    $classes[]=$args->li_class;
}

if(isset($args->active_class) && in_array('current-menu-item',$classes)){
    $classes[]=$args->active_class;
}

return $classes;
    }
    add_filter('nav_menu_css_class','add_class_li',10,3);

    function add_anchor_class($attr ,$item,$args){
if(isset($args->a_class)){
    $attr['class']=$args->a_class;

}   
return $attr;     
    }
    add_filter('nav_menu_link_attributes','add_anchor_class',10,3);

    /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


?>

