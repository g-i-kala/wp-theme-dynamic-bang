<!-- Site Menu Component -->
<?php
$menu_class = esc_attr($args['menu_class']);
$menu_id = isset($args['menu_id']) ? esc_attr($args['menu_id']) : 'navbar';
?>

<!-- Menu -->
<div x-data="{ mobileMenuIsOpen: false }">

    <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" id="mobile-menu"
        class="mobile-menu block lg:hidden cursor-pointer bg-transparent border-0 p-2.5"
        x-bind:aria-expanded="mobileMenuIsOpen"
        aria-label="<?php _e('Toggle navigation', 'dynamic_bang') ?>"
        aria-controls="mobileMenu" data-menu-button>
        <span class="bar block w-8 h-1 my-1.5 bg-black 200rounded-lg mx-auto transition-all duration-300"></span>
        <span class="bar block w-8 h-1 my-1.5 bg-black rounded-lg mx-auto transition-all duration-300"></span>
        <span class="bar block w-8 h-1 my-1.5 bg-black rounded-lg mx-auto transition-all duration-300"></span>
    </button>

    <!-- Mobile Full Screen Menu-->
    <div x-cloak x-show="mobileMenuIsOpen" id="full-screen-menu" role="navigation" x-show="mobileMenuIsOpen"
        x-transition:enter="transition-opacity duration-300 ease-out"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity duration-300 ease-in"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        aria-label="<?php _e('Main Navigation', 'dynamic_bang'); ?>">

        <div class="fixed top-0 left-0 w-full h-screen bg-white z-100 flex items-center justify-center">
            <button @click="mobileMenuIsOpen=!mobileMenuIsOpen" id="mobile-close"
                aria-label="<?php _e('Close navigation', 'dynamic_bang'); ?>"
                class="absolute top-10 right-10 text-2xl text-primary font-bold pointer-events-none">
                X
            </button>
            <nav role="navigation" @click.away="mobileMenuIsOpen = false"
                aria-label="<?php _e('Main Navigation', 'dynamic_bang'); ?>"
                class="navbar">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'site-menu',
                    'menu_class' => "site-menu h-full flex flex-col text-2xl font-bold text-black text-center *:py-6 *:hover:text-mint *:[&.current-menu-item]:text-black", // each ul element class
                ));
?>
            </nav>
        </div>
    </div>


    <div id="<?php $menu_id ?>"
        class="site-nav header-menu-container hidden lg:block">
        <nav role="navigation"
            aria-label="<?php _e('Main Navigation', 'dynamic_bang'); ?>"
            class="navbar ">
            <?php
            wp_nav_menu(array(
'theme_location' => 'site-menu',
'menu_class' => "site__menu flex $menu_class font-bold text-center *:px-2 *:hover:text-mint *:[&.current-menu-item]:text-black", // each ul element class
));
?>
        </nav>
    </div>
</div>