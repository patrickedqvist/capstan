<header id="front-header">

  <div id="banner"></div>

  <div class="nav-wrap container clearfix">
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
  </div>

  <a id="nav-trigger" href="#0">
    <span class="menu-text"><?php _e('Menu', 'capstan'); ?></span>
    <span class="menu-icon"></span>
  </a>

  <div id="hero">
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>
  </div>

</header>
