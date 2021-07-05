$(document).ready(function () {
    $("#contactForm").validate({
        rules: {
            contact_first_name: {
                required: true
            },
			 contact_last_name: {
                required: true
            },
            contact_email: {
                required: true,
                email: true
            },
            contact_phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            contact_company: {
                required: true
            },
			contact_findUs: {
                required: true
            },
            contact_message: {
                required: true
            }
        },
        messages: {
    
        },
        submitHandler: function(form) {
            $.ajax({
                url: "core/general?action=ConactFormSave",
                type: "POST",
                data: $(form).serialize(),
                success: function (response) {
                    var $messageDiv = $('#message')
                    $messageDiv.hide().html(response.Message);			
                    if(response.Success == true) {
						$messageDiv.text('Thank You! Our Team Will Get Back To You Soon!!');
						document.getElementById("contactForm").reset();
                        $messageDiv.addClass('alert alert-success').fadeIn(1500);
                    } else {
						$messageDiv.text('Error');
                        $messageDiv.addClass('alert alert-danger').fadeIn(1500);
                    }

                    setTimeout(function(){
                        $messageDiv.fadeOut(1500);
                    }, 3000);
                }
            });
            return false;
        }
       });
 });