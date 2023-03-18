<?php
/*
Template Name: Sidebar
*/
?>

<?php get_header() ?>

<div class="two-column-container">
    <div class="left-column" style="background-image: url('<?php echo get_field('left_column_image')['url']; ?>');">
        <!-- <?php 
        $image = get_field('left_column_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?> -->
    </div>

    <div class="right-column">
        <h5 class="right_column_top_title"><?php the_field('right_column_top_title'); ?></h5>
        <h2 class="right_column_title"><?php the_field('right_column_title'); ?></h2>
        <p class="right_column_paragraph"><?php the_field('right_column_paragraph'); ?></p>

        <div class="subcolumn">
            <div class="subcolumn-left">
                <h4 class="right_column_subtitle"><?php the_field('right_column_subtitle_left'); ?></h4>
                <p><?php the_field('right_column_subtitle_description_left'); ?></p>
            </div>

            <div class="subcolumn-right">
                <h4 class="right_column_subtitle"><?php the_field('right_column_subtitle_right'); ?></h4>
                <p><?php the_field('right_column_subtitle_description_right'); ?></p>
            </div>
        </div>

    </div>


</div>



<!-- <div class="two-column-container">
    <div class="left">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="right">
        <?php get_template_part('components/content'); ?>
    </div>
</div> -->

<!-- <h1><?php echo get_the_title();?></h1>
<?php echo get_the_excerpt();?></div>
<?php get_template_part('components/content'); ?> -->

<?php get_footer() ?>