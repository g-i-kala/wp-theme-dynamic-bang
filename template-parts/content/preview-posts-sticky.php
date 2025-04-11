<?php
/**
 * Template part for displaying sticky 3 sticky posts
 */

$sticky = get_option('sticky_posts');
rsort($sticky); 
$sticky_args = array(
    'post__in'       => $sticky,
    'posts_per_page' => 1, 
    'ignore_sticky_posts' => 1
);
$sticky_query = new WP_Query($sticky_args);
?>

<!-- Display Sticky Posts -->
<?php if ($sticky_query->have_posts()) : ?>
    <section class="sticky-posts">
        
        <div class="flex flex-row">
            <div class="hashtag w-[3rem] bg-black" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/title_bg_bolt_<?php echo rand(1,6)?>.webp'); background-size: contain; background-repeat: no-repeat;background-position: bottom;"></div>
            <h1 class="section-title w-1/2 text-[3rem] font-bold text-sm/10 uppercase px-4 pt-4"><?php _e('Featured Posts', 'fitness_pleasure'); ?></h1>
        </div>
    
        <div class="sticky__post py-4">
            <?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
                <?php get_template_part('template-parts/content/content', 'preview'); ?>
            <?php endwhile; ?>
        </div>
        
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>