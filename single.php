<?php
/**
 * The template for displaying all single posts
 */

 get_header(); ?>
 
 <div id="primary" class="content-area">
	 <main id="main" class="site-main" role="main">

	 <?php
	 // Start the loop.
	 while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/post/content', 'post' );


		if ( comments_open() || get_comments_number() ) :
			 comments_template();
		endif;

		get_template_part('/template-parts/post/navigation-post');

	 // End the loop.
	 endwhile;
	 ?>

	 </main><!-- .site-main -->
 </div><!-- .content-area -->

<?php get_footer(); ?>
