<!-- Custom search form -->
<form role="search" aria-label="<?php _e('Search the site','fitness_pleasure') ?>" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-field" class="screen-reader-text">
        <?php echo _x('Search for:', 'label'); ?>
    </label>
    <input type="search" 
        id="search-field" 
        name="s" 
        class="search-field focus:outline-none focus:ring focus:ring-primary" 
        placeholder="<?php echo esc_attr_x('Lets sweat..', 'fitness_pleasure'); ?>" 
        value="<?php echo get_search_query(); ?>" 
        aria-label="<?php echo esc_attr_x('Enter search term', 'aria-label for search input field'); ?>" 
        aria-describedby="search-help" 
        required/>

        <div id="search-help" class="screen-reader-text">
            <?php echo _x('Type your search term and press enter to search.', 'screen reader help text'); ?>
        </div>    


    <input type="submit" 
        class="search-submit border-2 px-4 py-1 bg-black text-white hover:bg-white hover:text-black cursor-pointer" 
        value="<?php echo esc_attr_x('Search', 'submit button'); ?>"
        aria-label="<?php echo esc_attr_x('Submit search', 'aria-label for search button'); ?>" />
</form>
