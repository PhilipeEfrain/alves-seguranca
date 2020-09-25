<?php
if ( ! function_exists( 'alves_setup' ) ) :

function alves_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'alves', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'alves' ),
        'social'  => __( 'Social Links Menu', 'alves' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // alves_setup

add_action( 'after_setup_theme', 'alves_setup' );


if ( ! function_exists( 'alves_init' ) ) :

function alves_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // alves_setup

add_action( 'init', 'alves_init' );


if ( ! function_exists( 'alves_custom_image_sizes_names' ) ) :

function alves_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'alves_custom_image_sizes_names' );
endif;// alves_custom_image_sizes_names



if ( ! function_exists( 'alves_widgets_init' ) ) :

function alves_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'alves_widgets_init' );
endif;// alves_widgets_init



if ( ! function_exists( 'alves_customize_register' ) ) :

function alves_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'pre_menu', array(
        'title' => __( 'Pré Menu', 'alves' )
    ));

    $wp_customize->add_section( 'menu', array(
        'title' => __( 'Menu', 'alves' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'pre_menu_contato', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'pre_menu_contato', array(
        'label' => __( 'Contato', 'alves' ),
        'type' => 'text',
        'section' => 'pre_menu'
    ));

    $wp_customize->add_setting( 'pre_menu_facebook', array(
        'type' => 'theme_mod',
        'default' => '<span class="fa fa-facebook"><i class="sr-only">Facebook</i></span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'pre_menu_facebook', array(
        'label' => __( 'Facebook', 'alves' ),
        'type' => 'text',
        'section' => 'pre_menu'
    ));

    $wp_customize->add_setting( 'pre_menu_facebook_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'pre_menu_facebook_link', array(
        'label' => __( 'Link Facebook', 'alves' ),
        'type' => 'url',
        'section' => 'pre_menu'
    ));

    $wp_customize->add_setting( 'pre_menu_instagram', array(
        'type' => 'theme_mod',
        'default' => '<span class="fa fa-instagram"><i class="sr-only">Instagram</i></span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'pre_menu_instagram', array(
        'label' => __( 'Instagram', 'alves' ),
        'type' => 'text',
        'section' => 'pre_menu'
    ));

    $wp_customize->add_setting( 'pre_menu_instagram_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'pre_menu_instagram_link', array(
        'label' => __( 'Instagram Link', 'alves' ),
        'type' => 'url',
        'section' => 'pre_menu'
    ));

    $wp_customize->add_setting( 'menu_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'menu_logo', array(
        'label' => __( 'Logo', 'alves' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'menu'
    ) ) );

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'alves_customize_register' );
endif;// alves_customize_register


if ( ! function_exists( 'alves_enqueue_scripts' ) ) :
    function alves_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '', true );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'document.write(new Date().getFullYear());');

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'alves-jquerymigrate' );
    wp_enqueue_script( 'alves-jquerymigrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', false, null, true);

    wp_deregister_script( 'alves-popper' );
    wp_enqueue_script( 'alves-popper', get_template_directory_uri() . '/js/popper.min.js', false, null, true);

    wp_deregister_script( 'alves-bootstrap' );
    wp_enqueue_script( 'alves-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'alves-jqueryeasing' );
    wp_enqueue_script( 'alves-jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', false, null, true);

    wp_deregister_script( 'alves-jquerywaypoints' );
    wp_enqueue_script( 'alves-jquerywaypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, null, true);

    wp_deregister_script( 'alves-jquerystellar' );
    wp_enqueue_script( 'alves-jquerystellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', false, null, true);

    wp_deregister_script( 'alves-owlcarousel' );
    wp_enqueue_script( 'alves-owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'alves-jquerymagnificpopup' );
    wp_enqueue_script( 'alves-jquerymagnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', false, null, true);

    wp_deregister_script( 'alves-jqueryanimatenumber' );
    wp_enqueue_script( 'alves-jqueryanimatenumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', false, null, true);

    wp_deregister_script( 'alves-scrollax' );
    wp_enqueue_script( 'alves-scrollax', get_template_directory_uri() . '/js/scrollax.min.js', false, null, true);

    wp_deregister_script( 'alves-script' );
    wp_enqueue_script( 'alves-script', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', false, null, true);

    wp_deregister_script( 'alves-googlemap' );
    wp_enqueue_script( 'alves-googlemap', get_template_directory_uri() . '/js/google-map.js', false, null, true);

    wp_deregister_script( 'alves-main' );
    wp_enqueue_script( 'alves-main', get_template_directory_uri() . '/js/main.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'alves-style' );
    wp_enqueue_style( 'alves-style', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap', false, null, 'all');

    wp_deregister_style( 'alves-fontawesome' );
    wp_enqueue_style( 'alves-fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'alves-animate' );
    wp_enqueue_style( 'alves-animate', get_template_directory_uri() . '/css/animate.css', false, null, 'all');

    wp_deregister_style( 'alves-owlcarousel' );
    wp_enqueue_style( 'alves-owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', false, null, 'all');

    wp_deregister_style( 'alves-owlthemedefault' );
    wp_enqueue_style( 'alves-owlthemedefault', get_template_directory_uri() . '/css/owl.theme.default.min.css', false, null, 'all');

    wp_deregister_style( 'alves-magnificpopup' );
    wp_enqueue_style( 'alves-magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css', false, null, 'all');

    wp_deregister_style( 'alves-flaticon' );
    wp_enqueue_style( 'alves-flaticon', get_template_directory_uri() . '/css/flaticon.css', false, null, 'all');

    wp_deregister_style( 'alves-style-1' );
    wp_enqueue_style( 'alves-style-1', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'alves-style-2' );
    wp_enqueue_style( 'alves-style-2', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'alves_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>