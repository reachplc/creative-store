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

	<div class="columns small-3">
		
		<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, array('295', '390')); else echo '<img src="'. wc_placeholder_img_src(array('295', '390')).'" alt="My Image Placeholder" />'; ?>
		
		<div class="extract">
			<?php echo wp_trim_words(get_the_content('Continue reading...', 'foundationpress' ), 30) ?>
		</div>

		<?php //foundationpress_entry_meta(); ?>
	
	</div>