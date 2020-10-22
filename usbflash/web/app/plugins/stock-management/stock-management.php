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

// USB Drives 

add_action( 'init', 'register_usb_drives_post_type' );
function register_usb_drives_post_type() {
    register_post_type( 'usb-product',
        array(
            'labels' => array(
                'name' => 'USB Drives',
                'menu_name' => 'USB Drives',
                'singular_name' => 'USB Drive',
                'all_items' => 'All Products'
            ),
            'menu_icon' => plugin_dir_url( __FILE__ ) . 'img/usb-icon.png',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats', 'custom-fields' , 'excerpt' ),
            'hierarchical' => false,
            'has_archive' => 'usb-drives',
            'taxonomies' => array('usb-category'),
            'rewrite' => array( 'slug' => 'usb-drives', 'hierarchical' => true, 'with_front' => false )
        )
    );
    register_taxonomy( 'usb-category', array( 'usb-product' ),
        array(
            'labels' => array(
                'name' => 'USB Categories',
                'menu_name' => 'USB Categories',
                'singular_name' => 'USB Category',
                'all_items' => 'All Categories'
            ),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true
        )
    );
}


// Mobile Accessories

add_action( 'init', 'register_mobile_post_type' );
function register_mobile_post_type() {
    register_post_type( 'mobile-product',
        array(
            'labels' => array(
                'name' => 'Mobile',
                'menu_name' => 'Mobile',
                'singular_name' => 'Mobile',
                'all_items' => 'All Products'
            ),
            'menu_icon' => plugin_dir_url( __FILE__ ) . 'img/mobile-icon.png',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats', 'custom-fields', 'excerpt' ),
            'hierarchical' => false,
            'has_archive' => 'mobile',
            'taxonomies' => array('mobile-category'),
            'rewrite' => array( 'slug' => 'mobile', 'hierarchical' => true, 'with_front' => false )
        )
    );
    register_taxonomy( 'mobile-category', array( 'mobile-product' ),
        array(
            'labels' => array(
                'name' => 'Mobile Categories',
                'menu_name' => 'Mobile Categories',
                'singular_name' => 'Mobile Category',
                'all_items' => 'All Categories'
            ),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true
        )
    );
}