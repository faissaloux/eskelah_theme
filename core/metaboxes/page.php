<?php

add_action( 'admin_menu', 'st_page_metabox_init' );
function st_page_metabox_init() {
    add_meta_box( 'page_metabox', 'اعدادات الصفحة', 'page_metabox', 'projects', 'normal', 'high');
}
function page_metabox( $post, $callback_args ) {
    ?>
    <input type="hidden" name="page_metabox_nonce" value="<?php echo wp_create_nonce(basename(__FILE__)); ?>">
    <table class="form-table page-metabox">
          <style>
	.page-metabox tr {
    border-bottom: 1px solid #23282d14;
}

.page-metabox tr:last-child {
    border: none;
}		  
	
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}	  
		</style>
          
           <tr>
                <td width="20%">
                   <label for="">ترتيب - يسمح بإدخال الأرقام فقط رجاء</label>
                </td>
                <td>
                    <input placeholder="وصف الصفحة" style="width: 100%" name="tartib" id="tartib" value="<?php echo get_post_meta($post->ID,'tartib',true) ?>" />
                </td>
            </tr>
          
           
                                   
                         
    </table>
<?php
}

add_action( 'save_post', 'st_save_page_metabox' );
function st_save_page_metabox( $post ) {
    if (!wp_verify_nonce($_POST['page_metabox_nonce'], basename(__FILE__))) {
        return $post;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post;
    }
    if ( !current_user_can('edit_post', $post) ) {
        return $post;
    }
	
	$fields = array('tartib');
	foreach($fields as $field) {
		$data = $_POST[$field];
		if( $data != '' ) {
			update_post_meta($post,$field,$data);
		} else {
			delete_post_meta($post,$field);
		}
	}

}
