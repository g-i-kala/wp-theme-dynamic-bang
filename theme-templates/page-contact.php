<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<main id="primary" class="contact__template__wrapper">
        
        <div class="page__wrapper">           
            <header class="page__title">
                <?php get_template_part('/template-parts/components/title', 'page', array('title' =>  esc_html(get_the_title()))); ?>    
            </header>

            <div class="page__contact mx-auto w-auto lg:w-2xl md:w-xl my-4">
                <div class="contact__form__wrapper flex flex-col justify-center bg-black p-8">
        
                        <?php
                        $wsform_id = get_theme_mod('contactform_wsform_id');
                        if (!empty($wsform_id)) {
                            echo do_shortcode('[ws_form id="' . esc_attr($wsform_id) . '"]');
                        } else {
                            echo '<p>' . __('Please set a WSForm ID in the Customizer.', 'kalissima') . '</p>';
                        }
                        ?>
                    
                    
                </div>
            </div>
        </div> 

</main><!-- #main -->
<?php

get_footer();