<div class="search__icon__wrapper relative inline-block" x-data="{ openShare: false, showIcons: false }">
    
    <button id="search-icon-button" 
        aria-label="Open share menu" 
        aria-expanded="false"
        @click="openShare = !openShare"
         class="wrapper w-4 flex flex-col justify-center items-center space-y-[2px] hover:cursor-pointer">
         <i class="fas fa-search fa-lg text-black"></i>
    </button>

    <div class="search-tooltip" 
        x-show="openShare" 
        @click.outside="openShare = false" 
        x-transition>
        <button class="share-button absolute -left-40 w-[10rem] px-6 py-3 bg-white shadow-2xl font-montserrat text-sm shadow-color-black hover:cursor-pointer" @click="showIcons = !showIcons">
            <div class="search-form-button py-4 border-black">
                <?php get_search_form(array('aria_label' => __('Site search', 'dynamic_bang'))); ?>
            </div>
        </button>
    </div>
</div>
