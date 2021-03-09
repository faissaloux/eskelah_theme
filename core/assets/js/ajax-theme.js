jQuery(function ($) {




jQuery( document ).on( 'submit', '#MaindemandeForm', function(event) {

                 event.preventDefault();
event.stopImmediatePropagation();


            var fullname =   $('#your_name').val();    
            var email    =   $('#your_email').val();    
            var bidget   =   $('#your_bidget').val();    
            var phone    =   $('#your_phone').val();    
            var message  =   $('#your_message').val();    
            var service  =   $('#your_service').val(); 
    
    
    
            var formdata   = new FormData();
            formdata.append('action',"submit_dak_lmerd");
            formdata.append('fullname',fullname);
            formdata.append('email',email);
            formdata.append('bidget',bidget);
            formdata.append('phone',phone);
            formdata.append('message',message);
            formdata.append('service',service);




            
             jQuery.ajax({
                url: varjs.ajax_url,
        		type : 'post',
                contentType : false,
                processData : false,
                dataType : 'html',
        		data : formdata,
                beforeSend  : function() {
                    
                    $('.demande-Form-submiting').show();
                    
                },
        		success : function( response ) {
        		$('.demande-Form-submiting').hide();
                         $('#MaindemandeForm').hide();
                          $('.sucess-submit').show();
                          $('#resetform').click();    
                          console.log(response);
                   
        		},
                complete  : function() {
                  
                },
                error : function( response ){
                    alert('حصل خطأ غير متوقع ، المرجوا المحاولة من جديد');
                }
        	});
  
    return false;
            

});


jQuery( document ).on( 'submit', '#contactForm', function(event) {
                 event.preventDefault();

            var fullname =   $('#contact_full_name').val();    
            var email    =   $('#contact_email').val();    
            var phone  =   $('#contact_phone').val();    
            var message  =   $('#contact_message').val();    
    
            var formdata   = new FormData();
                formdata.append('action',"submit_contact_form");
                formdata.append('fullname',fullname);
                formdata.append('email',email);
                formdata.append('phone',phone);
                formdata.append('message',message);
        
            
             jQuery.ajax({
                url: varjs.ajax_url,
        		type : 'post',
                contentType : false,
                processData : false,
                dataType : 'html',
        		data : formdata,
                beforeSend  : function() {
                    //alert('a hna kanjbdo lik resulta azbi');
                },
        		success : function( response ) {
        		
                         $('.sendresult').html(response);
                         
                         if(response == '<div class="alert alert-success">تم الإرسال بنجاح</div>'){
                   $('#resetform').click();          
                         }
                   

        		},
                complete  : function() {
                    //alert('salina');
                },
                error : function( response ){
                    alert('حصل خطأ غير متوقع ، المرجوا المحاولة من جديد');
                }
        	});
  
});          

});