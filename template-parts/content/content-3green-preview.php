<?php
/**
 * The template for displaying content preview
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview flex flex-col h-full'); ?>>
    <!-- <div class="post-preview-container"> -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail-index w-full aspect-[16/9] overflow-hidden">
                <?php the_post_thumbnail('large',['class' => 'w-full h-full object-cover']); ?>
            </div>
        <?php endif; ?>
        <div class="post-info bg-primary h-full p-4">
            <h2 class="post-title text-2xl"><a href="<?php the_permalink(); ?>" class="hover:text-white"><?php the_title(); ?></a></h2>
        </div>
    <!-- </div> -->
</article>