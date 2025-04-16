<!-- Logo & Title -->
<?php
$branding_justify = isset($args['branding_justify']) ? esc_attr($args['branding_justify']) : 'justify-items-start';
$logo_size = isset($args['logo_size']) ? esc_attr($args['logo_size']) : '**:w-auto **:h-12';
$title_size = isset($args['title_size']) ? esc_attr($args['title_size']) : 'text-2xl';
?>

<div
    class="site-logo flex flex-row <?php echo $branding_justify; ?> items-center">
    <?php if (has_custom_logo()) : ?>
    <div id="site-logo"
        class="flex object-contain <?php echo $logo_size; ?> ">
        <a href="<?php echo esc_url(home_url('/')); ?>"
            rel="home"
            aria-label="<?php esc_attr_e('Site Logo', 'dynamic_bang'); ?>">
            <?php the_custom_logo(); ?>
        </a>
    </div>
    <?php  endif;  ?>
</div>