<?php get_header(); ?>  

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id="<?php the_ID(); ?>" class="post single_push">
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
          <span class="entry-meta"> <p>Posted: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p> </span>
          <p>Categories: <?php the_category(', '); ?></p>
          <div class="entry">            

            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            
          </div><!-- .entry --> 
        </div><!-- .post --> 

        <?php comments_template(); ?>  

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?> 

<?php get_footer(); ?>  


