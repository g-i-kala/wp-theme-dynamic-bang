<?php
/**
 * The template for displaying content of a single post
 */
?>

<article id="post-<?php the_ID(); ?>" class="post-single flex flex-col center-center">
    <div class="post-wrapper flex flex-col border-2 border-black py-2 px-2 md:py-10 md:px-10 lg:py-16 lg:px-16 my-4">

        <!-- Post Meta (Author, Date) -->
        <div class="post-meta flex flex-row justify-between">
            <div class="flex flex-col">
                <span class="post-date"><?php echo get_the_date(); ?></span>
                <span class="post-author"><?php _e('by', 'fitness_pleasure'); ?> <?php the_author_posts_link(); ?></span>
            </div>
            <?php get_template_part('/template-parts/components/share-button','post') ?>
        </div>

        <!-- Post Title -->
        <div class="entry-header">
            <?php get_template_part('/template-parts/components/title', 'post', array('title' => esc_html(get_the_title()))) ?>
        </div>

        <!-- Featured Image -->
        <div class="post-thumbnail-crop">
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail-crop">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>
        </div>

        <!-- Post Content -->
        <div class="entry-content py-8">
            <?php the_content(); ?>
        </div>

        <div class="post__social__bar flex justify-between border-t-1 border-b-1 border-gray-600 py-2">
            <div class="social__widget">
                <?php get_template_part('/template-parts/components/widget','dynamic'); ?>
            </div>
            <div class="category__name">
                <?php the_category(', '); ?>
            </div>

        </div>

    </div>       
</article>
