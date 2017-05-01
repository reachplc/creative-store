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


			<div class="title-container">
				<h1 class="entry-title"><?php woocommerce_page_title(); ?></h1>
			</div>
	

<section class="container container__none" style="position: relative; top: -31px;">
<?php do_action( 'foundationpress_after_header' ); ?>

<section class="intro" role="main">
	<div class="fp-intro">
			<div class="front-headline">
				<h2><?php woocommerce_page_title(); ?></h2>
			</div>
			<div class="entry-content">
						<nav aria-label="You are here:" role="navigation">
							<div class="breadcrumb">
								<p>You are here:</p><?php woocommerce_breadcrumb() ?>
							</div>
						</nav>
					
			</div>
		</div>
	</div>
</section>

<hr>

<div class="row">
	<div class="small-12 large-12 columns" role="main">
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
<?php get_footer();
