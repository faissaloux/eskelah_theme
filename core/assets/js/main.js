	jQuery(function($){

$(document).ready(function() {
  $('#phone-menu').sidr();
});

$("#closeForm").click(function(){
        $(".sucess-submit").hide();
        $(".demande-Form").hide();
    });
	
	$("body #demandeNow").click(function(){
        $('#MaindemandeForm').show();
        $(".demande-Form").show();
    });
	
	
	


});