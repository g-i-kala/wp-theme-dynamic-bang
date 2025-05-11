<?php
/**
 * The template for displaying the front page
 */
?>
<?php get_header(); ?>
<main id="primary" class="site-main">
	<div class="flex flex-col space-y-10">

		<?php get_template_part('template-parts/content/section', 'hero'); ?>
		<?php get_template_part('template-parts/content/section', 'onas'); ?>
		<?php get_template_part('template-parts/content/section', 'team') ?>
		<?php get_template_part('template-parts/content/section', 'oferta'); ?>
		<?php get_template_part('template-parts/content/section', 'trening'); ?>
		<?php get_template_part('template-parts/content/section', 'opinie'); ?>
		<?php get_template_part('template-parts/content/section', 'kontakt'); ?>
		<?php get_template_part('template-parts/components/section', 'brands'); ?>

		
	</div>
		<a href="#page" 
			x-data="{visible:false}" @scroll.window="visible = window.pageYOffset < 100  ? false : true"
			:class="(visible === false) ? 'opacity-0 pointer-events-none' : 'opacity-100 text-black'"
			class="fixed  bottom-8 right-4 sm:right-10 w-10 h-10 bg-white/90 rounded-full flex items-center justify-center shadow-md transition-all duration-500 ease-in-out z-50 transform">
			<i class="fa-duotone fa-solid fa-arrow-up fa-2xl"></i>
		</a>



</main><!-- #main -->


<?php get_footer(); ?>