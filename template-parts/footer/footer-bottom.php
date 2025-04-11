<!-- Footer bottom row -->
<div class="footer__bottom flex flex-col bg-white text-black">
    <div class="w-full flex flex-col md:flex-row justify-center md:justify-between px-4">
        <div class="mail flex flex-row justify-center content-center py-4">
                <a href="mailto:fitnesspleasure@gmail.com">fitnesspleasure@gmail.com</a>
        </div>
        <div class="footer-widget flex flex-row justify-center content-center py-4">
            <?php get_template_part('/template-parts/components/widget','dynamic'); ?>
        </div>
    </div>
    <?php get_template_part('template-parts/footer/footer','copyrights'); ?>
</div>