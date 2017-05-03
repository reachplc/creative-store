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

<div class="nav-background"></div>

<section class="container container__xl">
<?php do_action( 'foundationpress_after_header' ); ?>


<section class="intro product-intro" role="main">
	<div class="row">
			<div class="small-12 large-12 columns" role="main">
						<nav aria-label="You are here:" role="navigation">
							<div class="breadcrumb breadcrumb__left">
								<p>You are here:</p><?php woocommerce_breadcrumb() ?>
							</div>
						</nav>
					
			</div>
		</div>
	</div>
</section>

<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
<!-- 	<?php get_sidebar(); ?> -->
</div>
<?php get_footer();
