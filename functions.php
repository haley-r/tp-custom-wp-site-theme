<?php
    function site_files(){
        // I'm not sure if the following line is needed, it doesn't seem to make a difference locally.
        wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Red+Hat+Text:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_script('main-university-js', 'http://localhost:4000/bundled.js', NULL, '1.0', true);
    
    }
    add_action('wp_enqueue_scripts', 'site_files');

    function site_features(){
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerMenuLocation', 'Footer Menu Location');
        register_nav_menu('practiceAreasPage', 'Practice Areas Page');
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'site_features');
?>