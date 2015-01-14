<?php 
/*
Template Name: Full Page
*/
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo get_the_title(); ?> </h1>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<?php endwhile; else: ?>

				<!-- some error text here -->

				<?php endif; ?>

            </div>
        </div>
    </div><!-- /.container -->
</div> <!-- ./wrapper -->

<?php 
get_footer(); ?>