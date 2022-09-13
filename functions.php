<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'buddyx-global','buddyx-site-loader','buddyx-load-fontawesome','buddyx-buddypress','buddyx-platform','buddyx-bbpress','buddyx-slick','buddyx-dark-mode' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );



// END ENQUEUE PARENT ACTION



function print_cc() {
    ?>

    <p class="footer-cc">Street food Members</p>

    <?php
}
add_action( "bp_setup_title", "print_cc" );

function my_append_to_title_hook($value) {
    return "<div class='post_title_bold'>". "Page:</div>";
}
add_filter("bp_setup_title", "my_append_to_title_hook" );

add_filter('wp_title','sweety_page_title',10,1);

function wpdocs_filter_wp_title() {

    return '<h1 class="site-title"><a href="/" rel="home">NAME</a></h1>';
}


add_filter("ln_title", "wpdocs_filter_wp_title" );