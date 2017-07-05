<?php

/*
   ==============================================
   Include scripts
   ==============================================
*/

function asg_script_enqueue() {
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/asgbs.min.css', array(), '3.3.7', 'all');
   wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all');
   wp_enqueue_style('asgstyle', get_template_directory_uri() . '/css/asg.css', array(), '1.0.0', 'all');

   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
   wp_enqueue_script('asgjs', get_template_directory_uri() . '/js/asg.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'asg_script_enqueue');

/*
   ==============================================
   Head function
   ==============================================
*/

function asg_remove_version() {
   return '';
}
add_filter('the_generator', 'asg_remove_version');

/*
   ==============================================
   Activate menus
   ==============================================
*/

function awesome_theme_setup() {
   add_theme_support('menus');
   register_nav_menu('primary', 'Primary Header Navigation');
   register_nav_menu('secondary', 'Footer Navigation');
   register_nav_menu('social', 'Social Links');
}
add_action('init', 'awesome_theme_setup');

/*
   ==============================================
   Theme support
   ==============================================
*/
function asg_custom_logo() {
   add_theme_support('custom-logo', array(
      'height'             => 100,
      'width'              => 400,
      'flex-width'         => true,
   ));
}
add_action('init', 'asg_custom_logo');

/*
   ==============================================
   Include Walker file
   ==============================================
*/

require get_template_directory() . '/inc/walker.php';

/*
   ==============================================
   Admin bar
   ==============================================
*/

function mbe_body_class($classes){
    if(is_user_logged_in()){
        $classes[] = 'body-logged-in';
    } else{
        $classes[] = 'body-logged-out';
    }
    return $classes;
}

function mbe_wp_head(){
    echo '<style>'
    .PHP_EOL
    .'body{ padding-top: 70px !important; }'
    .PHP_EOL
    .'body.body-logged-in .navbar-fixed-top{ top: 46px !important; }'
    .PHP_EOL
    .'body.logged-in .navbar-fixed-top{ top: 46px !important; }'
    .PHP_EOL
    .'@media only screen and (min-width: 783px) {'
    .PHP_EOL
    .'body{ padding-top: 70px !important; }'
    .PHP_EOL
    .'body.body-logged-in .navbar-fixed-top{ top: 28px !important; }'
    .PHP_EOL
    .'body.logged-in .navbar-fixed-top{ top: 28px !important; }'
    .PHP_EOL
    .'}</style>'
    .PHP_EOL;
}
add_filter('body_class', 'mbe_body_class');
add_action('wp_head', 'mbe_wp_head');
