<?php
/**
 * Template part for displaying post from category limit 3
 */

$category = isset($args['category']) ? $args['category'] : '' ;
$category_args = array(
    'ignore_sticky_posts' => 1, 
    'posts_per_page' => 1,
    'category_name' => $category
);
$category_query = new WP_Query($category_args);
?>

<?php if ($category_query->have_posts()) : ?>
    <section class="single-preview border-t-2 border-black">
        
    <?php get_template_part('/template-parts/components/title', 'section', array('title' => $category)); ?>
        
        <div class="posts-grid py-4 w-full">
            <?php while ($category_query->have_posts()) : $category_query->the_post(); ?>
                <?php get_template_part('template-parts/content/content-single', 'preview'); ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>