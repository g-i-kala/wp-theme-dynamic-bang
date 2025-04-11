<?php
/*
Template Name: Archives
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div id="archive" role="main" class="archive-wrapper">

    <header class="archive-header">
            <h1 class="page-title">
                <?php get_template_part('/template-parts/components/title', 'simple', array('title' =>  esc_html(get_the_archive_title()))); ?>
            </h1>
    </header>

    <div class="archive-posts-preview">
        <?php if ((is_category() || is_tag() || is_date()) && have_posts()) : ?>
            <div class="posts-grid grid grid-cols-1 md:grid-cols-3 gap-4 py-4">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content/content', 'preview'); ?>
                <?php endwhile; ?>
            </div>
            
        <?php get_template_part('/template-parts/components/component-pagination'); ?>   

        <?php else : ?>
            <div class="text-base py-2">
                <p><?php esc_html_e('Select month, category or use the search box.', 'fitness_pleasure'); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Search Form -->
    <div class="search-form-archive py-4 border-t-2 border-black">
        <?php get_search_form(array('aria_label' => __('Site search', 'fitness_pleasure'))); ?>
    </div>
    
    <!-- Archive Listing -->
    <div class="archive-content flex flex-row gap-8"> 
        <div class="archive-column">
            <h2 class="archive-header font-bold py-2">Archives by Month:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>
        <div class="archive-column">
            <h2 class="archive-header font-bold py-2">Archives by Subject:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>
        </div>
    </div>

    </div><!-- archive wrapper -->
</main>

<?php
get_footer();