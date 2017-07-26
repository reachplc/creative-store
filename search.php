<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

<div class="row">
	<div class="small-12 large-12 columns search-query" role="main">
		<?php do_action( 'foundationpress_before_content' ); ?>

			<h2 class="title title--large coll-text">
				<span><?php _e( 'Search Results', 'foundationpress' ); ?></span>
			</h2>

			<h4>Results for: <?php echo get_search_query(); ?></h4>

			<?php
				$user_region = tm_get_user_region();
				$paged = get_query_var( 'paged' ) ? get_query_var('paged') : 1;
				$search = get_search_query();
				$post__in = array();

				$args = array(
					'post_type'        	=> 'product',
					'post_status'       => 'publish',
					'posts_per_page'		=> 12,
					'orderby'           => 'title',
					'order'             => 'ASC',
					's' 								=> $search,
					'post__not_in'			=>	$post__in,
					'exclude'						=> $post__in,
					'paged' 						=> $paged,
				);

				$loop = get_posts($args);
				$post__in = array();
			?>

			<?php
					foreach($loop as $post) {
						$product_s = wc_get_product($post->ID);
						$product_variations = $product_s->get_available_variations();

						foreach ($product_variations as $variation) {
							$product_region = $variation['attributes']['attribute_pa_regions'];

							if($user_region === $product_region && !$variation['is_in_stock']) {
								$post__in[] = $post->ID;
							}
						}
					}
				 ?>

					<?php
						$paged = get_query_var( 'paged' ) ? get_query_var('paged') : 1;
						$argss = array(
							'post_type'        	=> 'product',
							'post_status'       => 'publish',
							'posts_per_page'		=> 12,
							'orderby'           => 'title', //DONT CHANGE
							'order'             => 'ASC',
							's' 								=> $search,
							'post__not_in'			=> $post__in,
							'exclude'						=> $post__in,
							'paged' 						=> $paged,
						);

						$query = new WP_Query($argss); ?>

				<?php if($query->have_posts()) :?>

					<?php while ($query->have_posts() ) : $query->the_post();?>
						<?php get_template_part('template-parts/content', get_post_format() ); ?>
					<?php endwhile; ?>

				<?php else: $hide_me = true; ?>
					<div class="search-no-results">
						<?php get_template_part('template-parts/content', 'none'); ?>
					</div>
				<?php endif; ?>

			<?php
				if(!$hide_me) {
					if (function_exists('foundationpress_pagination')) {
						foundationpress_pagination();
					}
				}
			?>

	</div>
</div>

<?php get_footer();
