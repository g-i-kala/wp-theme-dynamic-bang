<!-- Page title  -->
<div class="flex flex-row border-t-2 border-black">
    <div class="hashtag w-[3rem] bg-black">
    </div>
    <div class="w-full h-32 flex flex-col justify-center" style="background-image: url('<?php echo get_random_background_image('heading_line', 'webp', 4) ?>'); background-size: contain; background-repeat: no-repeat;">
        <h1 class="page-title text-[4rem] md:text-[4rem] font-bold text-sm/15 md:text-sm/20 uppercase px-4"><?php echo sprintf(esc_html__('%s', 'fitness_pleasure'), get_the_title()); ?></h1>       
    </div>
</div>
