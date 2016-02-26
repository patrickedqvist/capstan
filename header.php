<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  <style id="above-the-fold" type="text/css" media="screen">
  <?php readfile( get_stylesheet_directory_uri() . '/css/atv.css'); ?>
  </style>
  </head>
  <body <?php body_class(); ?> >

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
    </header>
