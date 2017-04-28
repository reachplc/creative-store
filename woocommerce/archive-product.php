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

	<div class="hero" role="banner">

		</div>

	


<section class="container container__med rad-grad">
<?php do_action( 'foundationpress_after_header' ); ?>
<div class="intro-one">
<section class="intro intro-one" role="main">
	<div class="head-intro">
		<h2 class="bluetext">Selecting artwork is as easy as 1 2 3</h2>
	</div>

	<section class="benefits">
		<div class="semantic mybox">
			<div class="ico1"></div>
			<p>Explore our Library of engaging, bespoke and distinctive design templates.</p>
		</div>
		<div class="responsive mybox">
			<div class="ico2"></div>
			<p>Select and reserve the desired artwork to meet your client's requirements.</p>

		</div>
		<div class="customizable mybox">
			<div class="ico3"></div>
			<p>Our studio team will work with you to tailor artwork to your exact specifications.</p>
		</div>
	</section>
</section>
</div>

<div class="intro-two">

	<section class="intro" role="main">
		<div class="fp-intro collections-box">

		<span class="coll-b1"></span><span class="coll-b2"></span>

		<h2 class="coll-text">The Collections</h2>
		<h3 class="coll-text">Browse 100's of beautiful templates designed for every kind of business.</h3>

			<?php while ( woocommerce_content() ) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile;?>
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
		<div class="small-12 large-6 columns">
			<h2>Recently Added</h2>
			<p style="margin-bottom: 0;">Our most recent adverts to help you keep your advertising needs ahead of the curve.</p>
			<a href="/recent-products/" class="sites-button">Explore</a>
			<img class="format-1 drop-shadow" src="app/themes/FoundationPress/assets/images/cs/formats/MPU.jpg">
			<img class="format-2 drop-shadow" src="app/themes/FoundationPress/assets/images/cs/formats/Halfpage.jpg">
			<img class="format-3 drop-shadow" src="app/themes/FoundationPress/assets/images/cs/formats/Leaderboard.jpg">
		</div>
	</div>
</div>


</div>


<?php get_footer();
