<?php

function university_files() {
    
    //using microtime to disable caching -> REMOVE when deploying TODO
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    //using microtime to disable caching -> REMOVE when deploying TODO
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}


add_action('wp_enqueue_scripts','university_files');


function university_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuOne', 'Footer Location One');
    register_nav_menu('footerMenuTwo', 'Footer Location Two');

    add_theme_support('title-tag');
}

add_action('after_setup_theme','university_features');

//custom post type
function university_post_types() {
    register_post_type('event', array(
       'public' => true,
       'labels' => array(
           'name' => 'Events'
       ),
       'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'university_post_types');
