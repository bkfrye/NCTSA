<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nctsa
 */
?>

		</div><!-- #content -->
<?php wp_footer(); ?>
		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="footer-bottom">
				<div class="thanks">
					<p>NC TSA is an outstanding organization because of its members and its dedicated advisors. Thank you for all that you do! We look forward to seeing you all at the upcoming TSA Competitions.</p>
				</div>

				
				<nav class="footer-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
				</nav>

	<!-- 			<div class="social-media">
					<i class="fa fa-facebook"></i>
				</div> -->
				
			</div>
		</footer><!-- #colophon -->
		</div><!-- #page -->

<!-- </div> -->



	
</body>
</html>
