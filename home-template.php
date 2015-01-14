
<?php
/*
Template Name: Home Page
*/

 get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>
	


<?php endwhile; ?>
 

<div class="container">
<div class="row">
	<h3 class="page-header">Shop at any of these fine establishments</h3>
<div class="flexslider">
  <ul class="slides">
<?php query_posts( array( 'post_type' => 'retaillogo', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>

<?php 
if (have_posts() ) :  while (have_posts()) : the_post(); 

	if (get_post_meta($post->ID, 'retailer_logo', true)): 

		$retailer_logo = get_post_meta($post->ID, 'retailer_logo', true); 

	endif; 

	if (get_post_meta($post->ID, 'retailer_url', true)):

		$retailer_url = get_post_meta($post->ID, 'retailer_url', true); 

	else : 

	 $retailer_url = '#'; 

	endif; 
?>

	<li><a target="_blank" href="<?php echo $retailer_url; ?>"><img src="<?php echo $retailer_logo; ?>" alt=""  /></a></li>

<?php endwhile; else : ?>

<?php endif; ?>

<?php wp_reset_query(); ?>
</ul>
</div>
</div>
</div>


<?php endif; ?>


<?php get_footer(); ?>