<?php
// create function (name of choosing)
function site_files(){
    // this tells the theme where to get scripts? I don't remember what this is for actually
    // wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    // this is like importing a font, lets wp know where to get webfont (rather than coding in the head)
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // this looks for a same-level file called style.css (rather than coding in the head to look for it)
    wp_enqueue_style('university_main_syles', get_stylesheet_uri());
}
// then add an action, this allows wp to execute the function of linking files when it deems the time is right.
add_action('wp_enqueue_scripts', 'site_files');

// I think this function uses some wp built in functions to do useful things
function site_features(){
    // this one initializes a header menu, so we can see in dashboard in browser
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // this one makes it so that the title tab in browser says the page you are on- neat!
    add_theme_support('title-tag');
}
// this runs the above function when the time is right
add_action('after_setup_theme', 'site_features');
?>