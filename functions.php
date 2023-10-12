<?php
function carregar_scripts(){

    //Css programador
    wp_enqueue_style('customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');
    wp_enqueue_style('customer-blog', get_template_directory_uri() . '/css/customer-blog.css', array(), '1.1', 'all');
    
}
    add_action('wp_enqueue_scripts', 'carregar_scripts');

    //configurações Gerais 
    function config_geral(){
        //regitro dos menus
        register_nav_menus(
            array(
                'menu_principal' => 'Menu Principal',
                'menu_footer' => 'Menu Footer'
            )
        );
    }

    add_action('after_setup_theme', 'config_geral');

?>