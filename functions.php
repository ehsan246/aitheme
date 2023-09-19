<?php
function aitheme_theme_support(){
    // <title>P3 AI</title>
    // This will make the title dynamic
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'aitheme_theme_support');

function aitheme_theme_menus(){
    // menu bar position
    $locations = array(
        'primary' => "Primary Main Navbar",
        'mobile' => "Mobile Left Sidebar"
    );

    register_nav_menus($locations);
}
add_action('init','aitheme_theme_menus');



function aitheme_register_style(){

    // $version = wp_get_theme()->get( 'Version' );
    // wp_enqueue_style('aitheme-style', get_template_directory_uri() . "/style.css", array('aitheme-style'), '1.0', 'all' );
    // wp_enqueue_scripts('aitheme-fontawesome', 'https://kit.fontawesome.com/ffe9f14d05.js', array('jquery'), '1.0', true);
    
}

// add_action( 'wp_enqueue_scripts', 'aitheme_register_script');



//  For JavaScript
// function aitheme_register_script() {

// }

// add_action('wp_enqueue_scripts', 'aitheme_register_script');

?>