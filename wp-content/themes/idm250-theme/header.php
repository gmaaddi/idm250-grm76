<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/graphics/favicon.ico" type="image/x-icon">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="menu-container">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      <a href="<?php echo site_url(); ?>/index.php">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/graphics/logo-group-bigger.png" class="logo" alt="Logo">
      </a>
    </div>
  </div>

  <div class="nav-btn">
    <label class="nav-label" for="nav-check">
      <span class="nav-check"></span>
      <span class="nav-check"></span>
      <span class="nav-check"></span>
    </label>
  </div>
  
  <div class="menu-links">
    <?php
      wp_nav_menu(
        [
          'theme-location' => 'primary-menu',
          'container_class' => "menu-nav",
          'menu_class' => "menu-list",
		      'container' => "nav",
        ]
      );
    ?>
  </div>
</div>
</header>