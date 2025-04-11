<div class="flex flex-col md:flex-row md:space-between md:items-center  border-t-2 border-black">
    
    <div class="flex flex-row flex-grow">
        <div class="hashtag w-[3rem] bg-black">
        </div>
        
        <div class="w-full h-32 flex flex-col justify-center" style="background-image: url('<?php echo get_random_background_image('heading_line', 'webp', 4) ?>') ; background-size: contain; background-repeat: no-repeat;">
            <h1 class="page-title text-[4rem] md:text-[5rem] lg:text-[5rem] font-bold text-sm/15 md:text-sm/15 lg:text-sm/15 uppercase px-4"><?php _e('Blog Posts', 'fitness_pleasure'); ?></h1>
        </div>
    </div>
    
    <!-- <div class="inline-flex justify-end w-full md:w-1/2"> -->
        <div class="flex justify-end text-[1.5rem] font-thin text-sm/10 pt-2 md:w-1/2 lg:pt-4"> 
            <div class="search-form-archive py-4">
                <?php get_search_form(array('aria_label' => __('Site search', 'fitness_pleasure'))); ?>
            </div>
        </div>
    <!-- </div> -->

</div>