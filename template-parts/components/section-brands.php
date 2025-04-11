<?php 
$brands = [];

for ($i = 1; $i <= 4; $i++) {
    $image_url = get_theme_mod("brand_image_$i");
    $image_id = attachment_url_to_postid($image_url);
    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true) ?: "Brand $i";
    $brand_url = get_theme_mod("brand_url_$i", '#');

    $brands[] = [
        'image' => esc_url($image_url),
        'alt'   => esc_attr($alt_text),
        'url'   => esc_url($brand_url),
    ];
}
?>

<!-- Section Brands -->
<div class="mx-auto" role="region" aria-labelledby="sweat-supporters-heading">
    <h2 id="sweat-supporters-heading" class="w-1/2 text-[2rem] font-bold text-sm/20">Sweat supporters</h2>
    <div class="brands__wrapper grid grid-cols-2 md:grid-cols-4 gap-4">
        <?php foreach ($brands as $brand): ?>
            <div class="w-full flex justify-center content-center p-8">
                <a href="<?= $brand['url'] ?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?= $brand['image'] ?>" alt="<?= $brand['alt'] ?>" />
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>
