<?php get_header(); ?>

<div id="hero">
  <h1><?php bloginfo('name'); ?></h1>
  <h2><?php bloginfo('description'); ?></h2>
</div>

<section id="news" role="content">
  <h3 class="section-title"><?php _e('Nyheter', 'capstan'); ?></h3>

  <div class="latest-news container">
  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/content', get_post_format() );
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination( array(
      'prev_text'          => __( 'Previous page', 'capstan' ),
      'next_text'          => __( 'Next page', 'capstan' ),
      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'capstan' ) . ' </span>',
    ) );

    else :

    get_template_part( 'template-parts/content', 'none' );

    endif;
  ?>
  </div>

</section>

<?php get_footer(); ?>
