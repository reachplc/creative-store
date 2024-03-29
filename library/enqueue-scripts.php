<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.9.0', 'all' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );


	// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.9.0', true );

	// //Carousel stylesheet
	// wp_enqueue_style( 'carousel-animation', get_template_directory_uri() . '/assets/stylesheets/animate.css', array(), '3.5.2', 'all');
	//
	// wp_enqueue_style( 'carousel-stylesheet', get_template_directory_uri() . '/assets/stylesheets/owl.carousel.min.css', array(), '2.2.1', 'all');
	//
	//
	// wp_enqueue_script( 'carousel-javascript', get_template_directory_uri() .  '/assets/javascript/owl.carousel.min.js', array(), '3.2.1', false);

	wp_enqueue_style( 'flipster-stylesheet', get_template_directory_uri() . '/assets/stylesheets/jquery.flipster.min.css', array(), '2.2.1', 'all');


	wp_enqueue_script( 'flipster-javascript', get_template_directory_uri() .  '/assets/javascript/jquery.flipster.min.js', array(), '3.2.1', false);


	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
