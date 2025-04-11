<?php
/**
 * The template for displaying all 
 */
get_header();
?>
    <main id="primary" class="site-main flex-grow">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>	
				<?php endif; ?>

            <!-- the sticky row -->
            <?php get_template_part('template-parts/content/content','sticky-posts') ?>
            <!-- normal posts -->
            <?php get_template_part('template-parts/content/content','all-posts') ?>
        
        <?php else : ?>

			<?php get_template_part( 'template-parts/content/content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->
<?php

get_footer();