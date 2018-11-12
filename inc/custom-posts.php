<?php

if ( ! function_exists('beloon_custom_post_type') ) {
	
    /**
     * Register a custom post type.
     *
     * @link http://codex.wordpress.org/Function_Reference/register_post_type
     */
    function beloon_custom_post_type() {

        //portfolio
        register_post_type(
            'portfolio', array(
            'labels'                 => array(
                'name'               => _x( 'Portfolio', 'post type general name', 'beloon' ),
                'singular_name'      => _x( 'Portfolio', 'post type singular name', 'beloon' ),
                'menu_name'          => _x( 'Portfolio', 'admin menu', 'beloon' ),
                'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'beloon' ),
                'add_new'            => _x( 'Add New', 'Portfolio', 'beloon' ),
                'add_new_item'       => __( 'Add New Portfolio', 'beloon' ),
                'new_item'           => __( 'New Portfolio', 'beloon' ),
                'edit_item'          => __( 'Edit Portfolio', 'beloon' ),
                'view_item'          => __( 'View Portfolio', 'beloon' ),
                'all_items'          => __( 'All Portfolio', 'beloon' ),
                'search_items'       => __( 'Search Portfolio', 'beloon' ),
                'parent_item_colon'  => __( 'Parent Portfolio:', 'beloon' ),
                'not_found'          => __( 'No Portfolio found.', 'beloon' ),
                'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'beloon' )
            ),

            'description'        => __( 'Description.', 'beloon' ),
            'menu_icon'          => 'dashicons-layout',
            'public'             => true,
            'show_in_menu'       => true,
            'has_archive'        => false,
            'hierarchical'       => true,
            'rewrite'            => array( 'slug' => 'portfolio' ),
            'supports'           => array( 'title', 'editor', 'thumbnail' )
        ));

        // portfolio taxonomy
        register_taxonomy(
            'portfolio_category',
            'portfolio',
            array(
                'labels' => array(
                    'name' => __( 'Portfolio Category', 'beloon' ),
                    'add_new_item'      => __( 'Add New Category', 'beloon' ),
                ),
                'hierarchical' => true,
                'show_admin_column'     => true
        ));
    }

    add_action( 'init', 'beloon_custom_post_type' );

}