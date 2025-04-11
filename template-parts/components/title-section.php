<!-- Section title  -->
<?php
$title = isset($args['title']) ? $args['title'] : '' ;
?>

<div class="flex flex-col md:flex-row justify-between ">
    <div class="flex flex-row">
        <div class="hashtag w-[3rem] bg-black" style="background-image: url('<?php echo get_random_background_image('title_bg_bolt', 'webp', 6) ?>'); background-size: contain; background-repeat: no-repeat;background-position: bottom;"></div>
        <h1 class="section-title w-1/2 text-[3rem] font-bold text-sm/20 uppercase px-4"><?php echo sprintf(esc_html__('%s', 'fitness_pleasure'), esc_html($title)); ?> </h1>
    </div>
    <a href="<?= get_site_url() ?>/category/<?php echo sprintf(esc_html__('%s', 'fitness_pleasure'), esc_html($title)); ?>" 
        class="place-self-end w-fit bg-black hover:bg-white text-white hover:text-black font-bold border-2 border-black px-3 py-1 uppercase" 
        aria-label="Read more about <?php echo sprintf(esc_html__('%s', 'fitness_pleasure'), esc_html($title)); ?>">
        Read more
    </a>
</div>
