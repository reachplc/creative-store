<?php//Template Name: DevTest ?>

<?php get_header(); ?>

<?php
		$args= array(
			'post_type' => array('product', 'product_variation'),
			'post_status' => 'publish',
			'post_per_page' => 5,
			'meta_query' => array(
				array(
					'key' => '_manage_stock',
					'value' => 'yes'
				),
				array(
					'key' => '_stock',
					'value' 	=> 0, //array('', false, null),
					'compare' 	=> '=' //'NOT IN'
				)
			),
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => array('leisure'),
					'include_children' => false,
					'operator' => 'IN'
				)
			)
		);

		$loop = new WP_Query();

		while($loop->have_posts() ) : $loop->the_post();

			global $product; ?>

			<?php echo $product->get_title(); ?>

		<?php endwhile;?>

<?php get_footer(); ?>
