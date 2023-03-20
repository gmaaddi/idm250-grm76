<?php get_header() ?>

<div class="home-hero-container" style="background-image: url('<?php echo get_field('hero_school_background_image')['url']; ?>');">
    <div class="home-hero-wrapper">
        <?php 
        $image = get_field('hero_school_logo');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <h1 class="hero_school_title"><?php the_field('hero_school_title'); ?></h1>
        <h4 class="hero_school_description"><?php the_field('hero_school_description'); ?></h4>
        
        <?php 
            $link = get_field('hero_school_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="cta-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
</div>

<div class="three-column-container" style="background-color:<?php the_field('3_column_background_color'); ?>">
    <h2 class="centered_title"><?php the_field('centered_title'); ?></h2>

    <div class="three-column-wrapper">
        <div class="color-column color-column-1">
            <?php 
            $image = get_field('column_1_icon');
            if( !empty( $image ) ): ?>
                <img class="column_icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <h4 class="column_icon_description"><?php the_field('column_1_icon_description'); ?></h4>
        </div>

        <div class="color-column color-column-2">
            <?php 
            $image = get_field('column_2_icon');
            if( !empty( $image ) ): ?>
                <img class="column_icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <h4 class="column_icon_description"><?php the_field('column_2_icon_description'); ?></h4>
        </div>

        <div class="color-column color-column-3">
            <?php 
            $image = get_field('column_3_icon');
            if( !empty( $image ) ): ?>
                <img class="column_icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <h4 class="column_icon_description"><?php the_field('column_3_icon_description'); ?></h4>
        </div>
    </div>

<?php get_template_part('components/content'); ?>

<?php get_footer() ?>