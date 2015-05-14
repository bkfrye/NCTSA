<?php
/**
 * Template Name: Homepage
 *
 * @package nctsa
 */

get_header(); ?>



		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<div class="hero"></div>


<!-- wordpress loop -->
				<section>
					<div class="row">
						<div class="small-12 medium-8 announcements columns">


								<!-- DISPLAY LATEST POST HERE -->


						</div>

						<div class="small-10 medium-4 columns">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</section>
<!-- wordpress loop ends -->

						<section class="about-home">
							<?php
						        $pages = get_pages('include=5');
						        $count = 0;
						        foreach($pages as $page)
						        {
						    ?>
							<div class="row">
								<div class="small-12 small-centered columns" role="main">
						            <section>
							            	<p>
							            		<?php echo apply_filters( 'the_content', $page->post_content ); ?>
							            	</p>
						            </section>
						        </div>
						    </div>
						   <?php } ?>
						</section>

						<section class="officers-home">
						   <?php
						        $pages = get_pages('include=2');
						        $count = 0;
						        foreach($pages as $page)
						        {?>

							<div class="row">
								<div class="small-12 small-centered columns" role="main">
						            <section>
							            	<p>
												<?php echo apply_filters( 'the_content', $page->post_content );?>
											</p>
						            </section>
						        </div>
						    </div>
						    <?php } ?>
						</section>


			</main><!-- #main -->
		</div><!-- #primary -->


<div class="footer-contact">
	<div class="row">
		<div class="small-12 columns">
			<?php get_template_part( 'contact-footer'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>