<?php


add_action( 'init', 'bat_banner_init' );
/**
 * Register a banner post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bat_banner_init() {
	$labels = array(
		'name'               => _x( 'Banners', 'post type general name', 'default' ),
		'singular_name'      => _x( 'Banner', 'post type singular name', 'default' ),
		'menu_name'          => _x( 'Banners', 'admin menu', 'default' ),
		'name_admin_bar'     => _x( 'Banner', 'add new on admin bar', 'default' ),
		'add_new'            => _x( 'Add New', 'banner', 'default' ),
		'add_new_item'       => __( 'Add New Banner', 'default' ),
		'new_item'           => __( 'New Banner', 'default' ),
		'edit_item'          => __( 'Edit Banner', 'default' ),
		'view_item'          => __( 'View Banner', 'default' ),
		'all_items'          => __( 'All Banners', 'default' ),
		'search_items'       => __( 'Search Banners', 'default' ),
		'parent_item_colon'  => __( 'Parent Banners:', 'default' ),
		'not_found'          => __( 'No banners found.', 'default' ),
		'not_found_in_trash' => __( 'No banners found in Trash.', 'default' )
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

	register_post_type( 'banner', $args );
}