<?php

namespace RecipeTutorial;

/**
 * Class Recipe_Card_Block
 *
 * @package RecipeTutorial
 */
class Recipe_Card_Block {

	const BLOCK = 'rtut/recipe-card';

	/**
	 * Register block.
	 */
	public static function register_block() {

		register_block_type(
			self::BLOCK,
			[
				'style'           => 'rtut-block-css',
				'editor_script'   => 'rtut-editor-js',
				'attributes'      => [
					'id' => [
						'type'    => 'number',
						'default' => 0,
					],
				],
				'render_callback' => function ( $atts, $content = '' ) {
					$post_id = $atts['id'];
					if ( $post_id ) {
						$post = get_post( $post_id );

						if ( ( empty( $post ) || Recipe_Post_Type::POST_TYPE !== get_post_type( $post ) ) && current_user_can( 'edit_posts' ) ) {
							$content = '<pre>Invalid Recipe ID</pre>';
						} else {
							$content = self::render_template( RECIPE_TUTORIAL_PATH . '/templates/recipe-card.php', $post );
						}

					}

					return $content;
				}
			]
		);

	}

	/**
	 * Render a template.
	 *
	 * @param string $template
	 * @param array  $context
	 *
	 * @return false|string
	 */
	public static function render_template( $template, \WP_Post $post ) {
		if ( file_exists( $template ) ) {
			ob_start();
			include $template;
			$content = ob_get_clean();
		}

		return $content;
	}

}
