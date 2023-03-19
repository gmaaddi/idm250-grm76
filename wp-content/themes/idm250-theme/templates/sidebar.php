<?php
/*
Template Name: Columns
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


<div class="color-block-container" style="background-color:<?php the_field('color_block_background_color'); ?>">
    <div class="color-block-column1">
        <h2 class="color_block_title"><?php the_field('color_block_title'); ?></h2>
        <h5 class="color_block_description"><?php the_field('color_block_description'); ?></h5>
        <?php 
                $link = get_field('color_block_link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="cta-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>

    <div class="color-block-column2">
        <?php 
        $image = get_field('color_block_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
</div>

<div class="page-wrapper sidebar-wrapper">
    <?php get_template_part('components/content'); ?>
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