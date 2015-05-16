<?php
/*
Template Name: Front-Page 
*/
get_header(); ?>



		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<div class="hero show-for-medium-up"></div>


<!-- wordpress loop -->
				<section>
					<div class="row">
						<div class="small-12 large-8 announcements columns">

							<!-- only display latest post -->
							<?php query_posts('showposts=1'); ?>
							<!-- end display latest post -->

							<?php if ( have_posts() ) : ?>
								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php
										get_template_part( 'template-parts/content', get_post_format() );
									?>
								<?php endwhile; ?>


								<a href="<?php echo get_page_link(255); ?>">Older News</a>

								
							<?php else : ?>
								<?php get_template_part( 'template-parts/content', 'none' ); ?>
							<?php endif; ?>
						</div>

						<div class="small-12 large-4 show-for-large-up columns">
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