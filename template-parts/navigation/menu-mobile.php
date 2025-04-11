 <!-- Mobile Full Screen Menu-->
 <div id="full-screen-menu" class="hidden">
    <div class="absolute top-0 left-0 w-screen h-screen bg-black z-50 flex items-center justify-center">
        <button id="mobile-close" class="absolute top-10 right-10 text-2xl text-primary font-bold hover:cursor-pointer">
            X
        </button>
        <nav role="navigation" aria-label="<?php _e('Main Navigation', 'fitness_pleasure'); ?>" class="navbar">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'site-menu',
                'menu_class' => "site-menu h-full flex flex-col text-2xl font-thin text-white text-center *:py-6 *:hover:text-primary *:[&.current-menu-item]:text-primary", // each ul element class
            ) );
            ?>
            </nav>
    </div>
</div>