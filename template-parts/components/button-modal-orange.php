<?php
$text = isset($args['text']) ? $args['text'] : 'Button';
$class = isset($args['class']) ? $args['class'] : '';
$attr = isset($args['attr']) ? $args['attr'] : '';
?>

<button @click="showModal = true; document.body.classList.add('overflow-hidden')" 
    class="cursor-pointer <?php echo esc_html($class) ?>   py-1 px-4 bg-primary text-white border-2 border-primary rounded-full hover:bg-white hover:text-black transition duration-400 ease-in-out">
    <?php echo esc_html($text) ?> 
</button>