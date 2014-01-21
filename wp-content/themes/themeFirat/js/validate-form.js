jQuery(document).ready(function() {
  
  jQuery("#formData").validate({
		rules: {	
            student_Name: {required: true },
            parent_Name: {required: true},
            parent_email_address: {required:true, minlength:2 },
            Address: {required: true},
            City_State: {required: true},
            parent_primary: {required: true},
            parent_secondary: {required: false},
            student_high:{required:true},
            student_grade:{required: true},
            Select_your_Practice:{required:true},
            Help_on_every:{required: true},
            practice_test:{required: true},
            date_test:{required: true},
            question_one:{required: false},
            question_two:{required: true},
            question_thrre:{required: true},
            question_for:{required: true}, 
            question_five:{required: true}
		},
	    highlight: function(label) {
			jQuery('#msg').html('');
		},
	    success: function(label) {
			jQuery('#msg').html('');
	    },		
		submitHandler: function() {
		   var query = jQuery('#formData :input:not(input[type=submit])').serialize();
		   var srcPath = jQuery(".send").attr('rel');	
			  jQuery.ajax({
                    type: "POST",
                    url: srcPath,
                    data: jQuery("#formData").serialize(),
                    beforeSend: function(objeto){
                            jQuery("#msg").html("Sending...");
                     },
                    success: function(data) {
                            jQuery('#msg').html(data);
                            jQuery('#student_Name').text('');
                    }				
			});
		}
	});
	
	
	
	
	/****		
	*/	
     $("#formdata-one").validate({
                rules: {
                    first_name: {required: true },
                    last_name: {required: true},
                    email: {required: true, minlength: 2},
                    phone_number: {required: true},
                    __address: {required: false},
                    __city_state: {required: true},
                     __zip_code:{required:false},
                    you_like_contacted:{required: true},
                    consultation_session:{required:true},
                    student_name:{required: true},
                    entry_single:{required: true},
                    student_current_school:{required: true},
                    student_overall_gpa:{required: true},
                    standardid_tests:{required: true}, 
                    student_scores:{required: false},
                    student_struggles:{required: true},
                    fes_service:{required: true},
                    about_us:{required: false}
                    
    //  //        sexo: {required: true, minlength: 2},
    //              email: {required: false, email: true},
    //              telefono: {digits: true, minlength: 2, maxlength: 15},
    //              telefono_referencia: {digits: true, minlength: 2, maxlength: 15}
                },
    //          messages: {
    //              nombres: "**",
    //              apellidos: "**",
    //              email: "**",
    //              telefono: "**",
    //              telefono_referencia: "**"
    //          },
                submitHandler: function(form) {
                        
                    var url = $(form).attr('action');               
                    var formData = new FormData($(form)[0]);
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                             $('#datos_form_two').html(data);                               
                        }
                    });
                }
            });
  
  
});
