<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="row">
	<div class="small-12 large-12 columns search-query" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<h2 class="title title--large coll-text">
			<span><?php _e( 'Search Results', 'foundationpress' ); ?></span>
		</h2>
		<!-- <div class="balls"><span class="coll-b1"></span><span class="coll-b2"></span></div> -->
		<h4>Results for: <?php echo get_search_query(); ?></h4>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif;?>

	<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php
	if ( function_exists( 'foundationpress_pagination' ) ) :
		foundationpress_pagination();
	elseif ( is_paged() ) :
	?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php endif; ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer();
