<?php ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <title><?php echo get_bloginfo('name'); ?> <?php wp_title( '|', true, 'left' ); ?></title>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body id="page-top" class="body">

    <a href="#page-top" class="scroll-up scroll"><i class="fa fa-chevron-up"></i></a>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

    	<?php 
        // Fix menu overlap bug..
        if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>'; ?>
        
        <!-- SECONDARY MENU -->
        <div class="navbar-second">
            <div class="contaier">
                <div class="row">

                </div>
                <div class="row">
                   
               
                        <?php  $defaults = array(
                                'theme_location'  => '',
                                'menu'            => 'secondary',
                                'container'       => 'div',
                                'container_class' => 'col-sm-8',
                                'container_id'    => '',
                                'menu_class'      => '', //nav-justified
                                'menu_id'         => 'myTab',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                            ); wp_nav_menu( $defaults );?>

                                


                   
                    <div class="col-sm-3 pull-right">
                    <ul class="social"> 
                        <li><a class="facebook" href="" title="Facebook Profile"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="" title="Twitter Profile"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="youtube" href="" title="Youtube Profile"><i class="fa fa-youtube"></i></a></li>
                        <li><a class="linkedin" href="" title="LinkedIn Profile"><i class="fa fa-linkedin"></i></a> </li>
                        <li><a class="chef" href="" title="Chef Videos"><em>Chef Video</em></a>  </li>
                    </ul>
                    </div>
                </div>
            </div><!-- ./container -->
        </div><!-- ./navbar-second -->
        <!-- END OF SECONDARY MENU -->
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- responsive image -->
                
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/Logo.png" class="img-responsive img-con-logo" alt=""></a>
            </div>

            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                'container_id'      => '',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_navwalker::fallback',
                'walker'            => new wp_navwalker())
            );
        ?>
        <div class="navbar-right">
                     <ul class="mobile social"> 
                        <li><a class="facebook" href="" title="Facebook Profile"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="" title="Twitter Profile"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="youtube" href="" title="Youtube Profile"><i class="fa fa-youtube"></i></a></li>
                        <li><a class="linkedin" href="" title="LinkedIn Profile"><i class="fa fa-linkedin"></i></a> </li>
                        <li><a class="chef" href="" title="Chef Videos"><em>Chef Video</em></a>  </li>
                    </ul>
                </div>
        </div><!-- /.container -->
    </nav>



