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

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <ul class="orbit-container">
    <li class="is-active orbit-slide">
		<div class="hero" role="banner">
			<div class="marketing" id="Parallax">
				<div class="cs_headerbox" >
					<div class="title-container">
						<h1>The Creative Store.</h1>
					</div>
				</div>
			</div>
		</div>
    </li>
    <li class="orbit-slide">
      <div class="hero__motors hero__cat">
	      <div class="cat-title">
	      	<h2>Motors</h2>
	      </div>
      </div>
    </li>
    <li class="orbit-slide">
      <div class="hero__leisure hero__cat">
	      <div class="cat-title">
	      	<h2>Leisure</h2>
	      </div>
      </div>
    </li>
  </ul>
	<nav class="orbit-bullets">
	   <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
	   <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
	   <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
	</nav>
</div>

<section class="container container__med">
<?php do_action( 'foundationpress_after_header' ); ?>

<section class="intro" role="main">
	<div class="fp-intro">

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
			<a src="/recent-products/" class="sites-button">Explore</a>
			<img class="format-1 drop-shadow" src="app/themes/FoundationPress/assets/images/cs/formats/MPU.jpg">
			<img class="format-2 drop-shadow" src="app/themes/FoundationPress/assets/images/cs/formats/Halfpage.jpg">
			<img class="format-3 drop-shadow" src="app/themes/FoundationPress/assets/images/cs/formats/Leaderboard.jpg">
		</div>
	</div>
</div>


</div>


<?php get_footer();
