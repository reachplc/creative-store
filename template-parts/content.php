<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	<div class="results">
		
		<a href="<?php the_permalink(); ?>">
			<?php if (has_post_thumbnail( $loop->post->ID )) the_post_thumbnail($loop->post->ID, 'thumbnail-size'); else echo '<img src="'. wc_placeholder_img_src('thumbnail-size').'" alt="My Image Placeholder" />'; ?>
		
		<h2><?php the_title(); ?></h2>
		</a>
				
		<?php //foundationpress_entry_meta(); ?>
	
	</div>