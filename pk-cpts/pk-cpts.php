<?php

function photokit_proofing_post_type() {
  $labels = array(
		'name' => _x( 'Shoot Proofs', 'Post Type General Name' ),
		'singular_name' => _x( 'Shoot Proof', 'Post Type Singular Name' ),
		'menu_name' => _x( 'Shoot Proofs', 'Admin Menu text' ),
		'name_admin_bar' => _x( 'Shoot Proof', 'Add New on Toolbar' ),
		'archives' => __( 'Shoot Proof Archives' ),
		'attributes' => __( 'Shoot Proof Attributes' ),
		'parent_item_colon' => __( 'Parent Shoot Proof:' ),
		'all_items' => __( 'All Proofs' ),
		'add_new_item' => __( 'Add New Proof' ),
		'add_new' => __( 'Add New Proof' ),
		'new_item' => __( 'New Proof' ),
		'edit_item' => __( 'Edit Proof' ),
		'update_item' => __( 'Update Proof' ),
		'view_item' => __( 'View Proof' ),
		'view_items' => __( 'View Proofs' ),
		'search_items' => __( 'Search Proofs' ),
		'insert_into_item' => __( 'Insert into Proof' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Proof' ),
		'items_list' => __( 'Proofs list' ),
		'items_list_navigation' => __( 'Proofs list navigation' ),
		'filter_items_list' => __( 'Filter Proofs list' )
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Client Galleries for proofing.', 'textdomain' ),
		'menu_icon' => 'dashicons-editor-table',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'template' => array(
            array( 'imagely/nextgen-gallery', array() )),
		'publicly_queryable' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'shootproof', $args );
}
add_action( 'init', 'photokit_proofing_post_type' );

function photokit_finals_post_type() {
  $labels = array(
		'name' => _x( 'Shoot Finals', 'Post Type General Name' ),
		'singular_name' => _x( 'Shoot Final', 'Post Type Singular Name' ),
		'menu_name' => _x( 'Shoot Finals', 'Admin Menu text' ),
		'name_admin_bar' => _x( 'Shoot Final', 'Add New on Toolbar' ),
		'archives' => __( 'Shoot Final Archives' ),
		'attributes' => __( 'Shoot Final Attributes' ),
		'parent_item_colon' => __( 'Parent Shoot Final:' ),
		'all_items' => __( 'All Shoot Finals' ),
		'add_new_item' => __( 'Add New Shoot Final' ),
		'add_new' => __( 'Add New' ),
		'new_item' => __( 'New Shoot Final' ),
		'edit_item' => __( 'Edit Shoot Final' ),
		'update_item' => __( 'Update Shoot Final' ),
		'view_item' => __( 'View Shoot Final' ),
		'view_items' => __( 'View Shoot Finals' ),
		'search_items' => __( 'Search Shoot Finals' ),
		'insert_into_item' => __( 'Insert into Shoot Final' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Shoot Final' ),
		'items_list' => __( 'Shoot Finals list', 'textdomain' ),
		'items_list_navigation' => __( 'Shoot Finals list navigation' ),
		'filter_items_list' => __( 'Filter Shoot Finals list' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Client Galleries for Finals.' ),
		'menu_icon' => 'dashicons-excerpt-view',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'template' => array(
            array( 'imagely/nextgen-gallery', array() )),
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'shootfinal', $args );
}
add_action( 'init', 'photokit_finals_post_type' );

register_activation_hook( __FILE__, 'my_rewrite_flush' );
register_deactivation_hook( __FILE__, 'my_rewrite_flush' );
function my_rewrite_flush() {
   // First, we "add" the custom post type via the above written function.
   // Note: "add" is written with quotes, as CPTs don't get added to the DB,
   // They are only referenced in the post_type column with a post entry,
   // when you add a post of this CPT.
   //Commentted out post type clearing. It appears that all post need to be flused
   //photokit_proofing_post_type();
   //photokit_finals_post_type();

   // ATTENTION: This is *only* done during plugin activation hook in this example!
   // You should *NEVER EVER* do this on every page load!!
   flush_rewrite_rules();
}

?>
