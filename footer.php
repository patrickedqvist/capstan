
  <footer id="site-footer">
    <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name', 'display'); ?></p>
  </footer>


  <nav id="touch-nav" role="navigation">
  		<?php
        $args = array(
          'container' => false,
          'theme_location' => 'primary',
        );
        wp_nav_menu( $args );
      ?>
  </nav>

  <?php wp_footer(); ?>
  </body>
</html>
