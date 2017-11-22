<?php
/**
 * Implement a custom header for Twenty Thirteen
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

// Create post type (1. fish sauce big)
// -------------------------------------------------------------
add_action('init', 'khu13_sauce_big');
function khu13_sauce_big() {
  register_post_type( 'Sauce Big',
    array(
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 30,
      'labels' => array(
        'name' => __( 'Sauce Big' ),
        'singular_name' => __( 'Sauce Big' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Sauce Big' ),
        'edit' => __( 'Edit Sauce Big' ),
        'edit_item' => __( 'Edit Sauce Big' ),
        'new_item' => __( 'New Sauce Big' ),
        'view' => __( 'View Sauce Big' ),
        'view_item' => __( 'View Sauce Big' ),
        'search_items' => __( 'Search Sauce Big' ),
        'not_found' => __( 'No Sauce Big found' ),
        'not_found_in_trash' => __( 'No Sauce Big found in Trash' )
      ),
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'saucebig', 'with_front' => false ),
    )
  );

// -------------------------------------------------------------
  register_taxonomy(
    'saucebig-category',
    array( 'saucebig' ),
    array(
      'labels' => array(
        'name' => __( 'Sauce Big Categories' ),
        'singular_name' => __( 'Sauce Big Category' ),
        'search_items' => __( 'Search Sauce Big Category' ),
        'popular_items' => __( 'Popular Sauce Big Category' ),
        'all_items' => __( 'All Sauce Big Category' ),
        'parent_item' => __( 'Parent Sauce Big Category' ),
        'parent_item_colon' => __( 'Parent Sauce Big Category:' ),
        'edit_item' => __( 'Edit Sauce Big Category' ),
        'update_item' => __( 'Update Sauce Big Category' ),
        'add_new_item' => __( 'Add New Sauce Big Category' ),
        'new_item_name' => __( 'New Sauce Big Category' ),
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'saucebig', 'with_front' => false ),
    )
  );
}

// Create post type (1. fish sauce big)
// -------------------------------------------------------------
add_action('init', 'khu13_sauce_small');
function khu13_sauce_small() {
  register_post_type( 'Sauce Small',
    array(
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 30,
      'labels' => array(
        'name' => __( 'Sauce Small' ),
        'singular_name' => __( 'Sauce Small' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Sauce Small' ),
        'edit' => __( 'Edit Sauce Small' ),
        'edit_item' => __( 'Edit Sauce Small' ),
        'new_item' => __( 'New Sauce Small' ),
        'view' => __( 'View Sauce Small' ),
        'view_item' => __( 'View Sauce Small' ),
        'search_items' => __( 'Search Sauce Small' ),
        'not_found' => __( 'No Sauce Small found' ),
        'not_found_in_trash' => __( 'No Sauce Small found in Trash' )
      ),
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'saucesmall', 'with_front' => false ),
    )
  );

// -------------------------------------------------------------
  register_taxonomy(
    'saucesmall-category',
    array( 'saucesmall' ),
    array(
      'labels' => array(
        'name' => __( 'Sauce Small Categories' ),
        'singular_name' => __( 'Sauce Small Category' ),
        'search_items' => __( 'Search Sauce Small Category' ),
        'popular_items' => __( 'Popular Sauce Small Category' ),
        'all_items' => __( 'All Sauce Small Category' ),
        'parent_item' => __( 'Parent Sauce Small Category' ),
        'parent_item_colon' => __( 'Parent Sauce Small Category:' ),
        'edit_item' => __( 'Edit Sauce Small Category' ),
        'update_item' => __( 'Update Sauce Small Category' ),
        'add_new_item' => __( 'Add New Sauce Small Category' ),
        'new_item_name' => __( 'New Sauce Small Category' ),
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'saucesmall', 'with_front' => false ),
    )
  );
}


// Create post type (3. Blog)
// -------------------------------------------------------------
add_action('init', 'khu13_blog');
function khu13_blog() {
  register_post_type( 'Blog',
    array(
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 30,
      'labels' => array(
        'name' => __( 'Blog' ),
        'singular_name' => __( 'Blog' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Blog' ),
        'edit' => __( 'Edit Blog' ),
        'edit_item' => __( 'Edit Blog' ),
        'new_item' => __( 'New Blog' ),
        'view' => __( 'View Blog' ),
        'view_item' => __( 'View Blog' ),
        'search_items' => __( 'Search Blog' ),
        'not_found' => __( 'No Blog found' ),
        'not_found_in_trash' => __( 'No Blog found in Trash' )
      ),
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'blog', 'with_front' => false ),
    )
  );

// -------------------------------------------------------------
  register_taxonomy(
    'blog-category',
    array( 'blog' ),
    array(
      'labels' => array(
        'name' => __( 'Blog Categories' ),
        'singular_name' => __( 'Blog Category' ),
        'search_items' => __( 'Search Blog Category' ),
        'popular_items' => __( 'Popular Blog Category' ),
        'all_items' => __( 'All Blog Category' ),
        'parent_item' => __( 'Parent Blog Category' ),
        'parent_item_colon' => __( 'Parent Blog Category:' ),
        'edit_item' => __( 'Edit Blog Category' ),
        'update_item' => __( 'Update Blog Category' ),
        'add_new_item' => __( 'Add New Blog Category' ),
        'new_item_name' => __( 'New Blog Category' ),
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'blog', 'with_front' => false ),
    )
  );
}

// Create post type (4. quảng cáo)
// -------------------------------------------------------------
add_action('init', 'khu13_advertisement');
function khu13_advertisement() {
  register_post_type( 'Advertisement',
    array(
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 30,
      'labels' => array(
        'name' => __( 'Advertisement' ),
        'singular_name' => __( 'Advertisement' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Advertisement' ),
        'edit' => __( 'Edit Advertisement' ),
        'edit_item' => __( 'Edit Advertisement' ),
        'new_item' => __( 'New Advertisement' ),
        'view' => __( 'View Advertisement' ),
        'view_item' => __( 'View Advertisement' ),
        'search_items' => __( 'Search Advertisement' ),
        'not_found' => __( 'No Advertisement found' ),
        'not_found_in_trash' => __( 'No Advertisement found in Trash' )
      ),
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'advertisement', 'with_front' => false ),
    )
  );

// -------------------------------------------------------------
  register_taxonomy(
    'advertisement-category',
    array( 'advertisement' ),
    array(
      'labels' => array(
        'name' => __( 'Advertisement Categories' ),
        'singular_name' => __( 'Advertisement Category' ),
        'search_items' => __( 'Search Advertisement Category' ),
        'popular_items' => __( 'Popular Advertisement Category' ),
        'all_items' => __( 'All Advertisement Category' ),
        'parent_item' => __( 'Parent Advertisement Category' ),
        'parent_item_colon' => __( 'Parent Advertisement Category:' ),
        'edit_item' => __( 'Edit Advertisement Category' ),
        'update_item' => __( 'Update Advertisement Category' ),
        'add_new_item' => __( 'Add New Advertisement Category' ),
        'new_item_name' => __( 'New Advertisement Category' ),
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'advertisement', 'with_front' => false ),
    )
  );
}

// Create post type (4. quảng cáo)
// -------------------------------------------------------------
add_action('init', 'khu13_product');
function khu13_product() {
  register_post_type( 'Product',
    array(
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 30,
      'labels' => array(
        'name' => __( 'Product' ),
        'singular_name' => __( 'Product' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Product' ),
        'edit' => __( 'Edit Product' ),
        'edit_item' => __( 'Edit Product' ),
        'new_item' => __( 'New Product' ),
        'view' => __( 'View Product' ),
        'view_item' => __( 'View Product' ),
        'search_items' => __( 'Search Product' ),
        'not_found' => __( 'No Product found' ),
        'not_found_in_trash' => __( 'No Product found in Trash' )
      ),
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'product', 'with_front' => false ),
    )
  );

// -------------------------------------------------------------
  register_taxonomy(
    'product-category',
    array( 'product' ),
    array(
      'labels' => array(
        'name' => __( 'Product Categories' ),
        'singular_name' => __( 'Product Category' ),
        'search_items' => __( 'Search Product Category' ),
        'popular_items' => __( 'Popular Product Category' ),
        'all_items' => __( 'All Product Category' ),
        'parent_item' => __( 'Parent Product Category' ),
        'parent_item_colon' => __( 'Parent Product Category:' ),
        'edit_item' => __( 'Edit Product Category' ),
        'update_item' => __( 'Update Product Category' ),
        'add_new_item' => __( 'Add New Product Category' ),
        'new_item_name' => __( 'New Product Category' ),
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'product', 'with_front' => false ),
    )
  );
}

// Create post type (5. news)
// -------------------------------------------------------------
add_action('init', 'khu13_news');
function khu13_news() {
  register_post_type( 'News',
    array(
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'menu_position' => 30,
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'Tin tức' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New News' ),
        'edit' => __( 'Edit News' ),
        'edit_item' => __( 'Edit News' ),
        'new_item' => __( 'New News' ),
        'view' => __( 'View News' ),
        'view_item' => __( 'View News' ),
        'search_items' => __( 'Search News' ),
        'not_found' => __( 'No News found' ),
        'not_found_in_trash' => __( 'No News found in Trash' )
      ),
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'news', 'with_front' => false ),
    )
  );

// -------------------------------------------------------------
  register_taxonomy(
    'news-category',
    array( 'news' ),
    array(
      'labels' => array(
        'name' => __( 'News Categories' ),
        'singular_name' => __( 'News Category' ),
        'search_items' => __( 'Search News Category' ),
        'popular_items' => __( 'Popular News Category' ),
        'all_items' => __( 'All News Category' ),
        'parent_item' => __( 'Parent News Category' ),
        'parent_item_colon' => __( 'Parent News Category:' ),
        'edit_item' => __( 'Edit News Category' ),
        'update_item' => __( 'Update News Category' ),
        'add_new_item' => __( 'Add New News Category' ),
        'new_item_name' => __( 'New News Category' ),
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'news', 'with_front' => false ),
    )
  );
}