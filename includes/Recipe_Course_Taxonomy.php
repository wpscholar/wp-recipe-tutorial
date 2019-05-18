<?php

namespace RecipeTutorial;

/**
 * Class Recipe_Course_Taxonomy
 *
 * @package RecipeTutorial
 */
class Recipe_Course_Taxonomy {

	/**
	 * Taxonomy internal name.
	 *
	 * @var string
	 */
	const TAXONOMY = 'rtut-recipe-course';

	/**
	 * Register taxonomy.
	 */
	public static function register_taxonomy() {

		register_taxonomy( self::TAXONOMY, array(), array(
			'labels'            => array(
				'name'                  => esc_html_x( 'Courses', 'taxonomy general name', 'wp-recipe-tutorial' ),
				'singular_name'         => esc_html_x( 'Course', 'taxonomy singular name', 'wp-recipe-tutorial' ),
				'menu_name'             => esc_html_x( 'Courses', 'admin menu', 'wp-recipe-tutorial' ),
				'all_items'             => esc_html__( 'All Courses', 'wp-recipe-tutorial' ),
				'edit_item'             => esc_html__( 'Edit Course', 'wp-recipe-tutorial' ),
				'view_item'             => esc_html__( 'View Course', 'wp-recipe-tutorial' ),
				'update_item'           => esc_html__( 'Update Course', 'wp-recipe-tutorial' ),
				'add_new_item'          => esc_html__( 'Add New Course', 'wp-recipe-tutorial' ),
				'new_item_name'         => esc_html__( 'New Course Name', 'wp-recipe-tutorial' ),
				'not_found'             => esc_html__( 'Not Found', 'wp-recipe-tutorial' ),
				'no_terms'              => esc_html__( 'No courses', 'wp-recipe-tutorial' ),
				'items_list_navigation' => esc_html__( 'Courses list navigation', 'wp-recipe-tutorial' ),
				'items_list'            => esc_html__( 'Courses list', 'wp-recipe-tutorial' ),
				'back_to_items'         => esc_html__( 'Courses list navigation', 'wp-recipe-tutorial' ),
				'parent_item'           => esc_html__( 'Parent Course', 'wp-recipe-tutorial' ), // Hierarchical only
				'parent_item_colon'     => esc_html__( 'Parent Course:', 'wp-recipe-tutorial' ), // Hierarchical only
				'search_items'          => esc_html__( 'Search Courses', 'wp-recipe-tutorial' ),
			),
			'public'            => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'rewrite'           => array(
				'slug'       => 'recipes/courses',
				'with_front' => false,
			),
		) );

	}

}
