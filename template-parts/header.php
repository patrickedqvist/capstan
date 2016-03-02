<div id="banner"></div>

<header id="site-header" class="container">
  <nav role="navigation" class="primary-nav clearfix">
    <?php
      $args = array(
        'container' => false,
        'menu_class' => 'clearfix',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="%1$s" class="%2$s"><div class="right">%3$s</div></ul>'
      );
      wp_nav_menu( $args );
    ?>
  </nav>

  <a id="nav-trigger" href="#0">
    <span class="menu-text"><?php _e('Menu', 'capstan'); ?></span>
    <span class="menu-icon"></span>
  </a>
</header>
