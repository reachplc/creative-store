<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<section class="container container__none container__nobg" style="position: relative; top: 38px">
<?php do_action( 'foundationpress_after_header' ); ?>

<section class="intro" role="main">
	<div class="fp-intro">
			<div class="front-headline">
				<h2 class="coll-text"><span><?php woocommerce_page_title(); ?></span></h2>
			</div>
			<div class="entry-content">

				<p class="temp-instruct">Select a design theme below to view digital and print templates</p>
						<nav aria-label="You are here:" role="navigation">
							<div class="breadcrumb" style="display: none;">
								<p>You are here:</p><?php woocommerce_breadcrumb() ?>
							</div>
						</nav>
			</div>
		</div>
	</div>
</section>


<div class="row" style="margin-bottom: 60px;">
	<div class="small-12 large-12 columns" role="main">
		<div class="cat-page">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( woocommerce_content() ) : the_post(); ?>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile;?>

		<?php

			$user_region = tm_get_user_region();
			$current_category = get_queried_object();
			$paged = get_query_var( 'paged') ? get_query_var('paged') : 1;
			$post__in = array();

			$args_count = array(
				'post_type' 	=> 'product',
				'post_status'=> 'publish',
				'posts_per_page'=> -1, //Change to all later
				'orderby' => 'title',
				'order'=> 'ASC',
				'paged'=> $paged,
					'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field' => 'term_id',
						'terms' => $current_category->term_id,
					)
				)
			);

			$category_total =  get_posts( $args_count );
			$product_count = $category_total->post_count;

			foreach ($category_total as $total) {
				//Product object
				$product_s = wc_get_product($total->ID);

				//Get stock status
				$product_variations = $product_s->get_available_variations();

				foreach ($product_variations as $variation) {
					//$product_region = $variation['attributes']['attribute_pa_regions'];
					$product_region = $variation['attributes']['attribute_pa_regions'];

					//if($user_region === $product_region && $variation['is_in_stock']) {
					if($user_region === $product_region && $variation['is_in_stock']) {
						$post__in[] = $total->ID;
					}
				}
			}

			//TODO CRON JOB

			if(count($post__in) < 36) {
				echo '<pre style="background-color: #343434; color: #fff; padding: 20px">';
				var_dump( 'Your have: ' . count($post__in) .  ' items in stock for ' . $user_region . ' for the ' . $current_category->slug . ' category');
				var_dump('This is where you can send and email');
				echo '</pre>';
			} else {

				echo '<pre style="background-color: #343434; color: #fff; padding: 20px">';
				var_dump( 'Your have: ' . count($post__in) .  ' items in stock for ' . $user_region . ' for the ' . $current_category->slug . ' category');

				echo '</pre>';

			}
		?>

		<?php do_action( 'foundationpress_after_content' ); ?>
		</div>
	</div>
</div>


<?php get_footer();
