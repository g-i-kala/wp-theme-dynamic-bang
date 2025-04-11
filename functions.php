<?php

/**
 * fitness_pleasure's functions and definitions
 *
 * @package fitness_pleasure
 * @since fitness_pleasure 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (! isset($content_width)) {
    $content_width = 900; /* pixels */
}


if (! function_exists('fitness_pleasure_setup')) :

    /**
     * Sets up theme defaults and registers support for various
     * WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme
     * hook, which runs before the init hook. The init hook is too late
     * for some features, such as indicating support post thumbnails.
     */
    function fitness_pleasure_setup()
    {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain('fitness_pleasure', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Add title tag to <head>.
         */
        add_theme_support('title-tag');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus(array(
            'site-menu'   => __('Site Menu', 'fitness_pleasure'),
        ));

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ));

        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'search-form',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        add_theme_support('custom-logo', array(
            'height'               => 0,
            'width'                => 0,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true,
            ));

        add_theme_support('automatic-feed-links');

    }
endif; // fitness_pleasure_setup
add_action('after_setup_theme', 'fitness_pleasure_setup');


// Enqueues scripts and styles.

function fitness_pleasure_scripts()
{
    // Add Tailwind
    wp_enqueue_style(
        'tailwind',
        get_template_directory_uri() . '/assets/css/output.css',
        array(),
        true
    );

    // Enqueue Style.css
    wp_enqueue_style(
        'fitness_pleasure',
        get_template_directory_uri() . '/style.css'
    );

    // Font Awsome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css',
        array(),
        null // Optional: no version number
    );

    wp_enqueue_style('wp-block-library');
    wp_enqueue_style('wp-block-library-theme');

    //jQuery enqueue
    //wp_enqueue_script('jquery');

    //Load Alpine.js
    wp_enqueue_script(
        'alpine-js',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        array(),
        null,
        true
    ); // Load in the footer

    // wp_enqueue_script('mobile-menu-js',
    //     get_template_directory_uri() . '/assets/js/mobile-menu.js',
    //     array('jquery'),
    //     null,
    //     true);

    wp_enqueue_script(
        'mobile-menu-focus-trap-js',
        get_template_directory_uri() . '/assets/js/mobile-menu-focus-trap.js',
        array(),
        1.0,
        true
    );

    // Aria read more sqript enque

    wp_enqueue_script(
        'aria-enhancements',
        get_template_directory_uri() . '/assets/js/aria-enhancements.js',
        array(),
        null,
        true // Load in the footer
    );

}
add_action('wp_enqueue_scripts', 'fitness_pleasure_scripts');

// After Setup
// Load the textdomain

