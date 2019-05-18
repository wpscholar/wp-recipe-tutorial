<?php

/*
 * Plugin Name:  WP Recipe Tutorial
 * Plugin URI:   https://github.com/wpscholar/wp-recipe-tutorial
 * Description:  A modern recipe plugin for WordPress that utilizes the block editor.
 * Version:      1.0
 * Author:       Micah Wood
 * Author URI:   https://wpscholar.com
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  wp-recipe-tutorial
 * Domain Path:  /languages
 */

use RecipeTutorial\Recipe_Post_Type;
use RecipeTutorial\Recipe_Course_Taxonomy;
use RecipeTutorial\Recipe_Cuisine_Taxonomy;

define( 'RECIPE_TUTORIAL_PATH', plugin_dir_path( __FILE__ ) );
define( 'RECIPE_TUTORIAL_URL', plugin_dir_url( __FILE__ ) );

// Load classes
require __DIR__ . '/includes/Recipe_Post_Type.php';
require __DIR__ . '/includes/Recipe_Course_Taxonomy.php';
require __DIR__ . '/includes/Recipe_Cuisine_Taxonomy.php';

// Register action hooks
require __DIR__ . '/includes/actions.php';

// Register activation hook
register_activation_hook( __FILE__, function () {

	Recipe_Course_Taxonomy::register_taxonomy();
	Recipe_Cuisine_Taxonomy::register_taxonomy();
	Recipe_Post_Type::register_post_type();
	flush_rewrite_rules();

} );
