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
          <source src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/hero-vid5.mp4" type="video/mp4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/hero-off.jpg">
        </video>
    </div>
</div>

<section class="container container__med rad-grad">
<?php do_action( 'foundationpress_after_header' ); ?>
<div class="intro-one">
<section class="intro intro-one" role="main">

	<div class="head-intro">
		<h2 class="coll-text"><span>Selecting artwork is as easy as <em>1-2-3</em></span></h2>
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
	</section>
</section>
</div>

<!--  Animated Numbers  -->
<!-- <div class="three-test"></div> -->

<div class="intro-two">

	<section class="intro" role="main">
		<div class="fp-intro collections-box">
		<h2 class="coll-text"><span>The Store</span></h2>
		<h3 class="coll-text">We’ve got spectacular advertising templates for every kind of business. Time to choose a sector…</h3>

		<div class="inner-wrap">
			<div class="cat-thumb">
				<a href="/product-category/education/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/education_off.jpg" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/education_on.gif';" onclick="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/education_on.gif';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/education_off.jpg';">
					<h2>Education</h2>
				</a>
			</div>

			<div class="cat-thumb">
				<a href="/product-category/business/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/business_off.jpg" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/business_on.gif';" onclick="this.src='/app/themes/FoundationPress/assets/images/cs2/ico/business_on.gif';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/business_off.jpg';">
					<h2>Business</h2>
				</a>
			</div>

			<div class="cat-thumb">
				<a href="/product-category/leisure/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/leisure_off.jpg" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/leisure_on.gif';" onclick="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/leisure_on.gif';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/leisure_off.jpg';">
					<h2>Leisure</h2>
				</a>
			</div>

			<div class="cat-thumb">
				<a href="/product-category/motors/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/motors_off.jpg" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/motors_on.gif';" onclick="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/motors_on.gif';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/motors_off.jpg';">
					<h2>Motors</h2>
				</a>
			</div>

			<div class="cat-thumb">
				<a href="/product-category/property/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/property_off.jpg" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/property_on.gif';" onclick="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/property_on.gif';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/property_off.jpg';">
					<h2>Property</h2>
				</a>
			</div>

			<div class="cat-thumb">
				<a href="/product-category/recruitment/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/recruitment_off.jpg" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/recruitment_on.gif';" onclick="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/recruitment_on.gif';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/recruitment_off.jpg';">
					<h2>Recruitment</h2>
				</a>
			</div>

			<div class="cat-thumb">
				<a href="/product-category/retail/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/retail_off.jpg" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/retail_on.gif';" onclick="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/retail_on.gif';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/retail_off.jpg';">
					<h2>Retail</h2>
				</a>
			</div>

			<div class="cat-thumb">
				<a href="/product-category/services/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/services_off.jpg" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/services_on.gif';" onclick="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/services_on.gif';" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/services_off.jpg';">
					<h2>Services</h2>
				</a>
			</div>
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

<div class="greyPage">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="coll-text"><span>Recently Added</span></h2>
			<h4>We add brand new templates every week but remember it’s first come first served, so check back regularly!</h4>
			<h4 class="temp-instruct">Select a design theme below to view digital and print templates.</h4>

			<div class="flpcontainer">
				<?php echo do_shortcode('[recent_products per_page="12"]'); ?>
			</div>
		</div>
	</div>
</div>




<div class="assetpreload">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/123/1-on.png" style="display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/123/2-on.png" style="display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/123/3-on.png" style="display: none;">
	<img src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/education_on.gif' style="display:none;">
	<img src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/business_on.gif' style="display:none;">
	<img src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/leisure_on.gif' style="display:none;">
	<img src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/motors_on.gif' style="display:none;">
	<img src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/property_on.gif' style="display:none;">
	<img src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/recruitment_on.gif' style="display:none;">
	<img src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/retail_on.gif' style="display:none;">
	<img src='<?php echo get_template_directory_uri(); ?>/assets/images/cs2/ico/services_on.gif' style="display:none;">
</div>
<script>
  $('.my-flipster').flipster();
	$('body').removeClass("woocommerce");
	$('body').removeClass("woocommerce-page");
</script>

<?php get_footer();