function fitness_pleasure_load_textdomain()
{
    load_theme_textdomain('fitness_pleasure', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'fitness_pleasure_load_textdomain');

// Supported post formats when custom post types => add here

function themename_post_formats_setup()
{
    add_theme_support('post-formats', array( 'aside', 'gallery', 'image' ));
}
add_action('after_setup_theme', 'themename_post_formats_setup');


// Links all Post Thumbnails on your website to the Post Permalink

add_filter('post_thumbnail_html', 'my_post_image_html', 10, 3);
function my_post_image_html($html, $post_id, $post_image_id)
{
    $html = '<a href="' . get_permalink($post_id) . '">' . $html . '</a>';
    return $html;
}


// Generate all sub sizes using webp

function wporg_image_editor_output_format($formats)
{
    $formats['image/jpg'] = 'image/webp';

    return $formats;
}
add_filter('image_editor_output_format', 'wporg_image_editor_output_format');


// Sidebar registartion

function my_register_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __('Social Icons Area'),
            'description'   => __('Social Icons Area.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'my_register_sidebars');

// Limit search results to 9

function pd_search_posts_per_page($query)
{
    if ($query->is_search) {
        $query->set('posts_per_page', '6');
    }
    return $query;
}
add_filter('pre_get_posts', 'pd_search_posts_per_page');

// Customizer Customization Section

// Add custom brands images on front page
function fitness_pleasure_customize_brands($wp_customize)
{

    $wp_customize->add_section('hero_image_section', array(
        'title' => __('Hero Image', 'fitness_pleasure'),
        'priority' => 30,
    ));

    // Add a setting for the hero image
    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add the image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Upload Hero Image', 'fitness_pleasure'),
        'section' => 'hero_image_section',
        'settings' => 'hero_image',
    )));

    // Add a section for the brands images
    $wp_customize->add_section('brands_images_section', array(
        'title' => __('Brands Images', 'fitness_pleasure'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('brand_image_1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_image_1_control', array(
        'label' => __('Upload 1st Image', 'fitness_pleasure'),
        'section' => 'brands_images_section',
        'settings' => 'brand_image_1',
    )));

    $wp_customize->add_setting('brand_url_1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('brand_url_1', array(
        'label' => __('URL for Brand 1', 'fitness_pleasure'),
        'section' => 'brands_images_section', // Replace with your section
        'type' => 'url',
    ));

    $wp_customize->add_setting('brand_image_2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_image_2_control', array(
       'label' => __('Upload 2n Image', 'fitness_pleasure'),
       'section' => 'brands_images_section',
       'settings' => 'brand_image_2',
    )));

    $wp_customize->add_setting('brand_url_2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('brand_url_2', array(
        'label' => __('URL for Brand 2', 'fitness_pleasure'),
        'section' => 'brands_images_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('brand_image_3', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_image_3_control', array(
       'label' => __('Upload 3rd Image', 'fitness_pleasure'),
       'section' => 'brands_images_section',
       'settings' => 'brand_image_3',
    )));

    $wp_customize->add_setting('brand_url_3', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('brand_url_3', array(
        'label' => __('URL for Brand 3', 'fitness_pleasure'),
        'section' => 'brands_images_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('brand_image_4', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_image_4_control', array(
       'label' => __('Upload 4th Image', 'fitness_pleasure'),
       'section' => 'brands_images_section',
       'settings' => 'brand_image_4',
    )));

    $wp_customize->add_setting('brand_url_4', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('brand_url_4', array(
        'label' => __('URL for Brand 4', 'fitness_pleasure'),
        'section' => 'brands_images_section',
        'type' => 'url',
    ));

}
add_action('customize_register', 'fitness_pleasure_customize_brands');

// Add custom title on the front page
function fitness_pleasure_customize_register($wp_customize)
{
    // Add a section for the front page title
    $wp_customize->add_section('front_page_title_section', array(
        'title' => __('Front Page Title', 'fitness_pleasure'),
        'priority' => 30,
    ));

    // Add a setting for the front page title
    $wp_customize->add_setting('front_page_title', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add the image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_page_title', array(
        'label' => __('Set your front page title', 'fitness_pleasure'),
        'section' => 'front_page_title_section',
        'settings' => 'front_page_title',
        'type' => 'text'
    )));

    // Add a section for the front page subtitle

    $wp_customize->add_setting('front_page_subtitle', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add the image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_page_subtitle', array(
        'label' => __('Set your front page subtitle', 'fitness_pleasure'),
        'section' => 'front_page_title_section',
        'settings' => 'front_page_subtitle',
        'type' => 'text'
    )));
}
add_action('customize_register', 'fitness_pleasure_customize_register');

//Page menu set suggestion for bettwer UX

function my_customizer_menu_alert($wp_customize)
{
    // Check if a menu is set
    if (!has_nav_menu('site-menu')) {
        $wp_customize->add_section('menu_alert_section', array(
            'title'    => __('⚠️ Navigation Notice', 'fitness_pleasure'),
            'priority' => 1,
        ));

        $wp_customize->add_setting('menu_alert', array(
            'sanitize_callback' => 'wp_kses_post',
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'menu_alert',
            array(
                'label'       => __('No Menu Assigned', 'fitness_pleasure'),
                'section'     => 'menu_alert_section',
                'type'        => 'hidden',
                'description' => __('<strong>⚠️Set a navigation menu</strong> in <a href="' . admin_url('nav-menus.php') . '" target="_blank">Appearance → Menus</a> for a better experience.', 'fitness_pleasure'),
            )
        ));
    }
}
add_action('customize_register', 'my_customizer_menu_alert');

