<?php wp_footer();?>


<footer>
<a href="<?php echo site_url(); ?>/index.php">
  <?php 
    $logo = get_field('logo', 'option');
    if($logo) {
    echo '<img class="logo-footer" src="' . $logo['url'] . '" alt="' . $logo['alt'] . '">';
    }
  ?>
</a>

<?php
      wp_nav_menu(
        [
          'theme-location' => 'footer-menu',
          'container_class' => "menu-nav__footer",
          'menu_class' => "menu-list__footer",
          'container' => "nav",
        ]
      );
    ?>

<p class="footer-text">
    &copy; <?php echo date('Y'); ?> 
    
    <?php bloginfo('name'); ?>
    .
  <?php
    $footer_text = get_field('footer_text', 'options');
    if($footer_text) {
    echo $footer_text;
  }
  ?>
</p>

</div>
</footer>

</body>
</html>