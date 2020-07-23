<?php
    function site_files(){
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Red+Rose&display=swap');
        wp_enqueue_style('university_main_syles', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'site_files');

    function site_features(){
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerMenuLocation', 'Footer Menu Location');
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'site_features');
?>