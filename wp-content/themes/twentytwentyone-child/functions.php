<?php
function mychildtheme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' ); 
function admin_style() {
  wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/assets/editor-style.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

add_theme_support( 'editor-styles' );
add_editor_style( 'editor-style.css' );
?>
