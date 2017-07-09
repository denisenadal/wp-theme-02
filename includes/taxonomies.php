<?php
// hook into the init action and call create_portfolio_taxonomies when it fires
add_action( 'init', 'create_portfolio_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_portfolio_taxonomies() {
	$labels = array(
		'name'              => _x( 'Work Types', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Work Type', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Work Types', 'textdomain' ),
		'all_items'         => __( 'All Work Types', 'textdomain' ),
		'edit_item'         => __( 'Edit Work Type', 'textdomain' ),
		'update_item'       => __( 'Update Work Type', 'textdomain' ),
		'add_new_item'      => __( 'Add New Work Type', 'textdomain' ),
		'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
		'menu_name'         => __( 'Genre', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'work-type' ),
		'show_in_quick_edit' => true,
		'show_in_rest'		=>true
	);

	register_taxonomy( 'work_types', array( 'portfolio_post' ), $args );

}
