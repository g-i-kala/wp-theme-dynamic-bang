<?php
$href = isset($args['href']) ? $args['href'] : '#';
$name = isset($args['name']) ? $args['name'] : 'Name';
$description = isset($args['description']) ? $args['description'] : 'Description';
$photo = isset($args['photo']) ? $args['photo'] : '';
?>
<div class="group relative flex flex-col items-center justify-center text-center font-semibold px-10 py-6 rounded-xl shadow-xl hover:scale-105 hover:cursor-pointer transition-transform duration-300 space-y-4 overflow-hidden">
    <img src="<?= esc_attr($photo) ?>" alt="<?= esc_attr($name) ?>" class="w-32 h-32 rounded-xl object-cover">
    <h3 class="text-lg"><?= esc_html($name); ?></h3>
    <div class="absolute inset-0 flex items-center justify-center bg-cream bg-opacity-75 text-primary text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <p class="text-sm px-4"><?= esc_html($description); ?></p>
    </div>
</div>