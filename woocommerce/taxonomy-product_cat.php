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

		<?php do_action( 'foundationpress_after_content' ); ?>
		</div>
	</div>
</div>


<?php get_footer();
