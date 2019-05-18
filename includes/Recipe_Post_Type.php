<?php

namespace RecipeTutorial;

/**
 * Class Recipe_Post_Type
 *
 * @package RecipeTutorial
 */
class Recipe_Post_Type {

	/**
	 * Post type internal name.
	 *
	 * @var string
	 */
	const POST_TYPE = 'rtut-recipe';

	/**
	 * Register post type.
	 */
	public static function register_post_type() {

		register_post_type( self::POST_TYPE, array(
			'label'        => esc_html__( 'Recipes', 'wp-recipe-tutorial' ),
			'labels'       => array(
				'name'                  => esc_html_x( 'Recipes', 'post type general name', 'wp-recipe-tutorial' ),
				'singular_name'         => esc_html_x( 'Recipe', 'post type singular name', 'wp-recipe-tutorial' ),
				'add_new'               => esc_html_x( 'Add New', 'recipe', 'wp-recipe-tutorial' ),
				'add_new_item'          => esc_html__( 'Add New Recipe', 'wp-recipe-tutorial' ),
				'edit_item'             => esc_html__( 'Edit Recipe', 'wp-recipe-tutorial' ),
				'new_item'              => esc_html__( 'New Recipe', 'wp-recipe-tutorial' ),
				'view_item'             => esc_html__( 'View Recipe', 'wp-recipe-tutorial' ),
				'view_items'            => esc_html__( 'View Recipes', 'wp-recipe-tutorial' ),
				'search_items'          => esc_html__( 'Search Recipes', 'wp-recipe-tutorial' ),
				'not_found'             => esc_html__( 'No recipes found.', 'wp-recipe-tutorial' ),
				'not_found_in_trash'    => esc_html__( 'No recipes found in Trash.', 'wp-recipe-tutorial' ),
				'all_items'             => esc_html__( 'All Recipes', 'wp-recipe-tutorial' ),
				'archives'              => esc_html__( 'Recipe Archives', 'wp-recipe-tutorial' ),
				'insert_into_item'      => esc_html__( 'Insert into recipe', 'wp-recipe-tutorial' ),
				'upload_to_this_item'   => esc_html__( 'Uploaded to this recipe', 'wp-recipe-tutorial' ),
				'filter_items_list'     => esc_html__( 'Filter recipes list', 'wp-recipe-tutorial' ),
				'items_list_navigation' => esc_html__( 'Recipes list navigation', 'wp-recipe-tutorial' ),
				'items_list'            => esc_html__( 'Recipes list', 'wp-recipe-tutorial' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-carrot',
			'rewrite'      => array(
				'slug'       => 'recipes',
				'with_front' => false,
			),
			'show_in_rest' => true,
			'rest_base'    => 'recipes',
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'revisions',
			),
			'template'     => [
				[ 'core/paragraph', [ 'placeholder' => 'Enter a description of your recipe here...' ] ],
				[ 'core/paragraph', [ 'placeholder' => 'Servings: 2' ] ],
				[ 'core/heading', [ 'content' => 'Ingredients' ] ],
				[ 'core/list', [] ],
				[ 'core/heading', [ 'content' => 'Instructions' ] ],
				[ 'core/paragraph', [ 'placeholder' => 'Enter recipe instructions here...' ] ],
			],
		) );

	}

}
