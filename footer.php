<?php
/**
 * The template for displaying the footer
 */
?>
     </div>
  <!--  </div>Wrapper ends ?? -->
        <footer id="colophon" class="site-footer content__container flex flex-col">
            <div class="footer__top flex flex-col md:flex-row gap-2 p-8 bg-black text-white">
                <div class="footer__branding w-full md:w-1/2 flex flex-col justify-center content-center gap-8">
                    <!-- Brangind -->
                    <?php get_template_part('/template-parts/components/site-logo-title', null, array(
                        'branding_justify' => 'justify-center ',
                        'logo_size' => '**:w-auto **:h-14',
                        'title_size' => 'text-4xl mr-0'
                        )); ?>
                    
                    <div id="newsletter" class="footer__newsletter w-full md:w-1/2 mx-auto lg:ml-18">
                        <h2 class="text-sm font-thin">Treat Yourself! Subscribe! </h2>
                        <?php
                            $newsletter_wsform_id = get_theme_mod('newsletter_wsform_id');
                            if (!empty($newsletter_wsform_id)) {
                                echo do_shortcode('[ws_form id="' . esc_attr($newsletter_wsform_id) . '"]');
                            } else {
                                echo '<p>' . __('Please set your newsletter form ID in the Customizer.', 'kalissima') . '</p>';
                            }
                        ?>
                    </div>
                   
                </div>
                <div class="footer__menu w-1/4  hidden lg:block mx-auto">
                     <!-- Menu -->
                    <?php 
                        get_template_part('template-parts/components/site-menu', null, 
                        array('menu_class' => 'flex-col *:py-4', 'menu_id' => 'footer-navbar')); 
                        ?>        
                </div>
                <div id="contact" class="footer__contact w-full md:w-1/2 lg:1/4 flex justify-center content-center">
                    
                        <div class="w-full md:w-1/2">
                            <?php
                            $wsform_id = get_theme_mod('contactform_wsform_id');
                            if (!empty($wsform_id)) {
                                echo do_shortcode('[ws_form id="' . esc_attr($wsform_id) . '"]');
                            } else {
                                echo '<p>' . __('Please set a contact WSForm ID in the Customizer.', 'kalissima') . '</p>';
                            }
                            ?>
                        </div>
          
                </div>
            </div>
            
            <?php get_template_part('template-parts/footer/footer','bottom'); ?>
            
        </footer>
    </div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
