<div class="share__wrapper relative inline-block" x-data="{ openShare: false, showIcons: false }">
    
    <button id="share-button" 
        aria-label="Open share menu" 
        aria-expanded="false"
        @click="openShare = !openShare"
         class="wrapper w-4 flex flex-col justify-center items-center space-y-[2px] hover:cursor-pointer">
        <span class="inline-block w-1 h-1 bg-black rounded-full"></span>
        <span class="inline-block w-1 h-1 bg-black rounded-full"></span>
        <span class="inline-block w-1 h-1 bg-black rounded-full"></span>
    </button>

    <div class="share-tooltip" 
        x-show="openShare" 
        @click.outside="openShare = false" 
        x-transition>
        <button class="share-button absolute -left-40 w-[10rem] px-6 py-3 bg-white shadow-2xl font-montserrat text-sm shadow-color-black hover:cursor-pointer" @click="showIcons = !showIcons">
        <i class="fa-solid fa-sm fa-share-nodes text-black px-2"></i>
            Share Post
        </button>
    </div>

    <div x-show="showIcons" 
         @click.outside="showIcons = false"
         class="absolute  top-15 -left-20 -translate-x-1/2 mt-2 bg-white p-2 shadow-lg flex gap-2 z-10"
         x-transition>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
            target="_blank" 
            class=" text-white px-3 py-1 rounded-md text-sm">
            <i class="fab fa-lg fa-facebook text-black"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(get_permalink()); ?>" 
           target="_blank" 
           class="bg-white text-white px-3 py-1 rounded-md text-sm">
           <i class="fab fa-lg fa-twitter text-black"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>" 
           target="_blank" 
           class="bg-white text-white px-3 py-1 rounded-md text-sm">
           <i class="fab fa-lg fa-instagram text-black"></i>
        </a>
        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" 
           target="_blank" 
           class="bg-white text-white px-3 py-1 rounded-md text-sm">
           <i class="fab fa-lg fa-whatsapp text-black"></i>
        </a>
    </div>

</div>
