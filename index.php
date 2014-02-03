<?php get_header(); ?>  

  <div class="hero-unit">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>          
  </div><!-- .hero-unit --> 

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id="<?php the_ID(); ?>" class="post">
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
          <span class="entry-meta"> <p>Posted: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p> </span>
          <p>Categories: <?php the_category(', '); ?></p>
          <div class="entry">            

            <?php the_content(); ?>
            
          </div><!-- .entry --> 
        </div><!-- .post --> 

        <hr>

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?> 

<?php get_footer(); ?>  


