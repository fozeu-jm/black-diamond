<?php

function theme_post_types() {
    register_post_type('slider', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'diapositives'),
        'public' => true,
        
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Caroussel',
            'add_new_item' => 'Ajouter une diapositive',
            'edit_item' => 'Modifier une diapositive',
            'all_items' => 'Tous les diapositives',
            'singular_name' => 'Caroussel'
        ),
        'menu_icon' => 'dashicons-format-gallery',
    ));
    
    
//    register_post_type('services', array(
//        'rewrite' => array('slug' => 'services'),
//        'public' => true,
//        'has_archive' => true,
//        'taxonomies' => array('category'),
//        'labels' => array(
//            'name' => 'Service',
//            'add_new_item' => 'Ajouter service',
//            'edit_item' => 'Modifier service',
//            'all_items' => 'Tous les services',
//            'singular_name' => 'Service'
//        ),
//        'menu_icon' => 'dashicons-awards',
//        'show_in_rest'       => true
//    ));
    
    register_post_type('menu', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'Menu'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Menu',
            'add_new_item' => 'Ajouter menu',
            'edit_item' => 'Modifier menu',
            'all_items' => 'Tous les menus',
            'singular_name' => 'Menu'
        ),
        'menu_icon' => 'dashicons-welcome-widgets-menus',
    ));
    
    register_post_type('reference', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'Reference'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'References',
            'add_new_item' => 'Ajouter reference',
            'edit_item' => 'Modifier reference',
            'all_items' => 'Tous les reference',
            'singular_name' => 'References'
        ),
        'menu_icon' => 'dashicons-phone',
    ));
}

add_action('init', 'theme_post_types');