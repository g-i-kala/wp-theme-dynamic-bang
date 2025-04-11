<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

 get_header(); ?>

 <div id="primary" class="content-area">
 <div id="content" class="site-content" role="main">

     <header class="page-header">
         <h1 class="page-title"><?php _e( 'Not Found', 'fitness_pleasure' ); ?></h1>
     </header>

     <div class="page-wrapper">
         <div class="page-content">
            <?php get_template_part('/template-parts/components/simple-title', null, array('title' => 'Oops… You Went Too Deep!')); ?>
             <h2 class="text center w-1/2"><?php _e( 'Looks like you’ve pushed past the limits… but not in the way we wanted. 😏 This page is lost, but don’t worry—just like in the gym, we can recover!', 'fitness_pleasure' ); ?></h2>
             
             <div class="search-404 py-8">
                <p><?php _e( 'Fancy a search?', 'fitness_pleasure' ); ?></p>
                <?php get_search_form(); ?>
             </div>
         </div><!-- .page-content -->
     </div><!-- .page-wrapper -->

 </div><!-- #content -->
</div><!-- #primary -->

<?php 
    get_footer();
?>