<?php

use RecipeTutorial\Recipe_Post_Type;

add_filter( 'the_content', function ( $content ) {

	if ( is_singular( Recipe_Post_Type::POST_TYPE ) ) {

		$content .= '<p>' . implode( ' ', get_the_taxonomies() ) . '</p>';

	}

	return $content;

} );
