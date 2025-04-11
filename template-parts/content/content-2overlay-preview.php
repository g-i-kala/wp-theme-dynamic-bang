<?php
/**
 * The template for displaying content preview
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview flex flex-col h-full parent relative'); ?>>
    <!-- <div class="post-preview-container"> -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail-index w-full aspect-[16/9] overflow-hidden">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
            </div>
        <?php endif; ?>
        <div class="post-info overlay-content absolute inset-0 flex flex-col justify-between items-flex-start p-4 text-white">   
            <div class="post-meta text-xs font-montserrat">
                <span><?php echo get_the_date(); ?></span>
            </div>
            <h2 class="post-title text-2xl font-bold"><a href="<?php the_permalink(); ?>" class="hover:text-accent"><?php the_title(); ?></a></h2>
        </div>
    <!-- </div> -->
</article>