<!-- footer search form -->
<aside class="footer-aside">
    <div class="newsletter-section">
        <h3 class="widget-title">
            <?php _e('Search the page', 'dynamic_bang'); ?>
        </h3>
        <!-- Search Form Fallback -->
        <div class="search-form-footer">
            <?php get_search_form(array('aria_label' => __('Site search', 'dynamic_bang'))); ?>
        </div>
    </div>
</aside>