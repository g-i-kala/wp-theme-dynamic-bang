<!-- Site header -->

<header x-data="{atTop:true}" @scroll.window="atTop = window.pageYOffset > 50 ? false : true" 
    :class="(atTop === false) ? 'bg-white text-black shadow-lg opacity-0 pointer-events-none' : 'bg-transparent text-white'"
    class="sticky transition-all duration-500 ease-in-out transform top-0 z-50 ">
    <div 
        class="content__container tracking-wide">

        <?php get_template_part('/template-parts/header/header', 'row-menu'); ?>
    </div>
</header>