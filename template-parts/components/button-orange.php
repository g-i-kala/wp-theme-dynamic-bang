<?php
$href = isset($args['href']) ? $args['href'] : '#';
$text = isset($args['text']) ? $args['text'] : 'Button';
$class = isset($args['class']) ? $args['class'] : '';
?>

<a href=<?php echo esc_attr($href) ?> 
    class="inline-block cursor-pointer <?php echo esc_html($class) ?>   py-1 px-4 bg-primary text-white border-2 border-primary rounded-full hover:bg-white hover:text-black transition duration-400 ease-in-out">
    <?php echo esc_html($text) ?> 
</a>