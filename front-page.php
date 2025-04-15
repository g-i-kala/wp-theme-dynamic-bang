<?php
/**
 * The template for displaying the front page
 */
?>
<?php get_header(); ?>
<main id="primary" class="site-main">
	<div class="flex flex-col">
		<?php if (have_posts()) : ?>
		<h1 class="w-full text-[6rem] font-bold text-sm/20">
			<?php echo get_theme_mod('front_page_title') ?>
		</h1>
		<h2 class="w-full text-[2rem] font-thin text-sm/10 pt-2 lg:pt-4 ">
			<?php echo get_theme_mod('front_page_subtitle') ?>
		</h2>



		<?php get_template_part('template-parts/content/section', 'hero'); ?>
		<?php get_template_part('template-parts/content/section', 'onas'); ?>
		<?php get_template_part('template-parts/content/section', 'oferta'); ?>
		<?php get_template_part('template-parts/content/section', 'trening'); ?>
		<?php get_template_part('template-parts/content/section', 'opinie'); ?>
		<?php get_template_part('template-parts/content/section', 'kontakt'); ?>
		<?php get_template_part('template-parts/components/section', 'brands'); ?>

		<?php else :
		    get_template_part('template-parts/content/content', 'none');
		endif; ?>
	</div>
		<a href="#page" 
			x-data="{visible:false}" @scroll.window="visible = window.pageYOffset < 100  ? false : true"
			:class="(visible === false) ? 'opacity-0 pointer-events-none' : 'opacity-100 text-black'"
			class="fixed bottom-10 right-10 transition-all duration-500 ease-in-out transform">
			<i class="fa-duotone fa-solid fa-arrow-up fa-2xl"></i>
		</a href="#">



</main><!-- #main -->


<?php get_footer(); ?>