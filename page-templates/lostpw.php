<?php
/**
 Template Name: Lost Password
 *
 */

if ( is_user_logged_in() ) {
	wp_safe_redirect( home_url( '/' ) );
	exit;
}

get_header(); ?>
<style>
html {
	max-height: 100vh !important;
	overflow-y: hidden;
}

#masthead {
	display: none;		
}
</style>
<header class="hero hero__big" role="banner">
	<div class="marketing" id="Parallax">
		<div class="cs_headerbox cs_headerbox__big" >
			<div class="title-container">
				<h1>The Creative Store.</h1>
			</div>
		</div>
	</div>
</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="row">
				<div class="login-form-popup">
					<article class="module login-form drop-shadow">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<section>

						</section>
					</article>
				</div>
			</div><!-- row -->
		</main><!-- #main -->

	</div><!-- #primary -->
	<!-- <div class="bg-overlay-img"></div> -->

	<div class="bg-overlay"></div>

<?php get_footer();
