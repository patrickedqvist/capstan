<?php get_header(); ?>

  <section class="error-404 not-found">
    <?php _e( 'Oops! That page can&rsquo;t be found.', 'theme_text_domain' ); ?>
    <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'theme_text_domain' ); ?></p>
    <?php get_search_form(); ?>
  </section><!-- .error-404 -->

<?php get_footer(); ?>
