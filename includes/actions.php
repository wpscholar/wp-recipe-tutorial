<?php

use RecipeTutorial\Recipe_Post_Type;

add_action( 'init', [ Recipe_Post_Type::class, 'register_post_type' ] );
