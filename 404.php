<?php get_header(); ?>


<div class="container">

        <div class="row">

            <div class="col-lg-12">

                <p class="error-404"><i class="fa fa-exclamation-circle"></i> 404</p>
                <p class="lead">The page you're looking for could not be found.</p>
                <p>Here are some helpful links to help you find what you're looking for:</p>
                
                <?php wp_list_pages(); ?>
            </div>

        </div>

    </div>
    <!-- /.container -->
<p></p>


<?php get_footer(); ?>