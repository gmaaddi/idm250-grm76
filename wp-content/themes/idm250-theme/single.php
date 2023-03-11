<?php get_header() ?>
<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
</article>

<div class="page-wrapper">
    <div class="single-header">
        <h5 class="single-header__date"><?php echo get_the_date() ?></h5>
        <h1 class="single-header__title"><?php echo get_the_title();?></h1>
    </div>

    <div class="single-header__img"
        style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
    </div>

    <?php get_template_part('components/content'); ?>
</div>




<!-- <h2>Categories for this post</h2>
<?php
$currentPostId = get_the_id();
$terms = get_the_terms($currentPostId, 'category');

foreach ($terms as $term) {
    echo "<li>{$term->name}</li>";
}
?> -->

<?php get_footer() ?>