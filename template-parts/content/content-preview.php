<?php
/**
 * The template for displaying content preview
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview flex flex-col h-full border-2 border-black'); ?>>
    <!-- <div class="post-preview-container"> -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail-index w-full aspect-[16/9] overflow-hidden">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
            </div>
        <?php endif; ?>

        <div class="post-info p-4">
    
            <div class="post-meta flex flex-row justify-between items-center text-xs font-montserrat">
                <div class="flex flex-col justify-start py-2">
                    <span><?php echo get_the_date(); ?></span>
                    <span>by <?php echo get_the_author(); ?></span>
                </div>
                <?php get_template_part('/template-parts/components/share-button','post') ?>
            </div>

            <h2 class="post-title text-2xl font-bold py-2"><a href="<?php the_permalink(); ?>" class="hover:text-accent"><?php the_title(); ?></a></h2>
            <a href="<?php the_permalink(); ?>" data-post-title="<?php echo esc_attr(get_the_title()); ?>" class="hover:text-accent" >    
                <p class="post-excerpt py-2 text-ml font-montserrat "><?php echo get_the_excerpt(); ?></p>
            </a>

        </div>
    <!-- </div> -->
</article>