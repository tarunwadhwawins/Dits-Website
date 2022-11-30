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
            var button =  $($(this)[0].currentForm).find('button');
            var captcha = $($(this)[0].currentForm).find('.g-recaptcha-response');
            if(captcha.val() == ''){
                $(".recaptchaerror").show();
                return false;
            }
            button.attr('disabled','disabled');
            
            $(".formLoader").css('display','inline-block');
            $.ajax({
                url: base_url+"/core/general?action=ConactFormSave",
                type: "POST",
                data: $(form).serialize(),
                success: function (response) {
                    var $messageDiv = $('#message')
                    $messageDiv.hide().html(response.Message);			
                    if(response.Success == true) {
						window.location=base_url+"thankyou";
                    } else {
						$messageDiv.text('Error');
                        $messageDiv.addClass('alert alert-danger').fadeIn(1500);
                        button.removeAttr('disabled');
                        $(".formLoader").css('display','none');
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