<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,500" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>


	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="nav-background">  
				<div class="row">
					<div class="top-bar-left">
						<ul class="menu">
							<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">The Creative <span class="bluetext">Store</span></a></li>
						</ul>
					</div>
					<div class="top-bar-right">
					<p class="nav-text myuser">Welcome Back: <span class="bluetext">
					<?php $current_user = wp_get_current_user(); echo $current_user->user_firstname . '</span></p>';?>
						<?php foundationpress_top_bar_r(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</nav>
	</header>

<?php if (is_page( 'accounts/create' )): ?>
<style>
	#page-full-width {
		padding-top: 20px;
	}
</style>
<?php elseif (is_search()) : ?>
<style>
	body > div.row > div {
		margin-top: 100px;
	}
</style>
<?php endif; ?>







