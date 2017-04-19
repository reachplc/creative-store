<?php
/*
Template Name: Recents
*/
get_header(); ?>

<header class="hero" role="banner">
	<div class="marketing" id="Parallax">
		<div class="cs_headerbox" >
			<div class="title-container">
				<h1>The Creative Store.</h1>
			</div>
		</div>
	</div>
</header>
<!-- 
<div class="scene">
  <div class="layer" data-depth="0.00"><img src="app/themes/FoundationPress/assets/images/cs/homeheader.jpg"></div>
  <div class="layer" data-depth="1.00"><div class="cs_headerbox"></div></div>
</div> -->




<section class="container container__none">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="front-headline">
				<?php the_title( '<h2>', '</h2>' ); ?>
			</div>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			
			<div class="woocommerce woocommerce-page">

			<ul class="products">
			<?php
			$args = array(
			'post_type' => 'product',
			'stock' => 1,
			'posts_per_page' => 4,
			'orderby' =>'date',
			'order' => 'DESC' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<li class="product-category product">
					<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; ?>
					<h2 class="woocommerce-loop-category__title"><?php the_title(); ?></h2>
					</a>
				</li>

			<?php endwhile; ?>
			</ul>
			</div>
			<?php wp_reset_query(); ?>



		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>




<?php get_footer();
