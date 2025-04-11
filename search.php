<?php
/**
 * The template for displaying search results
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main">
    <div id="search-results" role="main" class="search-wrapper">

        <header class="search-header">
                <h1 class="page-title">
                    <?php get_template_part('/template-parts/components/title', 'simple', array('title' =>  esc_html(get_search_query()))); ?>    
                </h1>
        </header>

        <div class="search-posts-preview">
            <?php if (have_posts()) : ?>
                <div class="posts-grid grid grid-cols-1 md:grid-cols-3 gap-4 py-4">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content/content', 'preview'); ?>
                    <?php endwhile; ?>
                </div>
                
                <?php get_template_part('/template-parts/components/component-pagination'); ?>   

            <?php else : ?>
                <p><?php esc_html_e('No posts found.', 'fitness_pleasure'); ?></p>
            <?php endif; ?>
        </div>
    
    </div><!-- search results wrapper -->
</main>

<?php get_footer(); ?>