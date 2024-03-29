<?php 

function load_stylesheets()
{
  
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');
// we have to add this to run the function 

function loadjs() 
{
  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', ['jquery'], 1, true);
  wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )
  );

  add_image_size('smallest',300,300,true);  
  add_image_size('largest',800,800,true);

function load_font() {
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600');
}

add_action( 'wp_enqueue_scripts', 'load_font' );
