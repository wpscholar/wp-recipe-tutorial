<?php

/**
 * Current WordPress post object.
 *
 * @var \WP_Post $post
 */

?>
<div class="recipe-card">

	<?php if ( has_post_thumbnail( $post ) ) : ?>
		<div class="recipe-card__thumbnail">
			<?php echo get_the_post_thumbnail( $post ) ?>
		</div>
	<?php endif; ?>

	<div class="recipe-card__description">
		<?php echo get_the_excerpt( $post ); ?>
	</div>

</div>
