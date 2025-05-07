<?php
$title = isset($args['title']) ? $args['title'] : '#';
$text = isset($args['text']) ? $args['text'] : 'Card';
$icon = isset($args['icon']) ? $args['icon'] : '';
$aos = isset($args['aos']) ? $args['aos'] : '';
?>

<div class="<?php echo esc_attr($class) ?> 
      flex flex-row md:flex-col items-center justify-start text-center font-semibold px-10 py-6 rounded-xl shadow-lg space-y-4 gap-2"
      <?= esc_attr($aos) ?> >
    
    <div class="flex gap-4">
      <h3 class="text-2xl font-semibold"><?= esc_attr($title) ?></h3>
      <?php if ($icon) : ?>
      <p class="text-2xl"> <?php echo esc_attr($icon); ?></p>
      <?php endif; ?>
    </div>

    <p class="text-lg"><?php echo esc_html($text); ?></p>
</div>