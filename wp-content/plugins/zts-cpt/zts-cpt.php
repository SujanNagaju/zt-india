<?php
/**
 * Plugin Name: ZTS CPT
 * Description: For custom post types used in site.
 * Version: 1.0.0
 * Author: ZTS
 *
 * @package zts-cpt
 */

if ( ! function_exists( 'zts_cpts' ) ) :

	/**
	 * Registers a new post type
	 */
	function zts_cpts() {

		$zts_cpts = array(
			// Services.
			array(
				'slug'          => 'service',
				'singular_name' => 'Service',
				'plural_name'   => 'Services',
				'post_type'     => 'services',
				'post_icon'     => 'dashicons-admin-generic',
				'supports'      => array( 'editor', 'title', 'page-attributes', 'thumbnail' ),
				'has_single'    => true,
				'has_archive' 	=> false,
			),

			// Testimonial.
			array(
				'slug'          => 'testimonial',
				'singular_name' => 'Testimonial',
				'plural_name'   => 'Testimonials',
				'post_type'     => 'testimonial',
				'post_icon'     => 'dashicons-format-status',
				'supports'      => array( 'editor', 'title', 'thumbnail' ),
				'has_single'    => false,
				'has_archive'   => false,
			),

			// Portfolio.
			array(
				'slug'          => 'portfolio',
				'singular_name' => 'Portfolio',
				'plural_name'   => 'Portfolios',
				'post_type'     => 'portfolios',
				'post_icon'     => 'dashicons-portfolio',
				'supports'      => array( 'editor', 'title', 'thumbnail' ),
				'has_single'    => true,
				'has_archive'   => true,
			),

			// team
			array(
				'slug'          => 'team',
				'singular_name' => 'Our Team',
				'plural_name'   => 'Our Team',
				'post_type'     => 'team',
				'post_icon'     => 'dashicons-buddicons-groups',
				'supports'      => array( 'title', 'thumbnail' ),
				'has_single'    => false,
				'has_archive'   => false,
				'publicly_queryable' => false,
			),

			// Careers
			array(
				'slug'          => 'career',
				'singular_name' => 'Career',
				'plural_name'   => 'Careers',
				'post_type'     => 'career',
				'post_icon'     => 'dashicons-megaphone',
				'supports'      => array( 'title', 'thumbnail', 'editor' ),
				'has_single'    => true,
				'has_archive'   => false,
				'publicly_queryable' => true,
			),

		);

		foreach ( $zts_cpts as $zts_cpt ) {
			$args = array(
				'labels'             => array(
					'name'               => $zts_cpt['plural_name'],
					'singular_name'      => $zts_cpt['singular_name'],
					'add_new'            => 'Add New',
					'add_new_item'       => 'Add New ' . $zts_cpt['singular_name'],
					'edit_item'          => 'Edit ' . $zts_cpt['singular_name'],
					'new_item'           => 'New ' . $zts_cpt['singular_name'],
					'all_items'          => 'All ' . $zts_cpt['plural_name'],
					'view_item'          => 'View ' . $zts_cpt['singular_name'],
					'search_items'       => 'Search ' . $zts_cpt['plural_name'],
					'not_found'          => 'No ' . $zts_cpt['plural_name'] . ' found',
					'not_found_in_trash' => 'No ' . $zts_cpt['plural_name'] . ' found in Trash',
					'menu_name'          => $zts_cpt['plural_name'],
				),
				'public'             => true,
				'menu_icon'          => $zts_cpt['post_icon'],
				'publicly_queryable' => isset( $zts_cpt['publicly_queryable'] ) ? $zts_cpt['publicly_queryable'] : 'true',
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => $zts_cpt['has_single'],
				'rewrite'            => array( 'slug' => $zts_cpt['slug'] ),
				'capability_type'    => 'post',
				'has_archive'        => isset( $zts_cpt['has_archive'] ) ? $zts_cpt['has_archive'] : true,
				'hierarchical'       => true,
				'menu_position'      => null,
				'supports'           => $zts_cpt['supports'],
			);

			if( $zts_cpt['post_type'] == 'portfolios' ){
				$args['rewrite'] = array( 'slug' => 'portfolios' );
			}

			register_post_type( $zts_cpt['post_type'], $args );
		}
	}

	add_action( 'init', 'zts_cpts' );




endif;


	/**
	 * [registerTaxonomy register custom taxonomy]
	 */
function zts_register_taxonomy() {

	$zts_post_taxonomies = array(
		array(
			'slug'          => 'service-categories',
			'front_slug'    => 'service-categories',
			'singular_name' => 'Service Category',
			'name'          => 'Service Categories',
			'post_type'     => 'services',
			'hierarchical'  => true,
			'publicly_queryable' 		=> false,
		),

		array(
			'slug'          => 'portfolio-categories',
			'front_slug'    => 'portfolio',
			'singular_name' => 'Portfolio Category',
			'name'          => 'Portfolio Categories',
			'post_type'     => 'portfolios',
			'hierarchical'  => true,
			'publicly_queryable' 		=> false,
		),
	);

	foreach ( $zts_post_taxonomies as $zts_post_taxonomy ) {
		register_taxonomy(
			$zts_post_taxonomy['slug'],
			$zts_post_taxonomy['post_type'],
			array(
				// Hierarchical taxonomy (like categories).
				'hierarchical'      => isset( $zts_post_taxonomy['hierarchical'] ) ? $zts_post_taxonomy['hierarchical'] : true,
				// Public
				'publicly_queryable'			=> isset( $zts_post_taxonomy['publicly_queryable'] ) ? $zts_post_taxonomy['publicly_queryable'] : true,
				// This array of options controls the labels displayed in the WordPress Admin UI.
				'labels'            => array(
					'name'              => _x( $zts_post_taxonomy['name'], $zts_post_taxonomy['name'] ),
					'singular_name'     => _x( $zts_post_taxonomy['singular_name'], $zts_post_taxonomy['singular_name'] ),
					'search_items'      => __( 'Search ' . $zts_post_taxonomy['name'] ),
					'all_items'         => __( 'All ' . $zts_post_taxonomy['name'] ),
					'parent_item'       => __( 'Parent ' . $zts_post_taxonomy['name'] ),
					'parent_item_colon' => __( 'Parent ' . $zts_post_taxonomy['name'] ),
					'edit_item'         => __( 'Edit ' . $zts_post_taxonomy['name'] ),
					'update_item'       => __( 'Update ' . $zts_post_taxonomy['name'] ),
					'add_new_item'      => __( 'Add New ' . $zts_post_taxonomy['name'] ),
					'new_item_name'     => __( 'New ' . $zts_post_taxonomy['name'] . ' Name' ),
					'menu_name'         => __( $zts_post_taxonomy['name'] ),
				),
				'show_admin_column' => true,

				// Control the slugs used for this taxonomy.
				'rewrite'           => array(
					'slug'         => $zts_post_taxonomy['front_slug'], // This controls the base slug that will display before each term.
					'with_front'   => false, // Don't display the category base before "/locations/".
					'hierarchical' => isset( $zts_post_taxonomy['hierarchical'] ) ? $zts_post_taxonomy['hierarchical'] : true, // This will allow URL's like "/locations/boston/cambridge/".
				),
			)
		);
	}
}
add_action( 'init', 'zts_register_taxonomy', 0 );
