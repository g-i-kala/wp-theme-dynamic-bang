<!-- Normal Posts -->
<?php
$normal_args = array(
    'posts_per_page' => 6,
    //'category_name'   => 'kite', // Multiple tag slugs
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
);
$normal_query = new WP_Query($normal_args);
?>

<section class="normal-posts">
    <div class="posts-grid grid grid-cols-1 md:grid-cols-3 gap-4 py-4">
        <?php if ($normal_query->have_posts()) : ?>
            <?php while ($normal_query->have_posts()) : $normal_query->the_post(); ?>
                <?php get_template_part('template-parts/content/content', 'preview'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('/template-parts/components/component-pagination', null, array('max_num_pages' => $normal_query->max_num_pages)); ?>   

<?php wp_reset_postdata(); ?>