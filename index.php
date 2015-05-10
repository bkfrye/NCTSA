<?php get_header(); ?>
<div class="row">
	<div class="small-12 columns" role="main">

<?php
        $pages = get_pages('include=5,2,12');

        $count = 0;

        foreach($pages as $page)

        {
    ?>


        <div class="">

            <h2>
            	<?php echo $page->post_title ?>
            </h2>

            <div>
            	<p>
            		<?php echo $page->post_content ?>
            	</p>
            </div>

        </div> <!-- end inner -->
   <?php } ?>

	






	<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php endif;?>



	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>





	<?php do_action( 'foundationpress_after_content' ); ?>

        
	</div>

</div>








<?php get_footer(); ?>
