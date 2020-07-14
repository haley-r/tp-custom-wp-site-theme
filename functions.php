<?php

function university_files(){
    wp_enqueue_style('university_main_syles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');
