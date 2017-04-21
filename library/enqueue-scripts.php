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

	//Owl Carousel stylesheet
	wp_enqueue_style( 'owl-stylesheet', get_template_directory_uri() . '/assets/stylesheets/owl.carousel.min.css', array(), '2.2.1', 'all' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	//owl carousle library
	wp_enqueue_script( 'owl-init', get_template_directory_uri() . '/assets/javascript/custom/init-owl.js', array('jquery'), '2.2.1', true );

	// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.9.0', true );

	//Orbit slider Stylesheet
	wp_enqueue_style( 'owl-stylesheet', get_template_directory_uri() . '/assets/stylesheets/owl.carousel.min.css', array(), '2.2.1', 'all' );

	//Orbit slider JS
	wp_enqueue_script( 'owl-library', get_template_directory_uri() . '/assets/javascript/owl.carousel.min.js', array('jquery'), '2.2.1', true );

	//Init Orbit
	wp_enqueue_script( 'owl-init', get_template_directory_uri() . '/assets/javascript/custom/init-owl.js', array('jquery'), '1.0', true );

	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
