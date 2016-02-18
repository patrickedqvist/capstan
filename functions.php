<?php

/**
* Setup Theme Functions
*/

 // Set the maximum allowed width for any content in the theme, like oEmbeds and images.
 // This setting overrides any custom image sizes
if ( ! isset( $content_width ) ) {
  $content_width = 720;
}


// Register Theme Features
function custom_theme_features()  {

  // Add theme support for Automatic Feed Links
  add_theme_support( 'automatic-feed-links' );

  // Add theme support for Post Formats
  add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

  // Add theme support for Featured Images
  add_theme_support( 'post-thumbnails' );

  // Add theme support for HTML5 Semantic Markup
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

  // Add theme support for document Title tag
  add_theme_support( 'title-tag' );

  // Add theme support for custom CSS in the TinyMCE visual editor
  add_editor_style( 'css/editor-style.css' );

  // Add theme support for Translation
  load_theme_textdomain( 'theme_text_domain', get_template_directory() . '/languages' );

  // Register menus for wp_nav_menu()
  register_nav_menus( array(
    'primary' => __( 'Primary Navigation', 'theme_text_domain' ),
  ) );

 }

 // Hook into the 'after_setup_theme' action
 add_action( 'after_setup_theme', 'custom_theme_features' );

 function theme_widgets_init() {
   $sidebar_args = array(
     'name'          => __( 'Sidebar', 'theme_text_domain' ),
     'id'            => 'sidebar',
     'description'   => '',
     'class'         => '',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
     'after_widget'  => '</aside>',
     'before_title'  => '<h3 class="widget-title">',
     'after_title'   => '</h3>'
   );
   register_sidebar( $sidebar_args );
 }
 add_action( 'widgets_init', 'theme_widgets_init' );

 /**
 * The proper way to enqueue scripts and styles
 */
function theme_name_scripts() {

  $dir = get_template_directory_uri();

  // Styles
  wp_register_style( 'fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700|Playfair+Display:300,400,700', array(), null, 'screen');
  wp_register_style( 'main', $dir . '/css/app.css', array(), null, 'screen' );

  wp_enqueue_style( 'fonts' );
  wp_enqueue_style( 'main' );

  // Scripts
  wp_register_script( 'feature', $dir . '/js/vendor/feature.js', array(), null, true );
  wp_register_script( 'app', $dir . '/js/app.js', array(), null, true );

  wp_enqueue_script( 'feature' );
  wp_enqueue_script( 'app' );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

?>
