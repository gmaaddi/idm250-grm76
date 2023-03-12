<?php wp_footer();?>


<footer>
<a href="<?php echo site_url(); ?>/index.php">
  <img src="<?php echo get_template_directory_uri(); ?>/dist/graphics/logo-group-bigger.png" class=" logo-footer" alt="Logo">
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

<p class="footer-text">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</div>
</footer>

</body>
</html>