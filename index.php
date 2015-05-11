<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nctsa
 */

get_header(); ?>



				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">


<!-- wordpress loop -->
				<div class="row">
					<div class="small-12 medium-8 announcements columns">
						<?php if ( have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php
									get_template_part( 'template-parts/content', get_post_format() );
								?>

							<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>

					</div>

					<div class="small-10 medium-4 columns">
						<?php get_sidebar(); ?>
					</div>




				</div>
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

						        {
						    ?>


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

		</div>
	</div>




<?php get_footer(); ?>
<div class="footer-contact">
	<div class="row">
		<div class="small-12 columns">
			<?php get_template_part( 'contact'); ?>
		</div>
	</div>
</div>
