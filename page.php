<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>

  <?php the_title(); ?>
  <?php the_content(); ?>

  <?php
  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) :
    comments_template();
  endif;

// End the loop.
endwhile;
?>

<?php get_footer(); ?>
