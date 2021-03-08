<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Custom Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'section_1',
      'title' => 'Section 1',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'section_1_text',
          'type'  => 'text',
          'title' => 'Text Field',
        ),
        // end: a field

        array(
          'id'    => 'section_1_textarea',
          'type'  => 'textarea',
          'title' => 'Textarea Field',
        ),

        array(
          'id'    => 'section_1_upload',
          'type'  => 'upload',
          'title' => 'Upload Field',
        ),

        array(
          'id'    => 'section_1_switcher',
          'type'  => 'switcher',
          'title' => 'Switcher Field',
          'label' => 'Yes, Please do it.',
        ),

      ), // end: fields
    ), // end: a section

    // begin: a section
    array(
      'name'  => 'section_2',
      'title' => 'Section 2',
      'icon'  => 'fa fa-tint',
      'fields' => array(

        array(
          'id'      => 'section_2_color_picker_1',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 1',
          'default' => '#2ecc71',
        ),

        array(
          'id'      => 'section_2_color_picker_2',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 2',
          'default' => '#3498db',
        ),

        array(
          'id'      => 'section_2_color_picker_3',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 3',
          'default' => '#9b59b6',
        ),

        array(
          'id'      => 'section_2_color_picker_4',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 4',
          'default' => '#34495e',
        ),

        array(
          'id'      => 'section_2_color_picker_5',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 5',
          'default' => '#e67e22',
        ),

      ),
    ),
    // end: a section

  ),
);

// -----------------------------------------
// Page Side Metabox Options               -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_side_options',
  'title'     => 'Custom Page Side Options',
  'post_type' => 'page',
  'context'   => 'side',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_3',
      'fields' => array(

        array(
          'id'        => 'section_3_image_select',
          'type'      => 'image_select',
          'options'   => array(
            'value-1' => 'http://codestarframework.com/assets/images/placeholder/65x65-2ecc71.gif',
            'value-2' => 'http://codestarframework.com/assets/images/placeholder/65x65-e74c3c.gif',
            'value-3' => 'http://codestarframework.com/assets/images/placeholder/65x65-3498db.gif',
          ),
          'default'   => 'value-2',
        ),

        array(
          'id'            => 'section_3_text',
          'type'          => 'text',
          'attributes'    => array(
            'placeholder' => 'do stuff'
          )
        ),

        array(
          'id'      => 'section_3_switcher',
          'type'    => 'switcher',
          'label'   => 'Are you sure ?',
          'default' => true
        ),

      ),
    ),

  ),
);









// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'project_info',
  'title'     => 'معلومات التحدي',
  'post_type' => 'projects',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(


     

        array(
          'id'    => 'video_link',
          'type'  => 'text',
          'title' => 'رابط الفيديو',
        ),
          
     
        array(
          'id'    => 'list_of_company',
          'type'  => 'textarea',
          'title' => 'لائحة الملاحين',
        ),


        array(
          'id'    => 'agent',
          'type'  => 'text',
          'title' => 'الشريك',
        ),

        array(
          'id'    => 'challenge',
          'type'  => 'text',
          'title' => 'التحدي ',
        ),
          

        array(
          'id'    => 'year',
          'type'  => 'text',
          'title' => 'سنة الإنتاج ',
        ),
          
        array(
          'id'    => 'duration',
          'type'  => 'text',
          'title' => 'مدة العمل',
        ),
          
       array(
          'id'    => 'little_description',
          'type'  => 'textarea',
          'title' => 'النبذة التعريفية',
        ),


      ),
    ),

  ),
);










// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'proposal_info',
  'title'     => 'معلومات الطلب',
  'post_type' => 'proposals',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(
        array(
          'id'    => 'your_name',
          'type'  => 'text',
          'title' => 'الإسم الكامل',
        ),
        array(
          'id'    => 'your_service',
          'type'  => 'text',
          'title' => 'الخدمة التي تم طلبها',
        ),
          array(
          'id'    => 'your_bidget',
          'type'  => 'text',
          'title' => 'الميزانية',
        ),
        array(
          'id'    => 'your_email',
          'type'  => 'text',
          'title' => 'البريد الإلكتروني',
        ),
        array(
          'id'    => 'your_phone',
          'type'  => 'text',
          'title' => 'رقم الهاتف',
        ),array(
          'id'    => 'your_message',
          'type'  => 'textarea',
          'title' => 'نص الرسالة',
        ),
      
          
        


      ),
    ),

  ),
);












// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'post_info',
  'title'     => 'معلومات المقالة',
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(
        array(
          'id'    => 'writer',
          'type'  => 'text',
          'title' => 'اسم الكاتب',
        ),
          
     
      
       


      ),
    ),

  ),
);

















CSFramework_Metabox::instance( $options );
