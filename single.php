<?php 
/*
Template Name: With Sidebar
*/
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo get_the_title(); ?> </h1>
        </div>
    </div>
    <div class="row">
         <div class="col-lg-8">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>


                <?php echo get_avatar(get_the_author_id(), 75); ?>
                <h3><?php the_author(); ?></h3>
                <p><?php the_author_meta ('description'); ?></p>
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="me">More Posts</a>




                <hr>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
                ?>

				<?php endwhile; else: ?>

				<!-- some error text here -->

				<?php endif; ?>



         </div>
        

    <?php get_sidebar(); ?>
    </div><!-- ./row -->
    </div><!-- /.container -->
</div> <!-- ./wrapper -->

<?php 

get_footer(); ?>