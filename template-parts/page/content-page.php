<?php
/**
 * The template for displaying the page structure
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <!-- Wrapper div for title and content -->
    <div class="page-wrapper">
        
        <!-- Page Title -->
        <header class="page-title-wrapper">
            <?php get_template_part('/template-parts/components/title', 'page', array('title' =>  esc_html(get_the_title()))); ?>    
        </header>

        <!-- Page Content -->
        <div class="page-content mb-4 mt-4">
            <?php the_content(); ?>
        </div>
        
    </div> <!-- End of page-wrapper -->

</article>