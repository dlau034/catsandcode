<?php get_header(); ?>  

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id="<?php the_ID(); ?>" class="post single_push">
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
          <div class="entry">            

            <?php the_content(); ?>
            
          </div><!-- .entry --> 
        </div><!-- .post --> 

        <hr>

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?> 

<?php get_footer(); ?>  


