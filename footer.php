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

				<h3>Contact</h3>

				<h4>Trinity Mirror Creative Studio</h4>

				<span class="contact-details"><img src="/app/themes/FoundationPress/assets/images/cs/ico/phone.svg" class="ico">
				 <a href="tel:01614931600">0161 493 1600</a>
				 </span>

				 <span class="contact-details"><img src="/app/themes/FoundationPress/assets/images/cs/ico/email.svg" class="ico">
					 <a href="mailto:creativestudio@trinitymirror.com">creativestudio@trinitymirror.com</a>
					</span>

				<hr>
					<div class="footer-text">
						<p class="footer-copyright">Copyright &copy; Trinity Mirror plc 2017</p>
						<p class="footer-creative">Built by <a class="bluetext">Trinity Mirror Creative Studio <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
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
