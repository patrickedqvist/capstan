<?php get_header(); ?>

		<?php	while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
        <?php the_title(); ?>
        <?php the_content(); ?>
      </article>

		<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'theme_text_domain' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'theme_text_domain' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'theme_text_domain' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'theme_text_domain' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>

<?php get_footer(); ?>
