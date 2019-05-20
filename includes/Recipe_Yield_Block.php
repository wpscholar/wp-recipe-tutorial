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

		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		wp_register_style(
			'rtut-block-css',
			RECIPE_TUTORIAL_URL . "assets/css/blocks{$suffix}.css",
			[ 'wp-edit-blocks' ],
			filemtime( RECIPE_TUTORIAL_PATH . "assets/css/blocks{$suffix}.css" )
		);

		wp_register_script(
			'rtut-editor-js',
			RECIPE_TUTORIAL_URL . "assets/js/blocks{$suffix}.js",
			[ 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n' ],
			filemtime( RECIPE_TUTORIAL_PATH . "assets/js/blocks{$suffix}.js" )
		);

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
