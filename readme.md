# WP Recipe Tutorial

Repository: https://github.com/wpscholar/wp-recipe-tutorial

Follow along with the [commits to this repository](https://github.com/wpscholar/wp-recipe-tutorial/commits/master) to learn how to create a modern WordPress plugin that utilizes the Gutenberg block editor.

## Plugin Prefix Documentation

- Slug/TextDomain: `wp-recipe-tutorial` - plugin slug and text domain for string translation
- Slug Prefix: `rtut-` - used to prefix post type and taxonomy names
- Meta Prefix: `rtut_` - used to prefix meta fields, prefix with `_` for protected fields
- Constant Prefix: `RECIPE_TUTORIAL_` - used to prefix PHP constants
- Function Prefix: `rtut_` - used to prefix PHP functions
- Class Prefix: `Recipe_Tutorial_` - used to prefix PHP classes (in lieu of namespaces)
- Namespace: `RecipeTutorial` - The PHP namespace to be used (in lieu of class prefixes)

## Project Setup

- Run `npm install`

## Development Notes

- Run `npm run build` to build the minified assets.
- Run `npm start` to build the non-minified assets and watch files for changes.
- Add this line to your `wp-config.php` file to force WordPress to use the non-minified assets: `define( 'SCRIPT_DEBUG', true );`
