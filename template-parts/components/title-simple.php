<!-- Simple title  -->
<?php
$title = isset($args['title']) ? $args['title'] : '' ;
?>

<div class="flex flex-row justify-between ">
    <div class="flex flex-row w-full border-t-2 border-black">
        <div class="hashtag w-[3rem] bg-black" style="background-image: url('<?php echo get_random_background_image('title_bg_bolt', 'webp', 6) ?>'); background-size: contain; background-repeat: no-repeat;background-position: bottom;"></div>
        <h1 class="section-title w-full text-[3rem] font-bold text-sm/20 px-4"><?php echo sprintf(esc_html__('%s', 'fitness_pleasure'), esc_html($title)); ?> </h1>
    </div>
</div>
