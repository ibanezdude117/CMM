<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo get_the_title(); ?> </h1>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

                    <style type="text/css">
                      .error{
                        padding: 5px 9px;
                        border: 1px solid red;
                        color: red;
                        border-radius: 3px;
                      }
                     
                      .success{
                        padding: 5px 9px;
                        border: 1px solid green;
                        color: green;
                        border-radius: 3px;
                      }
                     
                      form span{
                        color: red;
                      }
                    </style>
                <div id="respond">
                  <?php echo $response; ?>
                  <form action="<?php the_permalink(); ?>" method="post">
                    <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
                    <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
                    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
                    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
                    <input type="hidden" name="submitted" value="1">
                    <p><input type="submit"></p>
                  </form>
                </div>

				<?php endwhile; else: ?>

				<!-- some error text here -->

				<?php endif; ?>

            </div>
        </div>
    </div><!-- /.container -->
</div> <!-- ./wrapper -->

<?php 
get_footer(); ?>