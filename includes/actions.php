<?php

use RecipeTutorial\Recipe_Post_Type;
use RecipeTutorial\Recipe_Course_Taxonomy;
use RecipeTutorial\Recipe_Cuisine_Taxonomy;
use RecipeTutorial\Recipe_Card_Block;
use RecipeTutorial\Recipe_Yield_Block;

add_action( 'init', [ Recipe_Course_Taxonomy::class, 'register_taxonomy' ] );
add_action( 'init', [ Recipe_Cuisine_Taxonomy::class, 'register_taxonomy' ] );

add_action( 'init', [ Recipe_Post_Type::class, 'register_post_type' ] );

add_action( 'init', [ Recipe_Card_Block::class, 'register_block' ] );
add_action( 'init', [ Recipe_Yield_Block::class, 'register_block' ] );

add_action( 'init', function () {

	register_taxonomy_for_object_type( Recipe_Course_Taxonomy::TAXONOMY, Recipe_Post_Type::POST_TYPE );
	register_taxonomy_for_object_type( Recipe_Cuisine_Taxonomy::TAXONOMY, Recipe_Post_Type::POST_TYPE );

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
		[ 'wp-blocks', 'wp-components', 'wp-editor', 'wp-element', 'wp-i18n' ],
		filemtime( RECIPE_TUTORIAL_PATH . "assets/js/blocks{$suffix}.js" )
	);

} );

add_action( 'rest_api_init', [ Recipe_Post_Type::class, 'register_rest_fields' ] );
