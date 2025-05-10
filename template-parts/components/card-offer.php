<?php
$href = isset($args['href']) ? $args['href'] : '#';
$text = isset($args['text']) ? $args['text'] : 'Card';
$class = isset($args['class']) ? $args['class'] : 'bg-gray';
$icon = isset($args['icon']) ? $args['icon'] : '';
$description = isset($args['description']) ? $args['description'] : '';
$aos = isset($args['aos']) ? $args['aos'] : '';
?>
<a href=<?= esc_attr($href) ?>
    class="<?php echo esc_attr($class) ?> flex flex-col items-center justify-center text-center font-semibold px-10 py-6 rounded-xl shadow-xl hover:scale-105 hover:cursor-pointer transition-transform duration-300 space-y-4"
    <?= esc_attr($aos) ?> >
    <?php if ($icon) : ?>
    <i
        class="fas <?php echo esc_attr($icon); ?> text-4xl"></i>
    <?php endif; ?>
    <p><?php echo esc_html($text); ?></p>
    <p class="font-normal"><?php echo esc_html($description); ?></p>
</a>