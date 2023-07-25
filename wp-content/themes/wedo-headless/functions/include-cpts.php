<?php
	function wedo_posts() {
		register_post_type( 
			'case-studies', [
				'labels' => [
					'name' 								=> 'Case Studies',
					'singular_name' 			=> 'Case Study',
					'all_items' 					=> 'All Case Studies',
					'add_new' 						=> 'Add New',
					'add_new_item' 				=> 'Add New Case Study',
					'edit' 								=> 'Edit',
					'edit_item' 					=> 'Edit Case Study',
					'new_item' 						=> 'New Case Study',
					'view_item' 					=> 'View Case Study',
					'search_items' 				=> 'Search Case Studies',
					'parent_item_colon' 	=> ''
				],
				'capability_type'       => 'post',
				'description'           => 'Custom Post for Case Studies',
				'rewrite'               => ['slug' => 'case-study'],
				'public'                => true,
				'has_archive'           => true,
				'hierarchical'          => false,
				'menu_position'         => 5,
				'menu_icon'             => 'dashicons-welcome-write-blog',
				'supports'              => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes', 'amp', 'post-formats'],
				'show_in_graphql'       => true,
				'graphql_single_name' 	=> 'caseStudy',
				'graphql_plural_name' 	=> 'caseStudies',
				'taxonomies' 						=> ['post_tag'],
			] 
		);
	}

	function wedo_taxonomies() {
		register_taxonomy( 
			'work-type', 
			'case-studies', [
				'labels'								=> [
					'name'              	=> _x( 'Category', 'taxonomy general name' ),
					'singular_name'     	=> _x( 'Category', 'taxonomy singular name' ),
					'search_items'      	=> __( 'Search Categories' ),
					'all_items'         	=> __( 'All Categories' ),
					'parent_item'       	=> __( 'Parent Category' ),
					'parent_item_colon' 	=> __( 'Parent Category:' ),
					'edit_item'         	=> __( 'Edit Category' ), 
					'update_item'       	=> __( 'Update Category' ),
					'add_new_item'      	=> __( 'Add New Category' ),
					'new_item_name'     	=> __( 'New Category' ),
					'menu_name'         	=> __( 'Categories' ),
				],
				'hierarchical' 					=> true,
				'show_in_graphql'     	=> true,
				'graphql_single_name' 	=> 'workType',
				'graphql_plural_name' 	=> 'workTypes',
			]
		);
	}
?>
