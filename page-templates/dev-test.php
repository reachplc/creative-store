<?php//Template Name: DevTest ?>

<?php get_header(); ?>

<?php do_action( 'foundationpress_after_header' ); ?>

	<div style=" width: 80vw; margin: 0 auto; padding-top: 150px; text-align: center">
		<h1 style="color: #fff; margin: 0; padding: 0; background-color: #3254de;  padding: 10px 25px; border-radius: 5px; text-align: center; margin-bottom: 40px">Notification</h1>

		<?php

			$args = array(
				'post_type' => 'product',
				'orderby'    => 'title',
				'order'      => 'ASC',
			);

			//Gets all product categories
			$product_categories = get_terms( 'product_cat', $args );
			$cat_count = count($product_categories);

			echo '<h1> Total Category: ' . $cat_count . '</h1>';


			//if ( $cat_count > 0 ) { //Not Really needed
				foreach ($product_categories as $product_category) {
					echo '<h4><a href="' . get_term_link( $product_category ) . '">' . $product_category->name . '</a></h4>';

					$args = array(
						'posts_per_page' => -1,
						'tax_query' => array(
						'relation' => 'AND',
							array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => $product_category->slug,
							)
						),
						'post_type' => 'product',
						'orderby' => 'title'
					);

					$store_products = new WP_Query( $args );

					//Get the total number of product per category
					$product_count = $store_products->post_count;

					echo '<strong style="color: #fff">Total products: (' . $product_count . ')</strong>';

					if($product_count < 40) {
						//echo '<p>Stock low, send alert</p>';
					} else {
						//echo '<p>Stock good, do noting</p>';
					}

				}
			//}



		?>

	</div>

		<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer(); ?>