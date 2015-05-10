<?php
/*
Template Name: What-is-TSA
*/
 ?>

 	<section class="what-is-tsa">
		<div class="row">
			<div class="small-12 large-12 columns" role="main">



		<?php do_action( 'foundationpress_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
					
				</article>
			<?php endwhile;?>

			</div>
		</div>
	</section>
