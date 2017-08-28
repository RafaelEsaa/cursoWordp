<?php

add_theme_support( 'post-thumbnails' );

function register_my_menus(){
    register_nav_menus(
        array(
            'top-menu' => __('Menu Superior'),
            'bottom-menu' => __('Menu Inferior'),
            )
    );
}
add_action('init', 'register_my_menus');