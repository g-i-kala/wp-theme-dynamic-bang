<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<!-- open the body -->
<body <?php body_class('font-dmsans '); ?>>
<?php wp_body_open(); ?>

    <div id="page" class="site flex flex-col justify-center min-h-screen">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e( 'Skip to content', 'kalissima' ); ?>
        </a>

        <?php get_template_part('/template-parts/header/site','header'); ?>

            <div class="content__container flex-grow justify-center px-2 md:px-0 py-[2rem] md:py-[4rem] lg:py-[4rem]">