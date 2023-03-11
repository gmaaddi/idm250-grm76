<?php get_header() ?>

<div class="page-header-container" style="background-image: url('<?php echo get_field('page_header_image')['url']; ?>');">
    <h1 class="page-header-heading"><?php the_field('page_header_title'); ?></h1>
    <h5 class="page-header-description"><?php the_field('page_header_description'); ?></h5>


</div>



<div class="page-wrapper">
    <h1><?php echo get_the_title();?></h1>
    <div><?php echo get_the_excerpt();?></div>
    <?php get_template_part('components/content'); ?>

    <div class="cta-container">
        <style type="text/css">
        .cta-container {
            background-color: <?php the_field('cta_background_color'); ?>;
        }
        </style>

        <h2 class="cta-heading"><?php the_field('cta_heading'); ?></h2>
        <h5 class="cta-description"><?php the_field('cta_description'); ?></h5>
        <?php 
            $link = get_field('cta_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="cta-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>