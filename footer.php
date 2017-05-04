<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<div id="footer-container">
			<footer id="footer">
				<div class="row">
				<div class="csfooter">
				
				<!-- <h4>Trinity Mirror Creative</h4> -->
				<a href="http://digitalhub.trinitymirror.com/tmcreative/"><img class="tmc-logo" src="/app/themes/FoundationPress/assets/images/cs2/tmclogo.jpg"></a>

				<span class="contact-details"><span class="bluetext" style="font-size: 1.2rem;">t: </span>
				 <a href="tel:01614931600">0161 493 1600</a> 
				</span>

				 <span class="contact-details" style="margin-right: 20px;"><span class="bluetext" style="font-size: 1.2rem;">e: </span>
					 <a href="mailto:creativestudio@trinitymirror.com">creativestudio@trinitymirror.com</a>
				</span>
				</div>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php do_action( 'foundationpress_after_footer' ); ?>
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
