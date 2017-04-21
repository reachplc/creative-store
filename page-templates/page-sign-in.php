<?php
/**
 Template Name: Page Sign In
 *
 */

if ( is_user_logged_in() ) {
	wp_safe_redirect( home_url( '/' ) );
	exit;
}

/** Check if the login failed. */
$login_status = ( get_query_var( 'login' ) === 'failed' ? true : false );

get_header(); ?>

<style>
	#masthead {
		display: none;		
	}
</style>

<div class="sign-in">

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

						<section class="info">

							<?php printf(
								'<p><a href="%2$s">%1$s</a> %3$s</p>',
							esc_html__( 'Create your account', 'creative-store' ),
								esc_url( wp_registration_url() ),
							esc_html__( 'or Sign In', 'creative-store')
							); ?>


						</section>

							<?php if ( true === $login_status ) : ?>
							<section class="c-alert c-alert--message c-alert--warning c-alert--type u-stack-l" role="alert">
								<p>
								<?php printf(
									'<strong>%1$s</strong> %2$s',
									esc_html__( 'Ooops.', 'creative-store' ),
									esc_html__( 'Incorrect username or password. Please try again.', 'creative-store' )
								); ?>
								</p>
							</section>
						<?php endif; ?>

						<?php
							$args = array(
							    'id_username' => 'user',
							    'id_password' => 'pass',
							    'label_username' => __( 'Username' )
							   ) 
							;?>
						<?php wp_login_form( $args ); ?>


					<section>
						<?php printf(
							'<p><a href="%1$s" title="%2$s">%3$s</a></p>',
							esc_url( wp_lostpassword_url( get_permalink() ) ),
							esc_html__( 'Forgot Password', 'creative-store' ),
							esc_html__( 'Forgot your Password?' )
						); ?>
					</section>
					</article>
				</div>
			</div><!-- row -->
		</main><!-- #main -->

	</div><!-- #primary -->
	<!-- <div class="bg-overlay-img"></div> -->

	<div class="bg-overlay"></div>

</div>

<?php get_footer();
