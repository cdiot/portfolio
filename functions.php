<?php

namespace App;

function supports() {
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header','En tete du menu');

    add_image_size('post-thumbnail', 500, 300, true);
    add_image_size('card-img', 200, 300, true);
}

function register_assets () {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css', []); // enregistre
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js', ['popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    //wp_deregister_script('jquery');
    // https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js
    wp_enqueue_style('bootstrap'); // utilise
    wp_enqueue_script('bootstrap');
}

function title_separator () {
    return '|';
}

function menu_class (array $classes): array {
    $classes[] = 'nav-items active';
    return $classes;
}

function menu_link_class (array $attrs): array {
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function init () {
    register_taxonomy('skills', 'post', [
        'labels' => [
            'name' => 'Competences',
            'singular_name' => 'Competence',
            'plural_name' => 'Competences',
            'search_items' => 'Rechercher des competences',
            'all_items' => 'Tous les competences',
            'edit_item' => 'Editer la competence',
            'update_item' => 'Mettre à jour la competence',
            'add_new_item' => 'Ajouter une nouvelle competence',
            'new_item_name' => 'Ajouter une nouvelle competence',
            'menu_name' => 'Competence'
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'query_var' => true
    ]);
    register_post_type('etudedecas', [
        'label' => 'Etude de cas',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'taxonomies' => array('category', 'post_tag'),
        'show_in_rest' => true,
        'has_archive' => true
    ]);
    register_post_type('projets', [
        'label' => 'Projets',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-hammer',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'taxonomies' => array('category', 'post_tag'),
        'show_in_rest' => true,
        'has_archive' => true
    ]);
    register_post_type('voyage', [
        'label' => 'Voyage',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => array('category', 'post_tag'),
        'show_in_rest' => true,
        'has_archive' => true
    ]);
    register_post_type('manga', [
        'label' => 'Manga',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'taxonomies' => array('category', 'post_tag'),
        'show_in_rest' => true,
        'has_archive' => true
    ]);
}

add_action('init', 'App\init');
add_action('after_setup_theme', 'App\supports');
add_action('wp_enqueue_scripts', 'App\register_assets');
add_filter('document_title_separator',  'App\title_separator');
add_filter('nav_menu_css_class', 'App\menu_class');
add_filter('nav_menu_link_attributes', 'App\menu_link_class');