<?php

/*
*   Security : Deny Direct Url Access
*/
if(!defined('ABSPATH')) {
    exit;
}

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}

add_action( 'init', function() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}, PHP_INT_MAX - 1 );



/**
 * Disable jQuery Migrate in WordPress.
 *
 * @author Guy Dumais.
 * @link https://en.guydumais.digital/disable-jquery-migrate-in-wordpress/
 */
add_filter( 'wp_default_scripts', $af = static function( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '3.4.1' );
    }    
}, PHP_INT_MAX );
unset( $af );
/*
*   Functions to add custom style
*   css Files
*   wp_enqueue_style();
*/

function Template_Add_Styles(){
     global $css ;
     wp_enqueue_style('all-min', $css."main.css?v=4.1" );
}

/*
*   Functions to add custom style
*   JS Files
*   wp_enqueue_script();
*/


function Template_Add_Scripts(){
    global $js;
    wp_enqueue_script('all-js' , $js ."eskelah.js?v=4.4"  , array('jquery'), null,true );
    wp_enqueue_script('all-sjs' , $js ."queryloader2.min.js?v=3"  , array('jquery'), null,true );
}


/*
*   Add Actions
*   JS Files
*   wp_enqueue_script();
*/
add_action( 'wp_enqueue_scripts', 'Template_Add_Styles' );
add_action( 'wp_enqueue_scripts', 'Template_Add_Scripts' );


/*
*
*   ADD Media Uploader JS TO ADMIN FOOTER
*
*/
add_action( 'admin_enqueue_scripts', 'themed_admin_scripts_media' );
if( !function_exists('themed_admin_scripts_media') ) {
    function themed_admin_scripts_media() {
        wp_enqueue_media();
       wp_enqueue_script( 'wp-media-uploader2', get_template_directory_uri() . '/core/assets/js/wp_media_uploader.js', array( 'jquery' ), 3.0 );
        wp_enqueue_script('custom-admin-js' , get_template_directory_uri() . '/core/assets/js/admin.js',array('jquery'));
    }

}

/*
*
*   ADD CSS TO ADMIN FOOTER
*
*/
function load_custom_wp_admin_style() {
        global $css;
        wp_register_style( 'custom_wp_admin_css', $css . '/admin.css', true, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
        wp_register_style( 'redux_it', THEME_URL.'/core/theme-options/ReduxCore/assets/css/redux-style.css', true, '1.0.0' );
        wp_enqueue_style( 'redux_it' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );



/*
*
*   INITALIZE Media Uploader JS TO ADMIN FOOTER
*/
function wp_media_script() { 
    echo "<script>  $.wpMediaUploader();  </script> ";
}
add_action('admin_footer', 'wp_media_script');


