<?php
/**
 * The template for displaying the front page
 */
?>
<?php get_header(); ?>
	<main id="primary" class="site-main">
		<div class="flex flex-col">
			<?php if ( have_posts() ) : ?>
				<h1 class="w-full text-[6rem] font-bold text-sm/20"> <?php echo get_theme_mod('front_page_title') ?></h1>
				<h2 class="w-full text-[2rem] font-thin text-sm/10 pt-2 lg:pt-4 "> <?php echo get_theme_mod('front_page_subtitle') ?></h2>
				

			
				<?php get_template_part('template-parts/content/content-hero-featured'); ?>
				<?php get_template_part('template-parts/content/preview-posts-3green','category', array('category' => 'workout')); ?>
				<?php get_template_part('template-parts/content/preview-posts-single','category', array('category' => 'nutrition')); ?>
				<?php get_template_part('template-parts/content/preview-posts-2overlay','category', array('category' => 'motivation')); ?>
				<?php get_template_part('template-parts/components/section','brands'); ?>
			
			<?php else :
				get_template_part( 'template-parts/content/content', 'none' );
			endif; ?>
		</div>

	</main><!-- #main -->

<?php get_footer(); ?>