
<footer>
    <div class="contianer">
        <div class="row">
            <?php if ( dynamic_sidebar('footer_widgets') ) : else : endif; ?>
            
            
            
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <hr id="hr">
                            <p class="text-center" id="copyright">Copyright  &copy; <?php echo date('Y'); ?> Chef Five Minute Meals.  All Rights Reserved.  Created by MarketTree Inc. &nbsp; <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
                            <p><?php echo get_template_directory_uri() . '/js/jquery.flexslider.js'; ?></p>
                    </div>
                </div>
            </div><!-- ./copyright -->
        </div><!-- ./row -->

    </div><!-- ./container -->
</footer>
   

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/jquery.flexslider.js'; ?>"></script>
    
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 210,
        itemMargin: 5,
        pausePlay: true,
        touch: true,
        
        start: function(slider){
        }
      });
    });
  </script>  

<?php wp_footer(); ?>
</body>

</html>
