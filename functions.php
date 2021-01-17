<?php

function customtheme_theme_support(){
  // Adds dynamic title tag support
  add_theme_support('title_tag');
}

add_action('after_setup_theme', 'customtheme_theme_support');

function customtheme_menus(){
  $locations = array(
      'primary' => "Desktop Primary Left Sidebar",
      'footer' => "FooterMenu"
  );
  register_nav_menus($locations);
}
add_action('init', 'customtheme_menus');

function customtheme_register_styles(){
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('customtheme-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(), '5.13.0/', 'all');
  wp_enqueue_style('customtheme-fontawesome', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(), '4.4.1', 'all');
  wp_enqueue_style('customtheme-styles', get_template_directory_uri()."/style.css",array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'customtheme_register_styles');

function customtheme_register_scripts(){
  wp_enqueue_script('customtheme-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(), '3.4.1', true);
  wp_enqueue_script('customtheme-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(), '3.4.1', true);
  wp_enqueue_script('customtheme-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(), '3.4.1', true);
  wp_enqueue_script('customtheme-main',get_template_directory_uri().'/assets/js.main.js',array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'customtheme_register_scripts');

?>