<!-- Hero and featured posts -->
<div class="featured__wrapper grid grid-col-1 md:grid-cols-2 gap-4 border-t-2 border-black">
    <div class="featured__post w-full">
        <?php get_template_part('template-parts/content/preview-posts','sticky'); ?>
    </div>
    
    <div class="featured__image w-full md:flex justify-center content-center hidden pt-4 position relative">
        <div id="hero "class="hero flex justify-center content-center p-4">
            
            <?php $hero_image = get_theme_mod('hero_image'); ?>
            <?php if ($hero_image) : ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Hero Image', 'kalissima'); ?>" class="hero-image" />
            <?php endif; ?>
            
            <a href="<?= get_site_url() ?>/blog" class="place-self-end  overlay-content absolute inset-0 flex justify-center items-center p-4"
                aria-label="Go to blog posts." >
                <div 
                    class="w-full bg-primary hover:bg-white text-black font-bold border-2 border-black px-4 py-2 uppercase"
                    aria-label="Go to blog posts.">
                    Read more
                </div>
            </a>
        </div>
        
    </div>
</div>