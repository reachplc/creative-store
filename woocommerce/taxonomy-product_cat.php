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

<?php if (has_term( "Education", "product_cat" )) : ?>

<div class="hero__edu hero__cat hero__sm">
  <div class="cat-title">
  	<h2><?php woocommerce_page_title(); ?></h2>
  </div>
</div>

<?php elseif (has_term( "legal-finance", "product_cat" )) : ?>

<div class="hero__legal hero__cat hero__sm">
  <div class="cat-title">
  	<h2><?php woocommerce_page_title(); ?></h2>
  </div>
</div>

<?php elseif (has_term( "Leisure", "product_cat" )) : ?>

<div class="hero__leisure hero__cat hero__sm">
  <div class="cat-title">
  	<h2><?php woocommerce_page_title(); ?></h2>
  </div>
</div>

<?php elseif (has_term( "Motors", "product_cat" )) : ?>

<div class="hero__motors hero__cat hero__sm">
  <div class="cat-title">
  	<h2><?php woocommerce_page_title(); ?></h2>
  </div>
</div>

<?php elseif (has_term( "Property", "product_cat" )) : ?>

<div class="hero__property hero__cat hero__sm">
  <div class="cat-title">
  	<h2><?php woocommerce_page_title(); ?></h2>
  </div>
</div>

<?php elseif (has_term( "Recruitment", "product_cat" )) : ?>

<div class="hero__recruitment hero__cat hero__sm">
  <div class="cat-title">
  	<h2><?php woocommerce_page_title(); ?></h2>
  </div>
</div>

<?php elseif (has_term( "Retail", "product_cat" )) : ?>

<div class="hero__retail hero__cat hero__sm">
  <div class="cat-title">
  	<h2><?php woocommerce_page_title(); ?></h2>
  </div>
</div>

<?php elseif (has_term( "Services", "product_cat" )) : ?>

<div class="hero__services hero__cat hero__sm">
  <div class="cat-title">
  	<h2><?php woocommerce_page_title(); ?></h2>
  </div>
</div>

<?php else : ?>

<header class="hero hero__archive" role="banner">
	<div class="marketing">
		<div class="cs_headerbox cs_headerbox__archive">
			<div class="title-container">
				<h1 class="entry-title"><?php woocommerce_page_title(); ?></h1>
			</div>
		</div>
	</div>
</header>

<?php endif; ?>

<section class="container container__none">
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
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

</div>
<?php get_footer();
