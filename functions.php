<?php 


// load local scripts
function CMMScripts()
{
    wp_enqueue_script( 'core', get_template_directory_uri() . '/js/core.js', array( 'jquery' ) );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ) );
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'CMMScripts' );



// customized admin dashboard footer
function remove_footer_admin () {
echo 'Powered By by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://www.mktree.com/" target="_blank">MarkeTree </a></p>';
}
    
add_filter('admin_footer_text', 'remove_footer_admin');
add_action('wp_dashboard_setup', 'chef_dashboard_widgets');



//Theme Dashboard Widgets
function chef_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Chef 5 Minute Meals', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '<p>Marketree Contact Info <a href="http://www.mktree.com/" target="_blank">MarkeTree </a></p>';
}

// remove version info from head and feeds
function complete_version_removal() {
    return '';
}
add_filter('the_generator', 'complete_version_removal');




// remove items from the admin bar
function reduce_admin_bar() {
global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('search');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('themes');
    //$wp_admin_bar->remove_menu('dashboard');
    $wp_admin_bar->remove_menu('new-media');
    $wp_admin_bar->remove_menu('new-user');
        

}
add_action('wp_before_admin_bar_render', 'reduce_admin_bar', 0);



// Widget Areas
function footerwidgets() {

    register_sidebar( array(
        'name' => 'Footer Widgets',
        'id' => 'footer_widgets',
        'before_widget' => '<div class="col-sm-3">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar_widgets',
        'before_widget' => '<div class="well">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
}
add_action( 'widgets_init', 'footerwidgets' );


add_theme_support( 'post-thumbnails'); 




// register  nav menus
register_nav_menus( array(
        'secondary' => __( 'Top Secondary', 'CFMM' ),
        'Social' => __( 'Social', 'CFMM' ),
) );



// Register Custom Navigation Walker
require_once('wp_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'CFMM' ),
) );


/*

add_action( 'init', 'register_cpt_retailers' );
function register_cpt_retailers() {

    $labels = array( 
        'name' => _x( 'Retailers', 'retailers' ),
        'singular_name' => _x( 'Retailers', 'retailers' ),
        'add_new' => _x( 'Add Retailers', 'retailers' ),
        'add_new_item' => _x( 'Add New Retailers', 'retailers' ),
        'edit_item' => _x( 'Edit Retailers', 'retailers' ),
        'new_item' => _x( 'New Retailers', 'retailers' ),
        'view_item' => _x( 'View Retailers', 'retailers' ),
        'search_items' => _x( 'Search Retailers', 'retailers' ),
        'not_found' => _x( 'No Retailers found', 'retailers' ),
        'not_found_in_trash' => _x( 'No Retailers found in Trash', 'retailers' ),
        'parent_item_colon' => _x( 'Parent Retailers:', 'retailers' ),
        'menu_name' => _x( 'Retailers', 'retailers' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,        
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'retailers',
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'retailers', 'with_front' => false ),
        'capability_type' => 'post'

    );
    register_post_type( 'retailers', $args );
}
*/


add_action( 'init', 'register_cpt_retaillogo' );
function register_cpt_retaillogo() {

    $labels = array( 
        'name' => _x( 'Retail Logo Rotator', 'retaillogo' ),
        'singular_name' => _x( 'Retail Logo Rotator', 'retaillogo' ),
        'add_new' => _x( 'Add Retail Logo Rotator', 'retaillogo' ),
        'add_new_item' => _x( 'Add New Retail Logo Rotator', 'retaillogo' ),
        'edit_item' => _x( 'Edit Retail Logo Rotator', 'retaillogo' ),
        'new_item' => _x( 'New Retail Logo Rotator', 'retaillogo' ),
        'view_item' => _x( 'View Retail Logo Rotator', 'retaillogo' ),
        'search_items' => _x( 'Search Retail Logo Rotator', 'retaillogo' ),
        'not_found' => _x( 'No Retail Logo Rotator found', 'retaillogo' ),
        'not_found_in_trash' => _x( 'No Retail Logo Rotator found in Trash', 'retaillogo' ),
        'parent_item_colon' => _x( 'Parent Retail Logo Rotator:', 'retaillogo' ),
        'menu_name' => _x( 'Retail Logo Rotator', 'retaillogo' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,        
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'retaillogo',
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'retaillogo', 'with_front' => false ),
        'capability_type' => 'post'

    );
    register_post_type( 'retaillogo', $args );
}



?>