// WSform integration

function fitness_pleasure_customize_wsforms($wp_customize)
{
    $wp_customize->add_section('wsform_section', array(
        'title'    => __('WSform Integration', 'fitness_pleasure'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('show_newsletter', array(
        'default'   => true,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('show_newsletter_control', array(
        'label'    => __('Show Newsletter Form', 'fitness_pleasure'),
        'section'  => 'wsform_section',
        'settings' => 'show_newsletter',
        'type'     => 'checkbox',
    ));

    $wp_customize->add_setting('newsletter_wsform_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('newsletter_wsform_id', array(
        'label' => __('Newsletter WSform ID', 'fitness_pleasure'),
        'section' => 'wsform_section',
        'type' => 'text',
        'description' => __('Enter the WS Form ID for your newsletter form.', 'fitness_pleasure'),
    ));

    $wp_customize->add_setting('contactform_wsform_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contactform_wsform_id', array(
        'label' => __('Contact Form WSform ID', 'fitness_pleasure'),
        'section' => 'wsform_section',
        'type' => 'text',
        'description' => __('Enter the WS Form ID for your contact form. ', 'fitness_pleasure'),
    ));

    $wp_customize->add_setting('wsform_style_file', array(
        'defaul' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wsform_style_file_control', array(
        'label'    => __('Download WSForm Style JSON', 'fitness_pleasure'),
        'section'  => 'wsform_section',
        'settings' => 'wsform_style_file',
        'type'     => 'hidden',
        'description' => sprintf(__('Click here to download the style file: <a href="%s" target="_blank" download>Download JSON</a>', 'my-theme'), esc_url(get_template_directory_uri() . '/assets/wsf-style-fitness-pleasure.json')),
    )));

}
add_action('customize_register', 'fitness_pleasure_customize_wsforms');

// Footer Widget on/off

function mytheme_customize_social_widget($wp_customize)
{
    $wp_customize->add_section('social_widget_section', array(
        'title'    => __('Social Media Widget', 'fitness_pleasure'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('show_social_widget', array(
        'default'   => true,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('show_social_widget_control', array(
        'label'    => __('Show Social Media Widget', 'fitness_pleasure'),
        'section'  => 'social_widget_section',
        'settings' => 'show_social_widget',
        'type'     => 'checkbox',
        'description' => __('<strong>Use the Wordpress Social Media Widget <a href="' . admin_url('widgets.php') . '" target="_blank">Appearance → Widgets</a> for a better user experience.', 'fitness_pleasure'),
    ));
}
add_action('customize_register', 'mytheme_customize_social_widget');

// Remove prefixes

function wpdocs_remove_archive_title_prefixes($title, $original_title)
{
    return $original_title;
}
add_filter('get_the_archive_title', 'wpdocs_remove_archive_title_prefixes', 10, 2);

// Add background image lottery

function get_random_background_image($file_name, $extension, $max_images)
{
    $random_num = rand(1, $max_images);
    $theme_dir = get_template_directory(); // Base directory
    $theme_uri = get_template_directory_uri(); // Base URL

    $file_path = "{$theme_dir}/assets/images/{$file_name}_{$random_num}.{$extension}";
    $file_url = "{$theme_uri}/assets/images/{$file_name}_{$random_num}.{$extension}";

    if (!file_exists($file_path)) {
        $file_url = "{$theme_uri}/assets/images/default_image.{$extension}";
    }

    return esc_url($file_url);
}

// Comment form fields filter

function custom_comment_form($fields)
{
    unset($fields['url']);
    return $fields;
}

add_filter('comment_form_default_fields', 'custom_comment_form');
