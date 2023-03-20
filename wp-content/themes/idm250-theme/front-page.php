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
</div>

<div class="two-column-home-container two-column-container">
    <div class="column-1-home text-column">
        <h3 class="column_1_top_title"><?php the_field('column_1_top_title'); ?></h3>
        <h1 class="column_1_primary_title"><?php the_field('column_1_primary_title'); ?></h1>
        <h5 class="column_1_description"><?php the_field('column_1_description'); ?></h5>

        <div class="column_1_link_container">
        <?php 
            $link = get_field('column_1_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="cta-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
        </div>
    </div>

    <div class="column-2-home image-column" style="background-image: url('<?php echo get_field('column_2_image')['url']; ?>');">
    </div>
</div>

<div class="home-blogs-container">
    <?php get_template_part('components/content'); ?>

    <div class="home-blogs-wrapper">
        <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
            );

        $recent_posts = new WP_Query($args);

        if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) :
        $recent_posts->the_post(); ?>

        <a href="<?php the_permalink(); ?>">
        <div class="blog-card">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('card-thumbnail'); ?>
            <?php endif; ?>
                <h5 class="blog-card-title">
                    <?php the_title(); ?>
                </h5>

                <p class="blog-card-excerpt">
                    <?php the_excerpt(); ?>
                </p>
        </div>
        </a>

        <?php endwhile;
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>