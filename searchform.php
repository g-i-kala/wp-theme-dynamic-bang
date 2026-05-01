<!-- Custom search form -->
<form role="search"
  	aria-label="<?php _e('Search the site', 'dynamic-bang'); ?>"
  	method="get" class="search-form"
  	action="<?php echo esc_url(home_url('/')); ?>">

	<label for="search-field" class="screen-reader-text">
  		<?php echo _x('Search for:', 'label', 'dynamic-bang'); ?>
 	</label>
 	<input type="search" id="search-field" name="s"
 		class="search-field rounded-xl px-2 py-1 focus:outline-none focus:ring focus:ring-primary"
 		placeholder="<?php echo esc_attr_x('Lets sweat..', 'placeholder', 'dynamic-bang'); ?>"
 		value="<?php echo get_search_query(); ?>"
 		aria-label="<?php echo esc_attr_x('Enter search term', 'aria-label for search input', 'dynamic-bang'); ?>"
 		aria-describedby="search-help" required />

	<div id="search-help" class="screen-reader-text">
 		<?php echo _x('Type your search term and press enter to search.', 'screen reader help text', 'dynamic-bang'); ?>
	</div>


	<input type="submit"
 		class="search-submit mt-2 rounded-xl border-2 px-4 py-1 bg-black text-white hover:bg-white hover:text-black cursor-pointer"
 		value="<?php echo esc_attr_x('Search', 'submit button', 'dynamic-bang'); ?>"
 		aria-label="<?php echo esc_attr_x('Submit search', 'aria-label for search button', 'dynamic-bang'); ?>" />

</form>