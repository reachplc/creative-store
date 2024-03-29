<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
</div>
</div>
</div>
	<div class="related products">
		<div class="row">
			<div class="small-12 large-12 columns">

				<div class="similarcollections">

				<h2 style="font-weight: 100; font-size: 2.4rem;"><span class="bluetext" style="font-weight: 100; font-size: 2.4rem;">Similar</span> Templates</h2>

				<?php woocommerce_product_loop_start(); ?>

					<?php foreach ( $related_products as $related_product ) : ?>

						<?php
						 	$post_object = get_post( $related_product->get_id() );
							setup_postdata( $GLOBALS['post'] =& $post_object );
							wc_get_template_part( 'content', 'product' ); ?>

						<?php endforeach; ?>

				<?php woocommerce_product_loop_end(); ?>
				</div>
			</div>
	</div>

<?php endif;
wp_reset_postdata();