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

<div class="sign-in">

	<header class="hero" role="banner">

	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="row">
				<div class="login-form-popup">
					<article class="module login-form drop-shadow">


						<img class="login-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/cs2/sign-in.png">

						<section class="info"></section>

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

						<hr>

							<?php printf(
								'<p>%3$s <a href="%2$s">%1$s</a></p>',
							esc_html__( 'Create Account', 'creative-store' ),
								esc_url( wp_registration_url() ),
							esc_html__( 'Not a member? ', 'creative-store')
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
