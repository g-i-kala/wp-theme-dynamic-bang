<?php
$href = isset($args['href']) ? $args['href'] : '#';
$title = isset($args['title']) ? $args['title'] : 'Card';
$class = isset($args['class']) ? $args['class'] : 'bg-gray';
$icon = isset($args['icon']) ? $args['icon'] : '';
$description = isset($args['description']) ? $args['description'] : '';
$aos = isset($args['aos']) ? $args['aos'] : '';
$modal_content = isset($args['modal_content']) ? $args['modal_content'] : '';
?>
<div x-data="{ showModal: false }">
  
  <div class="<?php echo esc_attr($class) ?> flex flex-col items-center justify-between h-full text-center font-semibold px-10 py-6 rounded-xl shadow-xl hover:scale-105 hover:cursor-pointer transition-transform duration-300 space-y-4"
  <?= esc_attr($aos) ?> > 
    <?php if ($icon) : ?>
    <i class="fas <?php echo esc_attr($icon); ?> text-4xl"></i>
    <?php endif; ?>
    <p><?php echo esc_html($title); ?></p>
    <p class="font-normal"><?php echo esc_html($description); ?></p>
    <div class="py-4 text-center">
      <?php get_template_part('template-parts/components/button-modal', 'orange',
          array(
            'text' => 'Dowiedz się więcej!',
            'class' => 'text-md py-1 px-4',
            'onclick' => 'showModal = true; document.body.classList.add(\'overflow-hidden\')',
          )); ?>
    </div>
  </div>
  
  <div x-show="showModal"
       x-transition
       class="fixed inset-0 flex items-center justify-center z-50">
    <!-- Gray Background -->
    <div class='fixed inset-0 bg-lightgray opacity-80' @click="showModal = false; document.body.classList.remove('overflow-hidden')"></div>
    
    <!-- Modal Content -->
    <div class="relative bg-white p-2 md:p-6 rounded-lg shadow-xl max-w-2xl w-full overflow-y-auto max-h-screen"
         @click.outside="showModal = false; document.body.classList.remove('overflow-hidden')">
      <button @click="showModal = false; document.body.classList.remove('overflow-hidden')"
              class="absolute top-2 right-2 md:right-4 md:top-4 hover:bg-bg-main text-sm font-semibold border-0 hover:cursor-pointer">
        x
      </button>
      
      <div class="mb-2 text-sm">
        <?php get_template_part('template-parts/content/' . $modal_content) ?>
      </div>
    </div>
  </div>
</div>