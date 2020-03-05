<?php

// Adding Bootstrap & Main CSS File 

function fxt_scripts(){
    // All Style
    wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('css/font-awesome.css'));
    wp_enqueue_style('style', get_stylesheet_uri());

    // All Scripts
    wp_enqueue_script('bootstrap', get_theme_file_uri('js/bootstrap.js'));
    
}

add_action('wp_enqueue_scripts', 'fxt_scripts');