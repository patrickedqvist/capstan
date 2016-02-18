<?php get_header(); ?>

  <?php printf( __( 'Search Results for: %s', 'theme_text_domain' ), get_search_query() ); ?>

    <?php
    if ( have_posts() ) :
    // Start the loop.
    while ( have_posts() ) : the_post(); ?>

    <?php
    // End the loop.
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination( array(
      'prev_text'          => __( 'Previous page', 'theme_text_domain' ),
      'next_text'          => __( 'Next page', 'theme_text_domain' ),
      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'theme_text_domain' ) . ' </span>',
    ) );

  // If no content, include the "No posts found" template.
  else :

    printf( __( 'Nothing found searching for: %s', 'theme_text_domain' ), get_search_query() );

  endif;
  ?>

<?php get_footer(); ?>
