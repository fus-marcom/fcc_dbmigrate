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
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'faculty' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'faculty',
    'graphql_plural_name' => 'faculty',
		)
  );

	// Create Directory type
	// set up labels
	$labels = array(
		'name' => 'Directories',
			'singular_name' => 'Directory',
			'add_new' => 'Add New Directory',
			'add_new_item' => 'Add New Directory',
			'edit_item' => 'Edit Directory',
			'new_item' => 'New Directory',
			'all_items' => 'All Directories',
			'view_item' => 'View Directory',
			'search_items' => 'Search Directories',
			'not_found' =>  'No Directories Found',
			'not_found_in_trash' => 'No Directories found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Directories',
		);
		//register post type
	register_post_type( 'directory', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'directories' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'directory',
    'graphql_plural_name' => 'directories',
		)
	);
	
	// Create News type
	// set up labels
	$labels = array(
		'name' => 'News',
			'singular_name' => 'News',
			'add_new' => 'Add New News',
			'add_new_item' => 'Add New News',
			'edit_item' => 'Edit News',
			'new_item' => 'New News',
			'all_items' => 'All News',
			'view_item' => 'View News',
			'search_items' => 'Search News',
			'not_found' =>  'No News Found',
			'not_found_in_trash' => 'No News found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'News',
		);
		//register post type
	register_post_type( 'news', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'news' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'news',
    'graphql_plural_name' => 'news',
		)
	);
	
		// Create Department type
	// set up labels
	$labels = array(
		'name' => 'Departments',
			'singular_name' => 'Department',
			'add_new' => 'Add New Department',
			'add_new_item' => 'Add New Department',
			'edit_item' => 'Edit Department',
			'new_item' => 'New Department',
			'all_items' => 'All Departments',
			'view_item' => 'View Department',
			'search_items' => 'Search Departments',
			'not_found' =>  'No Departments Found',
			'not_found_in_trash' => 'No Departments found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Departments',
		);
		//register post type
	register_post_type( 'department', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'departments' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'department',
    'graphql_plural_name' => 'departments',
		)
	);

			// Create Major type
	// set up labels
	$labels = array(
		'name' => 'Majors',
			'singular_name' => 'Major',
			'add_new' => 'Add New Major',
			'add_new_item' => 'Add New Major',
			'edit_item' => 'Edit Major',
			'new_item' => 'New Major',
			'all_items' => 'All Majors',
			'view_item' => 'View Major',
			'search_items' => 'Search Majors',
			'not_found' =>  'No Majors Found',
			'not_found_in_trash' => 'No Majors found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Majors',
		);
		//register post type
	register_post_type( 'major', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'majors' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'major',
    'graphql_plural_name' => 'majors',
		)
	);

			// Create Human Resource type
	// set up labels
	$labels = array(
		'name' => 'Human Resources',
			'singular_name' => 'Human Resource',
			'add_new' => 'Add New Human Resource',
			'add_new_item' => 'Add New Human Resource',
			'edit_item' => 'Edit Human Resource',
			'new_item' => 'New Human Resource',
			'all_items' => 'All Human Resources',
			'view_item' => 'View Human Resource',
			'search_items' => 'Search Human Resources',
			'not_found' =>  'No Human Resources Found',
			'not_found_in_trash' => 'No Human Resources found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Human Resources',
		);
		//register post type
	register_post_type( 'human-resource', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'human-resources' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'humanResource',
    'graphql_plural_name' => 'humanResources',
		)
	);

				// Create Campus Security type
	// set up labels
	$labels = array(
		'name' => 'Campus Security',
			'singular_name' => 'Campus Security',
			'add_new' => 'Add New Campus Security',
			'add_new_item' => 'Add New Campus Security',
			'edit_item' => 'Edit Campus Security',
			'new_item' => 'New Campus Security',
			'all_items' => 'All Campus Security',
			'view_item' => 'View Campus Security',
			'search_items' => 'Search Campus Security',
			'not_found' =>  'No Campus Security Found',
			'not_found_in_trash' => 'No Campus Security found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Campus Security',
		);
		//register post type
	register_post_type( 'campus-security', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'campus-security' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'campusSecurity',
    'graphql_plural_name' => 'campusSecurity',
		)
	);

	// Create Video type
	// set up labels
	$labels = array(
		'name' => 'Videos',
			'singular_name' => 'Video',
			'add_new' => 'Add New Video',
			'add_new_item' => 'Add New Video',
			'edit_item' => 'Edit Video',
			'new_item' => 'New Video',
			'all_items' => 'All Videos',
			'view_item' => 'View Video',
			'search_items' => 'Search Videos',
			'not_found' =>  'No Videos Found',
			'not_found_in_trash' => 'No Videos found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Videos',
		);
		//register post type
	register_post_type( 'video', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'videos' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'video',
    'graphql_plural_name' => 'videos',
		)
	);

		// Create Associate Degree Program type
	// set up labels
	$labels = array(
		'name' => 'Associate Programs',
			'singular_name' => 'Associate Program',
			'add_new' => 'Add New Associate Program',
			'add_new_item' => 'Add New Associate Program',
			'edit_item' => 'Edit Associate Program',
			'new_item' => 'New Associate Program',
			'all_items' => 'All Associate Programs',
			'view_item' => 'View Associate Program',
			'search_items' => 'Search Associate Programs',
			'not_found' =>  'No Associate Programs Found',
			'not_found_in_trash' => 'No Associate Programs found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Associate Programs',
		);
		//register post type
	register_post_type( 'associate-program', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'associate-programs' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'associateProgram',
    'graphql_plural_name' => 'associatePrograms',
		)
	);

		// Create Minor type
	// set up labels
	$labels = array(
		'name' => 'Minors',
			'singular_name' => 'Minor',
			'add_new' => 'Add New Minor',
			'add_new_item' => 'Add New Minor',
			'edit_item' => 'Edit Minor',
			'new_item' => 'New Minor',
			'all_items' => 'All Minors',
			'view_item' => 'View Minor',
			'search_items' => 'Search Minors',
			'not_found' =>  'No Minors Found',
			'not_found_in_trash' => 'No Minors found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Minors',
		);
		//register post type
	register_post_type( 'minor', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'minors' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'minor',
    'graphql_plural_name' => 'minors',
		)
	);

		// Create Institute type
	// set up labels
	$labels = array(
		'name' => 'Institutes',
			'singular_name' => 'Institute',
			'add_new' => 'Add New Institute',
			'add_new_item' => 'Add New Institute',
			'edit_item' => 'Edit Institute',
			'new_item' => 'New Institute',
			'all_items' => 'All Institutes',
			'view_item' => 'View Institute',
			'search_items' => 'Search Institutes',
			'not_found' =>  'No Institutes Found',
			'not_found_in_trash' => 'No Institutes found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Institutes',
		);
		//register post type
	register_post_type( 'institute', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'institutes' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'institute',
    'graphql_plural_name' => 'institutes',
		)
	);

			// Create Staff Member type
	// set up labels
	$labels = array(
		'name' => 'Staff Members',
			'singular_name' => 'Staff Member',
			'add_new' => 'Add New Staff Member',
			'add_new_item' => 'Add New Staff Member',
			'edit_item' => 'Edit Staff Member',
			'new_item' => 'New Staff Member',
			'all_items' => 'All Staff Members',
			'view_item' => 'View Staff Member',
			'search_items' => 'Search Staff Members',
			'not_found' =>  'No Staff Members Found',
			'not_found_in_trash' => 'No Staff Members found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Staff Members',
		);
		//register post type
	register_post_type( 'staff-member', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'staff-members' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'staffMember',
    'graphql_plural_name' => 'staffMembers',
		)
	);

			// Create Event type
	// set up labels
	$labels = array(
		'name' => 'Events',
			'singular_name' => 'Event',
			'add_new' => 'Add New Event',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'new_item' => 'New Event',
			'all_items' => 'All Events',
			'view_item' => 'View Event',
			'search_items' => 'Search Events',
			'not_found' =>  'No Events Found',
			'not_found_in_trash' => 'No Events found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Events',
		);
		//register post type
	register_post_type( 'event', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'events' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'event',
    'graphql_plural_name' => 'events',
		)
	);

				// Create About Page type
	// set up labels
	$labels = array(
		'name' => 'About Pages',
			'singular_name' => 'About Page',
			'add_new' => 'Add New About Page',
			'add_new_item' => 'Add New About Page',
			'edit_item' => 'Edit About Page',
			'new_item' => 'New About Page',
			'all_items' => 'All About Pages',
			'view_item' => 'View About Page',
			'search_items' => 'Search About Pages',
			'not_found' =>  'No About Pages Found',
			'not_found_in_trash' => 'No About Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'About Pages',
		);
		//register post type
	register_post_type( 'about-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'about-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'aboutPage',
    'graphql_plural_name' => 'aboutPages',
		)
	);

					// Create Chapel Page type
	// set up labels
	$labels = array(
		'name' => 'Chapel Pages',
			'singular_name' => 'Chapel Page',
			'add_new' => 'Add New Chapel Page',
			'add_new_item' => 'Add New Chapel Page',
			'edit_item' => 'Edit Chapel Page',
			'new_item' => 'New Chapel Page',
			'all_items' => 'All Chapel Pages',
			'view_item' => 'View Chapel Page',
			'search_items' => 'Search Chapel Pages',
			'not_found' =>  'No Chapel Pages Found',
			'not_found_in_trash' => 'No Chapel Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Chapel Pages',
		);
		//register post type
	register_post_type( 'chapel-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'chapel-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'chapelPage',
    'graphql_plural_name' => 'chapelPages',
		)
	);

						// Create Academics Page type
	// set up labels
	$labels = array(
		'name' => 'Academics Pages',
			'singular_name' => 'Academics Page',
			'add_new' => 'Add New Academics Page',
			'add_new_item' => 'Add New Academics Page',
			'edit_item' => 'Edit Academics Page',
			'new_item' => 'New Academics Page',
			'all_items' => 'All Academics Pages',
			'view_item' => 'View Academics Page',
			'search_items' => 'Search Academics Pages',
			'not_found' =>  'No Academics Pages Found',
			'not_found_in_trash' => 'No Academics Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Academics Pages',
		);
		//register post type
	register_post_type( 'academics-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'academics-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'academicsPage',
    'graphql_plural_name' => 'academicsPages',
		)
	);

							// Create Admissions Page type
	// set up labels
	$labels = array(
		'name' => 'Admissions Pages',
			'singular_name' => 'Admissions Page',
			'add_new' => 'Add New Admissions Page',
			'add_new_item' => 'Add New Admissions Page',
			'edit_item' => 'Edit Admissions Page',
			'new_item' => 'New Admissions Page',
			'all_items' => 'All Admissions Pages',
			'view_item' => 'View Admissions Page',
			'search_items' => 'Search Admissions Pages',
			'not_found' =>  'No Admissions Pages Found',
			'not_found_in_trash' => 'No Admissions Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Admissions Pages',
		);
		//register post type
	register_post_type( 'admissions-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'admissions-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'admissionsPage',
    'graphql_plural_name' => 'admissionsPages',
		)
	);

								// Create SFS Page type
	// set up labels
	$labels = array(
		'name' => 'SFS Pages',
			'singular_name' => 'SFS Page',
			'add_new' => 'Add New SFS Page',
			'add_new_item' => 'Add New SFS Page',
			'edit_item' => 'Edit SFS Page',
			'new_item' => 'New SFS Page',
			'all_items' => 'All SFS Pages',
			'view_item' => 'View SFS Page',
			'search_items' => 'Search SFS Pages',
			'not_found' =>  'No SFS Pages Found',
			'not_found_in_trash' => 'No SFS Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'SFS Pages',
		);
		//register post type
	register_post_type( 'sfs-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'sfs-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'sfsPage',
    'graphql_plural_name' => 'sfsPages',
		)
	);

									// Create Austria Page type
	// set up labels
	$labels = array(
		'name' => 'Austria Pages',
			'singular_name' => 'Austria Page',
			'add_new' => 'Add New Austria Page',
			'add_new_item' => 'Add New Austria Page',
			'edit_item' => 'Edit Austria Page',
			'new_item' => 'New Austria Page',
			'all_items' => 'All Austria Pages',
			'view_item' => 'View Austria Page',
			'search_items' => 'Search Austria Pages',
			'not_found' =>  'No Austria Pages Found',
			'not_found_in_trash' => 'No Austria Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Austria Pages',
		);
		//register post type
	register_post_type( 'austria-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'austria-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'austriaPage',
    'graphql_plural_name' => 'austriaPages',
		)
	);

										// Create Student Life Page type
	// set up labels
	$labels = array(
		'name' => 'Student Life Pages',
			'singular_name' => 'Student Life Page',
			'add_new' => 'Add New Student Life Page',
			'add_new_item' => 'Add New Student Life Page',
			'edit_item' => 'Edit Student Life Page',
			'new_item' => 'New Student Life Page',
			'all_items' => 'All Student Life Pages',
			'view_item' => 'View Student Life Page',
			'search_items' => 'Search Student Life Pages',
			'not_found' =>  'No Student Life Pages Found',
			'not_found_in_trash' => 'No Student Life Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Student Life Pages',
		);
		//register post type
	register_post_type( 'student-life-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'student-life-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'studentLifePage',
    'graphql_plural_name' => 'studentLifePages',
		)
	);

											// Create Information Technology Page type
	// set up labels
	$labels = array(
		'name' => 'ITS Pages',
			'singular_name' => 'ITS Page',
			'add_new' => 'Add New ITS Page',
			'add_new_item' => 'Add New ITS Page',
			'edit_item' => 'Edit ITS Page',
			'new_item' => 'New ITS Page',
			'all_items' => 'All ITS Pages',
			'view_item' => 'View ITS Page',
			'search_items' => 'Search ITS Pages',
			'not_found' =>  'No ITS Pages Found',
			'not_found_in_trash' => 'No ITS Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'ITS Pages',
		);
		//register post type
	register_post_type( 'its-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'its-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'itsPage',
    'graphql_plural_name' => 'itsPages',
		)
	);

											// Create FISH Page type
	// set up labels
	$labels = array(
		'name' => 'FISH Pages',
			'singular_name' => 'FISH Page',
			'add_new' => 'Add New FISH Page',
			'add_new_item' => 'Add New FISH Page',
			'edit_item' => 'Edit FISH Page',
			'new_item' => 'New FISH Page',
			'all_items' => 'All FISH Pages',
			'view_item' => 'View FISH Page',
			'search_items' => 'Search FISH Pages',
			'not_found' =>  'No FISH Pages Found',
			'not_found_in_trash' => 'No FISH Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'FISH Pages',
		);
		//register post type
	register_post_type( 'fish-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'fish-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'fishPage',
    'graphql_plural_name' => 'fishPages',
		)
	);

												// Create FIWH Page type
	// set up labels
	$labels = array(
		'name' => 'FIWH Pages',
			'singular_name' => 'FIWH Page',
			'add_new' => 'Add New FIWH Page',
			'add_new_item' => 'Add New FIWH Page',
			'edit_item' => 'Edit FIWH Page',
			'new_item' => 'New FIWH Page',
			'all_items' => 'All FIWH Pages',
			'view_item' => 'View FIWH Page',
			'search_items' => 'Search FIWH Pages',
			'not_found' =>  'No FIWH Pages Found',
			'not_found_in_trash' => 'No FIWH Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'FIWH Pages',
		);
		//register post type
	register_post_type( 'fiwh-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'fiwh-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'fiwhPage',
    'graphql_plural_name' => 'fiwhPages',
		)
	);

	// Create PDP Page type
	// set up labels
	$labels = array(
		'name' => 'PDP Pages',
			'singular_name' => 'PDP Page',
			'add_new' => 'Add New PDP Page',
			'add_new_item' => 'Add New PDP Page',
			'edit_item' => 'Edit PDP Page',
			'new_item' => 'New PDP Page',
			'all_items' => 'All PDP Pages',
			'view_item' => 'View PDP Page',
			'search_items' => 'Search PDP Pages',
			'not_found' =>  'No PDP Pages Found',
			'not_found_in_trash' => 'No PDP Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'PDP Pages',
		);
		//register post type
	register_post_type( 'pdp-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'pdp-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'pdpPage',
    'graphql_plural_name' => 'pdpPages',
		)
	);

		// Create Press Page type
	// set up labels
	$labels = array(
		'name' => 'Press Pages',
			'singular_name' => 'Press Page',
			'add_new' => 'Add New Press Page',
			'add_new_item' => 'Add New Press Page',
			'edit_item' => 'Edit Press Page',
			'new_item' => 'New Press Page',
			'all_items' => 'All Press Pages',
			'view_item' => 'View Press Page',
			'search_items' => 'Search Press Pages',
			'not_found' =>  'No Press Pages Found',
			'not_found_in_trash' => 'No Press Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Press Pages',
		);
		//register post type
	register_post_type( 'press-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'press-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'pressPage',
    'graphql_plural_name' => 'pressPages',
		)
	);

	// Create Veritas Page type
	// set up labels
	$labels = array(
		'name' => 'Veritas Pages',
			'singular_name' => 'Veritas Page',
			'add_new' => 'Add New Veritas Page',
			'add_new_item' => 'Add New Veritas Page',
			'edit_item' => 'Edit Veritas Page',
			'new_item' => 'New Veritas Page',
			'all_items' => 'All Veritas Pages',
			'view_item' => 'View Veritas Page',
			'search_items' => 'Search Veritas Pages',
			'not_found' =>  'No Veritas Pages Found',
			'not_found_in_trash' => 'No Veritas Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Veritas Pages',
		);
		//register post type
	register_post_type( 'veritas-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'veritas-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'veritasPage',
    'graphql_plural_name' => 'veritasPages',
		)
	);

		// Create Bioethics Page type
	// set up labels
	$labels = array(
		'name' => 'Bioethics Pages',
			'singular_name' => 'Bioethics Page',
			'add_new' => 'Add New Bioethics Page',
			'add_new_item' => 'Add New Bioethics Page',
			'edit_item' => 'Edit Bioethics Page',
			'new_item' => 'New Bioethics Page',
			'all_items' => 'All Bioethics Pages',
			'view_item' => 'View Bioethics Page',
			'search_items' => 'Search Bioethics Pages',
			'not_found' =>  'No Bioethics Pages Found',
			'not_found_in_trash' => 'No Bioethics Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Bioethics Pages',
		);
		//register post type
	register_post_type( 'bioethics-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'bioethics-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'bioethicsPage',
    'graphql_plural_name' => 'bioethicsPages',
		)
	);

			// Create Pilgrimages Page type
	// set up labels
	$labels = array(
		'name' => 'Pilgrimages Pages',
			'singular_name' => 'Pilgrimages Page',
			'add_new' => 'Add New Pilgrimages Page',
			'add_new_item' => 'Add New Pilgrimages Page',
			'edit_item' => 'Edit Pilgrimages Page',
			'new_item' => 'New Pilgrimages Page',
			'all_items' => 'All Pilgrimages Pages',
			'view_item' => 'View Pilgrimages Page',
			'search_items' => 'Search Pilgrimages Pages',
			'not_found' =>  'No Pilgrimages Pages Found',
			'not_found_in_trash' => 'No Pilgrimages Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Pilgrimages Pages',
		);
		//register post type
	register_post_type( 'pilgrimages-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'pilgrimages-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'pilgrimagesPage',
    'graphql_plural_name' => 'pilgrimagesPages',
		)
	);

				// Create Households Page type
	// set up labels
	$labels = array(
		'name' => 'Households Pages',
			'singular_name' => 'Households Page',
			'add_new' => 'Add New Households Page',
			'add_new_item' => 'Add New Households Page',
			'edit_item' => 'Edit Households Page',
			'new_item' => 'New Households Page',
			'all_items' => 'All Households Pages',
			'view_item' => 'View Households Page',
			'search_items' => 'Search Households Pages',
			'not_found' =>  'No Households Pages Found',
			'not_found_in_trash' => 'No Households Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Households Pages',
		);
		//register post type
	register_post_type( 'households-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'households-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'householdsPage',
    'graphql_plural_name' => 'householdsPages',
		)
	);

					// Create Student Profile Page type
	// set up labels
	$labels = array(
		'name' => 'Student Profile Pages',
			'singular_name' => 'Student Profile Page',
			'add_new' => 'Add New Student Profile Page',
			'add_new_item' => 'Add New Student Profile Page',
			'edit_item' => 'Edit Student Profile Page',
			'new_item' => 'New Student Profile Page',
			'all_items' => 'All Student Profile Pages',
			'view_item' => 'View Student Profile Page',
			'search_items' => 'Search Student Profile Pages',
			'not_found' =>  'No Student Profile Pages Found',
			'not_found_in_trash' => 'No Student Profile Pages found in Trash',
			'parent_item_colon' => '',
			'menu_name' => 'Student Profile Pages',
		);
		//register post type
	register_post_type( 'student-profile-page', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'student-profile-pages' ),
		'show_in_rest'       => true,
    'show_in_menu'       => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'studentProfilePage',
    'graphql_plural_name' => 'studentProfilePages',
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
  register_taxonomy('faculty-departments',array('faculty', 'major', 'department', 'minor', 'video', 'event', 'student-profile-page'), array(
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
    'show_in_graphql' => true,
		'graphql_single_name' => 'facultyDepartment',
		'graphql_plural_name' => 'facultyDepartments',
	));


	// Institute Category
	  $labels = array(
    'name' => _x( 'Institute Name', 'taxonomy general name' ),
    'singular_name' => _x( 'Institute Name', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Institute Name' ),
    'all_items' => __( 'All Institute Name' ),
    'parent_item' => __( 'Parent Institute Name' ),
    'parent_item_colon' => __( 'Parent Institute Name:' ),
    'edit_item' => __( 'Edit Institute Name' ),
    'update_item' => __( 'Update Institute Name' ),
    'add_new_item' => __( 'Add New Institute Name' ),
    'new_item_name' => __( 'New Institute Name Name' ),
    'menu_name' => __( 'Institute Name' ),
  );

// // Now register the taxonomy
//
  register_taxonomy('institute-names',array('institute'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'institute-name' ),
    'show_in_menu'       => true,
    'show_in_rest'       => true,
		'rest_base'          => 'institute-name',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_graphql' => true,
		'graphql_single_name' => 'instituteName',
		'graphql_plural_name' => 'instituteNames',
	));
	
		// Staff Department Category
	  $labels = array(
    'name' => _x( 'Staff Department', 'taxonomy general name' ),
    'singular_name' => _x( 'Staff Department', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Staff Department' ),
    'all_items' => __( 'All Staff Department' ),
    'parent_item' => __( 'Parent Staff Department' ),
    'parent_item_colon' => __( 'Parent Staff Department:' ),
    'edit_item' => __( 'Edit Staff Department' ),
    'update_item' => __( 'Update Staff Department' ),
    'add_new_item' => __( 'Add New Staff Department' ),
    'new_item_name' => __( 'New Staff Department Name' ),
    'menu_name' => __( 'Staff Department' ),
  );

// // Now register the taxonomy
//
  register_taxonomy('staff-departments',array('staff-member'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'staff-department' ),
    'show_in_menu'       => true,
    'show_in_rest'       => true,
		'rest_base'          => 'staff-department',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_graphql' => true,
		'graphql_single_name' => 'staffDepartment',
		'graphql_plural_name' => 'staffDepartments',
	));
	
			// Household Type Category
	  $labels = array(
    'name' => _x( 'Household Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Household Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Household Type' ),
    'all_items' => __( 'All Household Type' ),
    'parent_item' => __( 'Parent Household Type' ),
    'parent_item_colon' => __( 'Parent Household Type:' ),
    'edit_item' => __( 'Edit Household Type' ),
    'update_item' => __( 'Update Household Type' ),
    'add_new_item' => __( 'Add New Household Type' ),
    'new_item_name' => __( 'New Household Type Name' ),
    'menu_name' => __( 'Household Type' ),
  );

// // Now register the taxonomy
//
  register_taxonomy('household-types',array('households-page'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'household-type' ),
    'show_in_menu'       => true,
    'show_in_rest'       => true,
		'rest_base'          => 'household-type',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_graphql' => true,
		'graphql_single_name' => 'householdType',
		'graphql_plural_name' => 'householdTypes',
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