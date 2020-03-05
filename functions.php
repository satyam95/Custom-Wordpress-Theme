<?php

// Required files

    require get_template_directory() . '/inc/requiredfile.php';
    require_once('wp_bootstrap_navwalker.php');

// Theme Support

    function businesssixten_theme_support(){
    // Custom Logo
    add_theme_support('custom-logo');

    // Navigation
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    )); 
    }
    add_action('after_setup_theme', 'businesssixten_theme_support');

// Widget Registration

    function businesssixten_widgets($id){
        register_sidebar(array(
            'name'		=> 'Footer 1',
            'id'		=> 'footer-1',
            'before_widget'	=> '',
            'after_widget'	=> '',
            'before_title'	=>	'<h4>',
            'after_title'	=>	'</h4>'
        ));

        register_sidebar(array(
            'name'		=> 'Footer 2',
            'id'		=> 'footer-2',
            'before_widget'	=> '',
            'after_widget'	=> '',
            'before_title'	=>	'<h4>',
            'after_title'	=>	'</h4>'
        ));

        register_sidebar(array(
            'name'		=> 'Footer 3',
            'id'		=> 'footer-3',
            'before_widget'	=> '',
            'after_widget'	=> '',
            'before_title'	=>	'<h4>',
            'after_title'	=>	'</h4>'
        ));

        register_sidebar(array(
            'name'		=> 'Sidebar',
            'id'		=> 'sidebar',
            'before_widget'	=> '<div class="panel panel-default sidebar-widget">',
            'after_widget'	=> '</div></div>
            ',
            'before_title'	=> '<div class="panel-heading"><h3 class="panel-title">',
            'after_title'	=> '</h3></div><div class="panel-body">'
        ));
    }
    add_action('widgets_init', 'businesssixten_widgets');