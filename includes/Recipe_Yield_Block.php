<?php

namespace RecipeTutorial;

/**
 * Class Recipe_Yield_Block
 *
 * @package RecipeTutorial
 */
class Recipe_Yield_Block {

	const BLOCK = 'rtut/recipe-yield';

	/**
	 * Register block.
	 */
	public static function register_block() {

		register_meta(
			'post',
			'_rtut_recipe_yield',
			[
				'auth_callback'     => function ( $allowed, $name, $post_id ) {
					return current_user_can( 'edit_post', $post_id );
				},
				'object_subtype'    => Recipe_Post_Type::POST_TYPE,
				'sanitize_callback' => 'absint',
				'show_in_rest'      => true,
				'single'            => true,
				'type'              => 'number',
			]
		);

		register_block_type(
			self::BLOCK,
			[
				'style'         => 'rtut-block-css',
				'editor_script' => 'rtut-editor-js'
			]
		);

	}

}
