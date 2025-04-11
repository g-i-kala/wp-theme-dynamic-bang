<?php
/**
 * Template part for displaying post from category limit 3
 */

$category = isset($args['category']) ? $args['category'] : '' ;
$category_args = array(
    'ignore_sticky_posts' => 1, 
    'posts_per_page' => 3,
    'category_name' => $category
);
$category_query = new WP_Query($category_args);
?>

<?php if ($category_query->have_posts()) : ?>
    <section class="3green-preview-posts border-t-2 border-black">
        
        <?php get_template_part('/template-parts/components/title', 'section', array('title' => $category)); ?>
        
        <div class="posts-grid grid grid-cols-1 md:grid-cols-3 gap-4 py-4">
            <?php while ($category_query->have_posts()) : $category_query->the_post(); ?>
                <?php get_template_part('template-parts/content/content-3green', 'preview'); ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>