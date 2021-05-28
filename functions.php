<?php

function sdhhs_files(){
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"');
    wp_enqueue_script( 'FontAwesome', '//kit.fontawesome.com/ec02b9ac32.js', null, null, true );
    
    if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
        wp_enqueue_script('main-sdhhs-script', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('vendors-script', get_theme_file_uri('/bundled-assets/vendors~scripts.920bf068e75aa8ef387f.js'), NULL, '1.0', true);
        wp_enqueue_script('main-sdhhs-script', get_theme_file_uri('/bundled-assets/scripts.af53d215d20603bc027a.js'), NULL, '1.0', true);
        wp_enqueue_style( 'style', get_template_directory_uri().'/bundled-assets/styles.af53d215d20603bc027a.css' );
    }
};

add_action('wp_enqueue_scripts', 'sdhhs_files');


function sdhhs_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 350,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'sdhhs_custom_logo_setup' );

function sdhhs_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('front-page-cards', 300, 300, true);
    add_image_size('banner-left-image', 2048, 500, true);
    add_image_size('donate-banner-image', 2048, 300, true);
    add_image_size('arhive-page-top-two', 400, 400, true);
    add_image_size('single-event-poster', 657, 877, true);
    
    //Resister Nav Menu
    register_nav_menu('headerMenu1', 'Header Menu 1');
    register_nav_menu('headerMenu2', 'Header Menu 2');
    register_nav_menu('footerMenu1', 'Footer Menu 1');
    register_nav_menu('footerMenu2', 'Footer Menu 2');
    register_nav_menu('footerMenu3', 'Footer Menu 3');
    register_nav_menu('footerMenu4', 'Footer Menu 4');
}
   add_action('after_setup_theme', 'sdhhs_features');

/* Registers the widget areas. */
function widget_areas() {
    register_sidebar(
        array(
            'id'            => 'footer_address',
            'name'          => __( 'Footer Address' ),
            'description'   => __( 'This displays the address in the footer' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'staff_banner_image',
            'name'          => __( 'Staff Banner Image' ),
            'description'   => __( 'This displays the banner image on staff archive' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'events_banner_image',
            'name'          => __( 'Events Banner Image' ),
            'description'   => __( 'This displays the banner image on events archive' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'news_banner_image',
            'name'          => __( 'News Banner Image' ),
            'description'   => __( 'This displays the banner image on news archive' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'newsletter_banner_image',
            'name'          => __( 'Newsletter Banner Image' ),
            'description'   => __( 'This displays the banner image on newsletter archive' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'books_banner_image',
            'name'          => __( 'Books Banner Image' ),
            'description'   => __( 'This displays the banner image on books archive' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        )
    );
}
   //Register Footer Address Widget
   add_action( 'widgets_init', 'widget_areas' );

   //Redirect Subscriber accounts out of admin and onto homepage
   add_action('admin_init', 'redirectSubsToFrontEnd');

   function redirectSubsToFrontEnd(){
       $ourCurrentUser = wp_get_current_user();
       if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
        wp_redirect(site_url('/'));
        exit;
       }
   }

   //Remove admin bar for subscribers
   add_action('wp_loaded', 'noSubsAdminBar');

   function noSubsAdminBar(){
       $ourCurrentUser = wp_get_current_user();
       if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
        show_admin_bar(false);
       }
   }
   
   // Customize Login Screen
add_filter('login_headerurl', 'ourHeaderUrl');

function ourHeaderUrl(){
    return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts', 'ourLoginCSS');

function ourLoginCSS(){
    if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
        wp_enqueue_script('main-sdhhs-script', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('vendors-script', get_theme_file_uri('/bundled-assets/vendors~scripts.920bf068e75aa8ef387f.js'), NULL, '1.0', true);
        wp_enqueue_script('main-sdhhs-script', get_theme_file_uri('/bundled-assets/scripts.af53d215d20603bc027a.js'), NULL, '1.0', true);
        wp_enqueue_style( 'style', get_template_directory_uri().'/bundled-assets/styles.af53d215d20603bc027a.css' );
    }
}

add_filter('login_headertitle', 'ourLoginTitle');
function ourLoginTitle(){
    return get_bloginfo('name');
}
add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');
function ignoreCertainFiles($exclude_filters){
    $exclude_filters[] = 'themes/sdhhs/node_modules';
    return $exclude_filters;
}