<!-- Section title  -->
<?php
$title = isset($args['title']) ? $args['title'] : '' ;
?>

<div class="flex flex-row justify-center">
    <h1 class="section-title w-full text-[2rem] text-center font-bold uppercase px-4 py-4"><?php echo sprintf(esc_html__('%s', 'fitness_pleasure'), esc_html($title)); ?> </h1>
</div>
