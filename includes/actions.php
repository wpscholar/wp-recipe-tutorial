<?php

use RecipeTutorial\Recipe_Post_Type;
use RecipeTutorial\Recipe_Course_Taxonomy;
use RecipeTutorial\Recipe_Cuisine_Taxonomy;
use RecipeTutorial\Recipe_Yield_Block;

add_action( 'init', [ Recipe_Course_Taxonomy::class, 'register_taxonomy' ] );
add_action( 'init', [ Recipe_Cuisine_Taxonomy::class, 'register_taxonomy' ] );

add_action( 'init', [ Recipe_Post_Type::class, 'register_post_type' ] );

add_action( 'init', [ Recipe_Yield_Block::class, 'register_block' ] );

add_action( 'init', function () {

	register_taxonomy_for_object_type( Recipe_Course_Taxonomy::TAXONOMY, Recipe_Post_Type::POST_TYPE );
	register_taxonomy_for_object_type( Recipe_Cuisine_Taxonomy::TAXONOMY, Recipe_Post_Type::POST_TYPE );

} );

add_action( 'rest_api_init', [ Recipe_Post_Type::class, 'register_rest_fields' ] );
