<?php get_header() ?>

<?php
// Retrieve the content from the options page
$cta_full_image = get_field('cta_full_image', 'option');
$cta_full_title = get_field('cta_full_title', 'option');
$cta_full_description = get_field('cta_full_description', 'option');
$cta_full_link = get_field('cta_full_link', 'option');
?>

<!-- Output the content on 404 page -->
<div class="custom-404-container" style="background-image: url(<?php echo esc_url($cta_full_image['url']); ?>);">
    <h1 class="custom-404-title"><?php echo esc_html($cta_full_title); ?></h1>
    <h3 class="custom-404-description"><?php echo esc_html($cta_full_description); ?></h3>
    <a class="cta-btn" href="<?php echo esc_url($cta_full_link['url']); ?>"><?php echo esc_html($cta_full_link['title']); ?></a>
</div>

<?php get_footer() ?>