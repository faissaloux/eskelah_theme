<?php


function my_enqueue() {    
   wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/core/assets/js/ajax-theme.js?v=1.2', array('jquery')  );
    wp_localize_script( 'ajax-script', 'varjs', array('ajax_url' => admin_url( 'admin-ajax.php' )) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );



function return_ajax_result() {
    
                   
                $fullname           = $_POST['fullname'] ;
                $email              = $_POST['email'] ;
                $bidget             = $_POST['bidget'] ;
                $phone              = $_POST['phone'] ;
                $messagesd            = $_POST['message'] ;
                $service            = $_POST['service'] ;


                        $message = "
                        <b>الإسم :</b> $fullname <br><br>
                        <b>البريد الإلكتروني :</b>  $email <br><br>
                        <b>رقم الهاتف</b> : $phone <br><br>
                        <b>الميزانية</b> : $bidget<br><br>
                        <b>الخدمة</b> : $service<br><br>
                        <b>نص الرسالة</b> :
                        $messagesd";
    
    
    
    // Gather post data.
$my_post = array(
    'post_type'     => 'proposals',
    'post_title'    => ' طلب من ' . $fullname ,
    'post_status'   => 'publish',



    'meta_input'   => array(
        'proposal_info' =>  [
'your_name' => $fullname,
        'your_service' =>  $service,
        'your_bidget' =>  $bidget,
        'your_email' =>  $email,
        'your_phone' =>  $phone ,
        'your_message' => $messagesd
],

        
    ),
   
);
 
// Insert the post into the database.
wp_insert_post( $my_post );
    







    
                    if(!empty($email) and !empty($message)){
                    if(!is_email($email)) { echo '<div class="alert alert-danger">البريد الالكتروني غير صحيح</div>'; }
                    }

  $to = 'Abdullah@eskelah.com,info@eskelah.com';
                   
                    $subject = 'طلب مشروع من موقع اسكلة' ;
                    $headers = array('Content-Type: text/html; charset=UTF-8');
                    if(wp_mail( $to, $subject, $message , $headers )) {
                        echo '<div class="alert alert-success">تم الإرسال بنجاح</div>';  
                    }


                    else {
                      echo '<div class="alert alert-danger">المرجوا ادخال المعلومات</div>';  
                    }
    
    die();
    
}
add_action( 'wp_ajax_submit_dak_lmerd', 'return_ajax_result' );
add_action( 'wp_ajax_nopriv_submit_dak_lmerd', 'return_ajax_result' );








function return_ajax_contact() {
    
                    $fullname      = $_POST['fullname'];
                    $email          = $_POST['email'];
                    $phone        = $_POST['phone'];
                    $message        = $_POST['message'];
                
        
                    if(empty($fullname) and empty($email) and empty($message) and empty($phone)){
                        echo '<div class="alert alert-danger">المرجوا ملأ كل المعلومات</div>';                        
                        exit;
                        die();
                    }
    
    
        
                    if(!empty($email) and !empty($message)){
                    if(!is_email($email)) { echo '<div class="alert alert-danger">البريد الالكتروني غير صحيح</div>'; }
                        die();
                    }
                        
                    
                    $to = 'takiddine.job@gmail.com';
                    $headers = array('Content-Type: text/html; charset=UTF-8');
                    if(wp_mail( $to, 'رسالة من موقع اسكلة', $message , $headers )) {
                        echo '<div class="alert alert-success">تم الإرسال بنجاح</div>';  
                    }
               
                    else {
                      echo '<div class="alert alert-danger">المرجوا ادخال المعلومات</div>';  
                    }
    
    die();
    
}
add_action( 'wp_ajax_submit_contact_form', 'return_ajax_contact' );
add_action( 'wp_ajax_nopriv_submit_contact_form', 'return_ajax_contact' );