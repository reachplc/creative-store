<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<div role="banner" style="background-color: #000;">
    <div class="vid hp-video">
        <video class="videoheader" autoplay loop muted>
          <source src="/app/themes/FoundationPress/assets/images/cs2/hero-vid5.mp4" type="video/mp4">
          <img src="/app/themes/FoundationPress/assets/images/cs2/hero-off.jpg">
        </video>
    </div>
</div>

<section class="container container__med rad-grad">
<?php do_action( 'foundationpress_after_header' ); ?>
<div class="intro-one">
<section class="intro intro-one" role="main">
	<div class="head-intro">
		<h2 class="bluetext">Selecting artwork is as easy as <span class="my123space">1-2</span>-3</h2>
		<div class="balls"><span class="coll-b1"></span><span class="coll-b2"></span></div>
	</div>

	<section class="benefits">
		<div class="semantic mybox">
		<div class="test-box-parent"><div class="test-box"></div><div class="test-tri"></div></div>
			<div class="ico1 ico123"></div>
			<p>Browse our huge library of eye-catching design templates</p>
		</div>
		<div class="responsive mybox">
		<div class="test-box-parent"><div class="test-box"></div><div class="test-tri"></div></div>
			<div class="ico2 ico123"></div>
			<p>Pick the style that’s a perfect match for your client’s business</p>

		</div>
		<div class="customizable mybox">
			<div class="test-box-parent"><div class="test-box"></div><div class="test-tri"></div></div>
			<div class="ico3 ico123"></div>
			<p>Add your copy &amp; images to create a masterpiece exclusive in your region</p>
		</div>

		<!-- <img src="/app/themes/FoundationPress/assets/images/cs2/ico/education_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/education_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/education_off.jpg';"> -->
	</section>
</section>
</div>

<!--  Animated Numbers  -->
<!-- <div class="three-test"></div> -->

<div class="intro-two">

	<section class="intro" role="main">
		<div class="fp-intro collections-box">

		<span class="coll-b1"></span><span class="coll-b2"></span>

		<h2 class="coll-text">The Store</h2>
		<h3 class="coll-text">We’ve got spectacular advertising templates for every kind of business. Time to choose a sector…</h3>

		<div class="cat-thumb">
			<a href="/product-category/education/">
				<img src="/app/themes/FoundationPress/assets/images/cs2/ico/education_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/education_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/education_off.jpg';">
				<h2>Education</h2>
			</a>
		</div>

		<div class="cat-thumb">
			<a href="/product-category/business/">
				<img class="ico-business" src="/app/themes/FoundationPress/assets/images/cs2/ico/business_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/business_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/business_off.jpg';">
				<h2>Business</h2>
			</a>
		</div>

		<div class="cat-thumb">
			<a href="/product-category/leisure/">
				<img src="/app/themes/FoundationPress/assets/images/cs2/ico/leisure_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/leisure_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/leisure_off.jpg';">
				<h2>Leisure</h2>
			</a>
		</div>

		<div class="cat-thumb">
			<a href="/product-category/motors/">
				<img src="/app/themes/FoundationPress/assets/images/cs2/ico/motors_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/motors_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/motors_off.jpg';">
				<h2>Motors</h2>
			</a>
		</div>

		<div class="cat-thumb">
			<a href="/product-category/property/">
				<img src="/app/themes/FoundationPress/assets/images/cs2/ico/property_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/property_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/property_off.jpg';">
				<h2>Property</h2>
			</a>
		</div>

		<div class="cat-thumb">
			<a href="/product-category/recruitment/">
				<img src="/app/themes/FoundationPress/assets/images/cs2/ico/recruitment_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/recruitment_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/recruitment_off.jpg';">
				<h2>Recruitment</h2>
			</a>
		</div>

		<div class="cat-thumb">
			<a href="/product-category/retail/">
				<img src="/app/themes/FoundationPress/assets/images/cs2/ico/retail_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/retail_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/retail_off.jpg';">
				<h2>Retail</h2>
			</a>
		</div>

		<div class="cat-thumb">
			<a href="/product-category/services/">
				<img src="/app/themes/FoundationPress/assets/images/cs2/ico/services_off.jpg" onmouseover="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/services_on.gif';" onmouseout="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/services_off.jpg';">
				<h2>Services</h2>
			</a>
		</div>
	</div>
</div>

	</section>
</div>

<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</div>

</div>

<div class="greyPage frontpage-caro">
	<div class="row">
		<div class="small-12 columns">
			<h2>Recently Added</h2>
			<div class="balls"><span class="coll-b1"></span><span class="coll-b2"></span></div>
			<h4>We add brand new templates every week but remember it’s first come first served, so check back regularly!</h4>
			<ul class="products owl-carousel">
				<?php
						
				$args = array(
					'post_type' => 'product',				
					'posts_per_page' => 10,
					'stock' => 1,
					'orderby' =>'date',
					'order' => 'DESC' );
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<li class="product-category product">
						<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; ?>
						
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>

</div>

<div class="assetpreload">
	<img src="/app/themes/FoundationPress/assets/images/cs2/123/1-on.png" style="display: none;">
	<img src="/app/themes/FoundationPress/assets/images/cs2/123/2-on.png" style="display: none;">
	<img src="/app/themes/FoundationPress/assets/images/cs2/123/3-on.png" style="display: none;">
	<img src='/app/themes/FoundationPress/assets/images/cs2/ico/education_on.gif' style="display:none;">
	<img src='/app/themes/FoundationPress/assets/images/cs2/ico/business_on.gif' style="display:none;">
	<img src='/app/themes/FoundationPress/assets/images/cs2/ico/leisure_on.gif' style="display:none;">
	<img src='/app/themes/FoundationPress/assets/images/cs2/ico/motors_on.gif' style="display:none;">
	<img src='/app/themes/FoundationPress/assets/images/cs2/ico/property_on.gif' style="display:none;">
	<img src='/app/themes/FoundationPress/assets/images/cs2/ico/recruitment_on.gif' style="display:none;">
	<img src='/app/themes/FoundationPress/assets/images/cs2/ico/retail_on.gif' style="display:none;">
	<img src='/app/themes/FoundationPress/assets/images/cs2/ico/services_on.gif' style="display:none;">
</div>

<?php get_footer();
