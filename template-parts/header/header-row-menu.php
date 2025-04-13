<div class="w-full p-4 flex flex-col md:flex-row bg-transparent">
    
    <div class="w-full md:auto p-4 flex flex-row justify-between items-center flex-grow">
        <!-- Branding -->
        <?php get_template_part('/template-parts/components/site-logo-title', null, array(
            'branding_justify' => 'justify-items-start',
            'logo_size' => '**:w-auto **:h-12',
            'title_size' => 'text-2xl'
            )); ?>
        <!-- Menu -->
        
            <?php
                get_template_part(
                    'template-parts/components/site-menu',
                    null,
                    array('menu_class' => 'flex-col md:flex-row','menu_id' => 'header-navbar')
                );
        ?>
    </div>

    <div class="w-auto p-4 flex flex-row justify-end gap-4 items-center">
        <?php get_template_part('/template-parts/components/button', 'search-icon'); ?>
        <?php get_template_part('/template-parts/components/button', 'newsletter'); ?>
    </div>
    

</div>