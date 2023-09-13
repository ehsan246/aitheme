<?php

function aitheme_register_style(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('aitheme-style', get_template_directory_uri() . "/style.css", array("aitheme-fontawesome"), $version, 'all' );
    wp_enqueue_style('aitheme-fontawesome',"https://kit.fontawesome.com/ffe9f14d05.js", array(), '1.0', 'all' );

}

add_action( 'wp_enqueue_scripts', 'aitheme_register_style');

?>