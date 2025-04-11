 <!-- Pagination -->
  <?php
$max_num_pages = isset($args['max_num_pages']) ? $args['max_num_pages'] : '' ;
  ?>
  
 <div class="pagination-archive flex justify-between my-4 *:border-2 *:px-4 *:py-1 *:bg-white *:text-black *:hover:bg-black *:hover:text-white"
      role="navigation" 
      aria-label="Post navigation">
        
        <?php previous_posts_link( __( 'Newer Posts', 'fitness_pleasure')); ?>
        <?php next_posts_link( __('Older Posts', 'fitesss_pleasure'), $max_num_pages); ?>
    
</div>