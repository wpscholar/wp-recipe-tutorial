<?php

namespace RecipeTutorial;

/**
 * Class Recipe_Cuisine_Taxonomy
 *
 * @package RecipeTutorial
 */
class Recipe_Cuisine_Taxonomy {

	/**
	 * Taxonomy internal name.
	 *
	 * @var string
	 */
	const TAXONOMY = 'rtut-recipe-cuisine';

	/**
	 * Register taxonomy.
	 */
	public static function register_taxonomy() {

		register_taxonomy( self::TAXONOMY, array(), array(
			'labels'            => array(
				'name'                  => esc_html_x( 'Cuisines', 'taxonomy general name', 'wp-recipe-tutorial' ),
				'singular_name'         => esc_html_x( 'Cuisine', 'taxonomy singular name', 'wp-recipe-tutorial' ),
				'menu_name'             => esc_html_x( 'Cuisines', 'admin menu', 'wp-recipe-tutorial' ),
				'all_items'             => esc_html__( 'All Cuisines', 'wp-recipe-tutorial' ),
				'edit_item'             => esc_html__( 'Edit Cuisine', 'wp-recipe-tutorial' ),
				'view_item'             => esc_html__( 'View Cuisine', 'wp-recipe-tutorial' ),
				'update_item'           => esc_html__( 'Update Cuisine', 'wp-recipe-tutorial' ),
				'add_new_item'          => esc_html__( 'Add New Cuisine', 'wp-recipe-tutorial' ),
				'new_item_name'         => esc_html__( 'New Cuisine Name', 'wp-recipe-tutorial' ),
				'not_found'             => esc_html__( 'Not Found', 'wp-recipe-tutorial' ),
				'no_terms'              => esc_html__( 'No cuisines', 'wp-recipe-tutorial' ),
				'items_list_navigation' => esc_html__( 'Cuisines list navigation', 'wp-recipe-tutorial' ),
				'items_list'            => esc_html__( 'Cuisines list', 'wp-recipe-tutorial' ),
				'back_to_items'         => esc_html__( 'Cuisines list navigation', 'wp-recipe-tutorial' ),
				'parent_item'           => esc_html__( 'Parent Cuisine', 'wp-recipe-tutorial' ),
				'parent_item_colon'     => esc_html__( 'Parent Cuisine:', 'wp-recipe-tutorial' ),
				'search_items'          => esc_html__( 'Search Cuisines', 'wp-recipe-tutorial' ),
			),
			'public'            => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'rewrite'           => array(
				'slug'       => 'recipes/cuisines',
				'with_front' => true,
			),
		) );

	}

}
