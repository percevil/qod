<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<article >
					<p>Quotes on Dev is a project site for the RED Academy Web Developer Professional program. It’s used to experiment with Ajax, WP API, jQuery, and other cool things. 🙂
					This site is heavily inspired by Chris Coyier’s<a href="http://quotesondesign.com/" target="_blank" rel="noopener">Quotes on Design</a></p>
				</article>
				<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
