<?php
/**
 * The template for displaying the Archives page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

         <section class="browse-archives">
            <header class="entry-header">
         		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
         	</header><!-- .entry-header -->

            <div class="post-archives ">
               <h2>Quote Authors</h2>
               <ul class="element-style">
                  <?php
                     $posts = get_posts( 'posts_per_page=-1' );
                     foreach( $posts as $post ) : setup_postdata( $post );
                  ?>
                     <li class="element-style"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endforeach; wp_reset_postdata(); ?>
               </ul>
            </div>

            <div class=" archive-style">
               <h2>Categories</h2>
               <ul class="element-style">
                  <?php wp_list_categories('title_li='); ?>
               </ul>
            </div>

            <div>
               <h2>Tags</h2>
               <div class="element-style">
                  <?php wp_tag_cloud( array(
                     'smallest' => 1,
                     'largest' => 1,
                     'unit' => 'rem',
                     'format' => 'list'
                  ) ); ?>
               </div>
            </div>
         </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>