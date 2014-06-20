<?php


add_action( 'init', 'bat_custom_post_init' );
/**
 * Register a trampoline post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bat_custom_post_init() {
	$labels = array(
		'name'               => _x( 'Trampolines', 'post type general name', 'default' ),
		'singular_name'      => _x( 'Trampoline', 'post type singular name', 'default' ),
		'menu_name'          => _x( 'Trampolines', 'admin menu', 'default' ),
		'name_admin_bar'     => _x( 'Trampoline', 'add new on admin bar', 'default' ),
		'add_new'            => _x( 'Add New', 'trampoline', 'default' ),
		'add_new_item'       => __( 'Add New Trampoline', 'default' ),
		'new_item'           => __( 'New Trampoline', 'default' ),
		'edit_item'          => __( 'Edit Trampoline', 'default' ),
		'view_item'          => __( 'View Trampoline', 'default' ),
		'all_items'          => __( 'All Trampolines', 'default' ),
		'search_items'       => __( 'Search Trampolines', 'default' ),
		'parent_item_colon'  => __( 'Parent Trampolines:', 'default' ),
		'not_found'          => __( 'No trampolines found.', 'default' ),
		'not_found_in_trash' => __( 'No trampolines found in Trash.', 'default' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'trampoline' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'trampoline', $args );




	$labels = array(
		'name'               => _x( 'Partners & Clients', 'post type general name', 'default' ),
		'singular_name'      => _x( 'Partner & Client', 'post type singular name', 'default' ),
		'menu_name'          => _x( 'Partners & Clients', 'admin menu', 'default' ),
		'name_admin_bar'     => _x( 'Partner & Client', 'add new on admin bar', 'default' ),
		'add_new'            => _x( 'Add New', 'Partner & Client', 'default' ),
		'add_new_item'       => __( 'Add New Partner & Client', 'default' ),
		'new_item'           => __( 'New Partner & Client', 'default' ),
		'edit_item'          => __( 'Edit Partner & Client', 'default' ),
		'view_item'          => __( 'View Partner & Client', 'default' ),
		'all_items'          => __( 'All Partners & Clients', 'default' ),
		'search_items'       => __( 'Search Partners & Clients', 'default' ),
		'parent_item_colon'  => __( 'Parent Partners & Clients:', 'default' ),
		'not_found'          => __( 'No partner & client found.', 'default' ),
		'not_found_in_trash' => __( 'No partners & client found in Trash.', 'default' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'partner-client' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'partner_client', $args );

	$labels = array(
		'name'               => _x( 'Banners', 'post type general name', 'default' ),
		'singular_name'      => _x( 'Banner', 'post type singular name', 'default' ),
		'menu_name'          => _x( 'Banners', 'admin menu', 'default' ),
		'name_admin_bar'     => _x( 'Banners', 'add new on admin bar', 'default' ),
		'add_new'            => _x( 'Add New', 'Banner', 'default' ),
		'add_new_item'       => __( 'Add New Banner', 'default' ),
		'new_item'           => __( 'New Banner', 'default' ),
		'edit_item'          => __( 'Edit Banner', 'default' ),
		'view_item'          => __( 'View Banner', 'default' ),
		'all_items'          => __( 'All Banners', 'default' ),
		'search_items'       => __( 'Search Banners', 'default' ),
		'parent_item_colon'  => __( 'Parent Banners:', 'default' ),
		'not_found'          => __( 'No Banner found.', 'default' ),
		'not_found_in_trash' => __( 'No Banner found in Trash.', 'default' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'banner' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);


	$labels = array(
		'name'               => _x( 'Tabs', 'post type general name', 'default' ),
		'singular_name'      => _x( 'Tab', 'post type singular name', 'default' ),
		'menu_name'          => _x( 'Tabs', 'admin menu', 'default' ),
		'name_admin_bar'     => _x( 'Tabs', 'add new on admin bar', 'default' ),
		'add_new'            => _x( 'Add New', 'Tab', 'default' ),
		'add_new_item'       => __( 'Add New Tab', 'default' ),
		'new_item'           => __( 'New Tab', 'default' ),
		'edit_item'          => __( 'Edit Tab', 'default' ),
		'view_item'          => __( 'View Tab', 'default' ),
		'all_items'          => __( 'All Tabs', 'default' ),
		'search_items'       => __( 'Search Tabs', 'default' ),
		'parent_item_colon'  => __( 'Parent Tabs:', 'default' ),
		'not_found'          => __( 'No Tab found.', 'default' ),
		'not_found_in_trash' => __( 'No Tab found in Trash.', 'default' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tab' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'tab', $args );


	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Cateogry', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Categories' ),
		'all_items'         => __( 'All Categories' ),
		'parent_item'       => __( 'Parent Cateogry' ),
		'parent_item_colon' => __( 'Parent Cateogry:' ),
		'edit_item'         => __( 'Edit Cateogry' ),
		'update_item'       => __( 'Update Cateogry' ),
		'add_new_item'      => __( 'Add New Cateogry' ),
		'new_item_name'     => __( 'New Cateogry Name' ),
		'menu_name'         => __( 'Cateogry' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tab-cat' ),
	);

	register_taxonomy( 'tab-cat', array( 'tab' ), $args );
}