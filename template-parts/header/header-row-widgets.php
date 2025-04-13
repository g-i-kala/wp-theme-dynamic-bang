<?php
$show_social_widget = get_theme_mod('show_social_widget', true);
$show_border_class = $show_social_widget ? 'md:border-r-2' : '';
?>

<div class="w-full flex flex-col md:flex-row justify-between items-center bg-white border-2 border-black">
    <div
        class="header-logo flex flex-row min-h-full justify-items-start items-center border-0  <?php echo esc_attr($show_border_class); ?> border-black p-4 ">
        <?php get_template_part('/template-parts/components/widget', 'dynamic'); ?>
    </div>
    <?php get_template_part('/template-parts/components/button', 'newsletter'); ?>
</div>