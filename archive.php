<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

  <?php
      the_archive_title( '<h1>', '</h1>' );
      the_archive_description( '<div class="taxonomy-description">', '</div>' );
    ?>

  <?php
  // Start the Loop.
  while ( have_posts() ) : the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>

  <?php
  // End the loop.
  endwhile;

  // Previous/next page navigation.
  the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'theme_text_domain' ),
    'next_text'          => __( 'Next page', 'theme_text_domain' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'theme_text_domain' ) . ' </span>',
  ) );

// If no content
else :

  _e( 'Nothing found', 'theme_text_domain');

endif;
?>


<?php get_footer(); ?>
