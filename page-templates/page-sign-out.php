<?php
/**
Template Name: Page Sign Out
 *
 * 
 */

if ( ! is_user_logged_in() ) {
	wp_safe_redirect( home_url( '/' ) );
	exit;
}

wp_logout();
wp_safe_redirect( home_url( '/accounts/sign-in/' ) );
exit;
