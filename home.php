<?php get_header(); ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header"><?php wp_title(); ?> </h1>
            </div>
          </div>

        <div class="row">
          <div class="col-lg-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <p>
                <ol  class="subcrumb">
                  <li><i class="fa fa-clock-o"> </i><em> <?php the_time('l, F jS, Y'); ?></em><li>
                    <li><i class="fa fa-user"> <?php the_author(); ?> </i></li>
                    <li><i class="fa fa-comment-o"></i> Comment</li>
                    <?php comments_number( $zero, $one, $more ); ?> 
                </ol>
            </p>
            <p> <?php the_excerpt(); ?> </p>

             <hr>

          <?php endwhile; else: ?>

            <h1 class="animated lightSpeedIn"> Oh oh!</h1>
            <div class="alert alert-error animated shake">
              <p><?php _e('Sorry, there are no posts.'); ?></p>
            </div>
          <?php endif; ?>

          </div><!-- ./col -->

          <?php get_sidebar(); ?>   

      </div><!-- ./row -->
    </div><!-- ./container -->
  </div> <!-- ./wrapper -->

<?php get_footer(); ?>