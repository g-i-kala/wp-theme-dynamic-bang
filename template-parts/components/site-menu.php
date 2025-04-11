<!-- Site Menu Component -->
<?php
$menu_class = esc_attr($args['menu_class']); 
$menu_id = isset($args['menu_id']) ? esc_attr($args['menu_id']) : 'navbar';
?>

<!-- Menu -->
<div x-data="{ mobileMenuIsOpen: false }">
    
    <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" 
            id="mobile-menu" 
            class="mobile-menu block lg:hidden cursor-pointer bg-transparent border-0 p-2.5" 
            x-bind:aria-expanded="mobileMenuIsOpen" 
            aria-label="<?php _e('Toggle navigation','fitness_pleasure') ?>" 
            aria-controls="mobileMenu"
            data-menu-button>
        <span class="bar block w-8 h-1 my-1.5 bg-white 200rounded-lg mx-auto transition-all duration-300"></span>
        <span class="bar block w-8 h-1 my-1.5 bg-white rounded-lg mx-auto transition-all duration-300"></span>
        <span class="bar block w-8 h-1 my-1.5 bg-white rounded-lg mx-auto transition-all duration-300"></span>
    </button>
    
     <!-- Mobile Full Screen Menu-->
    <div x-cloak 
        x-show="mobileMenuIsOpen" 
        id="full-screen-menu"   
        role="navigation" 
        x-show="mobileMenuIsOpen" 
        x-transition
        aria-label="<?php _e('Main Navigation', 'fitness_pleasure'); ?>">
        
        <div class="fixed top-0 left-0 w-screen h-screen bg-black z-50 flex items-center justify-center">
            <button @click="mobileMenuIsOpen=!mobileMenuIsOpen" 
                id="mobile-close" 
                aria-label="<?php _e('Close navigation', 'fitness_pleasure'); ?>" 
                class="absolute top-10 right-10 text-2xl text-primary font-bold hover:cursor-pointer">
                X
            </button>
            <nav role="navigation" 
            @click.away="mobileMenuIsOpen = false" 
            aria-label="<?php _e('Main Navigation', 'fitness_pleasure'); ?>" 
            class="navbar">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'site-menu',
                    'menu_class' => "site-menu h-full flex flex-col text-2xl font-thin text-white text-center *:py-6 *:hover:text-primary *:[&.current-menu-item]:text-primary", // each ul element class
                ) );
                ?>
            </nav>
        </div>
    </div>


    <div id="<? $menu_id ?>" class="site-nav header-menu-container hidden lg:block">
        <nav role="navigation" aria-label="<?php _e('Main Navigation', 'fitness_pleasure'); ?>" class="navbar ">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'site-menu',
                'menu_class' => "site__menu flex $menu_class font-thin text-white *:px-2 *:hover:text-primary *:[&.current-menu-item]:text-primary", // each ul element class
            ) );
            ?>
            </nav>
    </div>
</div>

