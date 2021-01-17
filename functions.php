<?php

function customtheme_register_styles(){
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('customtheme-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(), '5.13.0/', 'all');
  wp_enqueue_style('customtheme-fontawesome', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(), '4.4.1', 'all');
  wp_enqueue_style('customtheme-styles', get_template_directory_uri()."/style.css",array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'customtheme_register_styles');

?>