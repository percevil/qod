<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
			<!-- <i class="fas fa-quote-left"></i>
			<i class="fas fa-quote-right"></i>  -->


			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<div class="content-container">

				<?php while ( have_posts() ) : the_post(); ?>

				
					<?php get_template_part( 'template-parts/content' ); ?>
				
				<?php endwhile; ?>

				<?php else : ?>
		</div>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>