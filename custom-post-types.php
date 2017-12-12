<?php
/*Plugin Name: Franciscan Custom Types
Description: This plugin registers the post types needed for the main Franciscan University site.
Version: 1.0
Author: Jesse R Weigel
Author URI: jesseweigel.com
License: GPLv2
*/

// register custom post types
function create_new_type() {
	// Create Product type
	// This type is not currently in use but the code is here in case it is needed later
	// set up labels
	// $labels = array(
 // 		'name' => 'Products',
  //   	'singular_name' => 'Product',
  //   	'add_new' => 'Add New Product',
  //   	'add_new_item' => 'Add New Product',
  //   	'edit_item' => 'Edit Product',
  //   	'new_item' => 'New Product',
  //   	'all_items' => 'All Products',
  //   	'view_item' => 'View Product',
  //   	'search_items' => 'Search Products',
  //   	'not_found' =>  'No Products Found',
  //   	'not_found_in_trash' => 'No Products found in Trash',
  //   	'parent_item_colon' => '',
  //   	'menu_name' => 'Products',
  //   );
  //   //register post type
	// register_post_type( 'product', array(
	// 	'labels' => $labels,
	// 	'has_archive' => true,
 // 		'public' => true,
	// 	'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
	// 	'taxonomies' => array( 'brands', 'body-material-options' ),
	// 	'exclude_from_search' => false,
	// 	'capability_type' => 'post',
	// 	'rewrite' => array( 'slug' => 'products' ),
  //   'show_in_rest'       => true,
  //   'show_in_menu'       => true,
	// 	)
	// );

	// Create Faculty type
	// set up labels
	$labels = array(
		'name' => 'Faculty',
			'singular_name' => 'Faculty',
			'add_new' => 'Add New Faculty',
			'add_new_item' => 'Add New Faculty',
			'edit_item' => 'Edit Faculty',
			'new_item' => 'New Faculty',
			'all_items' => 'All Faculty',
			'view_item' => 'View Faculty',
			'search_items' => 'Search Faculty',
			'not_found' =>  'No Faculty Found',
			'not_found_in_trash' => 'No Faculty found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Faculty',
		);
		//register post type
	register_post_type( 'faculty', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'category'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'faculty' ),
		'show_in_rest'       => true,
		'show_in_menu'       => true,
		)
  );
}

add_action( 'init', 'create_new_type' );










//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );


function create_topics_hierarchical_taxonomy() {

  // Create Faculty Department Category Taxonomy

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Faculty Department', 'taxonomy general name' ),
    'singular_name' => _x( 'Faculty Department', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Faculty Department' ),
    'all_items' => __( 'All Faculty Department' ),
    'parent_item' => __( 'Parent Faculty Department' ),
    'parent_item_colon' => __( 'Parent Faculty Department:' ),
    'edit_item' => __( 'Edit Faculty Department' ),
    'update_item' => __( 'Update Faculty Department' ),
    'add_new_item' => __( 'Add New Faculty Department' ),
    'new_item_name' => __( 'New Faculty Department Name' ),
    'menu_name' => __( 'Faculty Department' ),
  );

// // Now register the taxonomy
//
  register_taxonomy('faculty-departments',array('faculty'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'faculty-department' ),
    'show_in_menu'       => true,
    'show_in_rest'       => true,
		'rest_base'          => 'faculty-department',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
  ));

}

//Change value of title for Team Members
// function person_update_title( $value, $post_id, $field ) {

// 	$new_title = get_field( 'name', $post_id);
// 	$new_slug = sanitize_title( $new_title );

// 	// update post
// 	$person_postdata = array(
// 		'ID'          => $post_id,
// 		'post_title'  => $new_title,
// 		'post_name'   => $new_slug,
// 	);

// 	if ( !wp_is_post_revision( $post_id ) ){

// 		// unhook this function so it doesn't loop infinitely
// 		remove_action('save_post', 'person_update_title');

// 		// update the post, which calls save_post again
// 		wp_update_post( $person_postdata );

// 		// re-hook this function
// 		add_action('save_post', 'person_update_title');
// 	}

// 	return $value;
// }

?>