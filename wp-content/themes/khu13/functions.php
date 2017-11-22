<?php
/**
 * Twenty Thirteen functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see https://codex.wordpress.org/Theme_Development
 * and https://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

require_once (TEMPLATEPATH . '/inc/url-tags.php');
require_once (TEMPLATEPATH . '/inc/post-types.php');

function khu13_style(){

  wp_enqueue_style( 'style', get_template_directory_uri () . '/css/khu13/style.css',array());
  wp_enqueue_style( 'style_sp', get_template_directory_uri () . '/css/khu13/style_sp.css',array(),'','screen and (max-width: 767px)');

  if(is_home()||is_front_page()){
    wp_enqueue_style ( 'index', get_template_directory_uri () . '/css/khu13/screen.css',array());
    wp_enqueue_style ( 'index', get_template_directory_uri () . '/css/khu13/lightbox.css',array());
  } else if(is_page('contact')){
    wp_enqueue_style ( 'contact', get_template_directory_uri () . '/css/khu13/contact.css',array());
    wp_enqueue_style ( 'contact_sp', get_template_directory_uri () . '/css/khu13/contact_sp.css',array(),'','screen and (max-width: 767px)');
  } else {
    wp_enqueue_style ( 'news', get_template_directory_uri () . '/css/khu13/news.css',array());
    wp_enqueue_style ( 'news_sp', get_template_directory_uri () . '/css/khu13/news_sp.css',array(),'','screen and (max-width: 767px)');
  }
}
add_action ( 'wp_enqueue_scripts', 'khu13_style' );

function khu13_scripts(){
  wp_register_script('jquery-script',get_template_directory_uri().'/js/khu13/jquery-1.9.1.min.js');
  wp_register_script('bxslider-script',get_template_directory_uri().'/js/khu13/jquery.bxslider.js');
  wp_register_script('lightbox-script',get_template_directory_uri().'/js/khu13/lightbox.js');
  wp_register_script('index-script',get_template_directory_uri().'/js/khu13/index.js');
  wp_enqueue_script('jquery-script');
  wp_enqueue_script('bxslider-script');
  wp_enqueue_script('lightbox-script');
  wp_enqueue_script('index-script');
}
add_action('wp_enqueue_scripts','khu13_scripts');

function is_child( $page_id_or_slug ) {
  global $post;
  if ( !is_numeric( $page_id_or_slug ) ) {
      $page = get_page_by_path( $page_id_or_slug );
      $page_id_or_slug = $page->ID;
  }
  if ( is_page() && ( $post->post_parent == $page_id_or_slug ) )
      return true;
  else
      return false;
};
