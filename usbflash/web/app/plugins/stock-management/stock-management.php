<?php

/*
Plugin Name: Stock Management
Plugin URI: http://zelmandesign.com
Description: Simple and easy to use Stock Management Plugin.
Version: 0.1
Author: Andrzej Zelman
Author URI: http://zelmandesign.com
License: A "Slug" license name e.g. GPL2
*/

if ( ! defined ('ABSPATH')) {
    exit;
}

// USB Drives CPT
add_action('init', 'register_usb_drives_post_type');
function register_usb_drives_post_type()
{
    register_post_type('usb-product',
        array(
            'labels' => array(
                'name' => 'USB Sticks',
                'menu_name' => 'USB Sticks',
                'singular_name' => 'USB Stick',
                'all_items' => 'All Products'
            ),
            'menu_icon' => plugin_dir_url(__FILE__) . 'img/usb-icon.png',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats', 'custom-fields' , 'excerpt' ),
            'hierarchical' => false,
            'has_archive' => 'usb',
            'taxonomies' => array('usb-category', 'product_tag'),
            'rewrite' => array( 'slug' => 'usb', 'hierarchical' => true, 'with_front' => false )
        )
    );
    register_taxonomy( 'usb-category', array('usb-product'),
        array(
            'labels' => array(
                'name' => 'USB Sticks Categories',
                'menu_name' => 'USB Sticks Categories',
                'singular_name' => 'USB Sticks Category',
                'all_items' => 'All Categories',
            ),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true
        )
    );
    register_taxonomy( 'usb_product_tag', array('usb-product'),
        array(
            'labels' => array(
                'name' => 'USB Tags',
                'menu_name' => 'USB Tags',
                'singular_name' => 'USB Tag',
                'all_items' => 'All USB Tags',
                'update_item' => 'Update Tag',
                'add_new_item' => 'Add New Tag',
            ),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true
        )
    );
}


// Gadgets & Tech CPT
add_action('init', 'register_gadgets_post_type');
function register_gadgets_post_type()
{
    register_post_type('gadgets-product',
        array(
            'labels' => array(
                'name' => 'Tech Gifts',
                'menu_name' => 'Tech Gifts',
                'singular_name' => 'Tech Gifts',
                'all_items' => 'All Products'
            ),
            'menu_icon' => plugin_dir_url(__FILE__) . 'img/mobile-icon.png',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats', 'custom-fields', 'excerpt' ),
            'hierarchical' => false,
            'has_archive' => 'gadgets',
            'taxonomies' => array('gadgets-category', 'product_tag'),
            'rewrite' => array( 'slug' => 'gadgets', 'hierarchical' => true, 'with_front' => false )
        )
    );

    register_taxonomy( 'gadgets-category', array('gadgets-product'),
        array(
            'labels' => array(
                'name' => 'Tech Gifts Categories',
                'menu_name' => 'Tech Gifts Categories',
                'singular_name' => 'Tech Gifts Category',
                'all_items' => 'All Categories'
            ),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true
        )
    );
    register_taxonomy( 'tech_product_tag', array('gadgets-product'),
        array(
            'labels' => array(
                'name' => 'Tech Tags',
                'menu_name' => 'Tech Tags',
                'singular_name' => 'Tech Tag',
                'all_items' => 'All Tech Tags',
                'update_item' => 'Update Tag',
                'add_new_item' => 'Add New Tag',
            ),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true
        )
    );
}

// Removing CPT name from breadcrumbs

function my_breadcrumb_filter_function( $crumbs ) {

    // replace "cpt" with your custom post type name 
    if(is_singular('usb-product')) {
      $crumbs[1] = '';
    }
    elseif(is_singular('gadgets-product')) {
        $crumbs[1] = '';
    }
    return $crumbs;

}
add_filter( 'wpseo_breadcrumb_links', 'my_breadcrumb_filter_function' );
