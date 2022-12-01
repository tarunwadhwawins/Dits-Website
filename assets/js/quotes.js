$(function () {
    $('input').on('click', function(){
        $(this).focus();
    })
    $('#quoteForm').validate({
        rules: {
            quotes_first_name: { 
                required: true
            },
            quotes_email: {
                required: true,
                email: true
            },
            quotes_phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            quotes_findUs: {
                required: true
            },
            quotes_message: {
                required: true
            }
        },
        messages: {
    
        },
        submitHandler: function(form) {
            var button =  $($(this)[0].currentForm).find('button');
            var captcha = $($(this)[0].currentForm).find('.g-recaptcha-response');
            if(captcha.val() == ''){
                $($(this)[0].currentForm).find(".recaptchaerror").show();
                return false;
            }
            button.attr('disabled','disabled');
             $(".formLoader").css('display','inline-block');
            $.ajax({
                url: base_url+"/core/general?action=QuotesFormSave",
                type: "POST",
                data: $(form).serialize(),
                success: function (response) {
                    var $messageDiv = $('#quotesmessage')
                    $messageDiv.hide().html(response.Message);          
                    if(response.Success == true) {
                        window.location=base_url+"thankyou";
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

    $('.addQuote').click(function(){
        getQuoteCountries();
    })
    
    jQuery(".quotecountries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).data('countryid');
        if(countryId != ''){
            getQuoteStates(countryId);
        }
        else{
            jQuery(".quotestates option:gt(0)").remove();
        }
    });
    // jQuery(".quotestates").on("change", function(ev) {
    //     var stateId = jQuery("option:selected", this).attr('stateid');
    //     if(stateId != ''){
    //         getQuoteCities(stateId);
    //     }
    //     else{
    //         jQuery(".quotecities option:gt(0)").remove();
    //     }
    // });

    // jQuery(".quotecities").on("change", function(ev) {
    //     var cityId = jQuery("option:selected", this).val();
    //     if(cityId != ''){
    //         confCity(cityId);
    //     }
    // });
})

function ajaxCall() {
    this.send = function (data, url, method, success, type) {
        type = type || 'json';
        var successRes = function (data) {
            success(data);
        }

        var errorRes = function (e) {
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });
    }

}

function getQuoteCountries() {
    var rootUrl =  base_url+"/core/ajax?action=getCountry";
    
    var call = new ajaxCall();

    var url = rootUrl;
    var method = "get";
    var data = {};
    jQuery('.quotecountries').find("option:eq(0)").html("Please wait..");
    call.send(data, url, method, function (data) {
        jQuery('.quotecountries').find("option:eq(0)").html("Select Country");
        countryOption = data.Output;
        jQuery('.quotecountries').append(countryOption);
       
    });
}

function getQuoteStates(id) {
    jQuery(".states option:gt(0)").remove();
    jQuery(".cities option:gt(0)").remove();
    //get additional fields

    var rootUrl =  base_url+"/core/ajax?action=getState";
    var call = new ajaxCall();
    var url = rootUrl + '&countryId=' + id;
    var method = "get";
    var data = {};
    jQuery('.quotestates').find("option:eq(0)").html("Please wait..");
    call.send(data, url, method, function (data) {
        jQuery('.quotestates').find("option:eq(0)").html("Select State");
        stateOption = data.Output;
        jQuery('.quotestates').append(stateOption);
        
    });
}

function getQuoteCities(id) {
    jQuery(".quotecities option:gt(0)").remove();
    //get additional fields
    var stateClasses = jQuery('#quotecityId').attr('class');

    var rootUrl = "https://geodata.solutions/api/api.php";
    //now check for set values
    var addParams = '';
    if (jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if (jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }

    var call = new ajaxCall();

    var cC = stateClasses.split(" ");
    cC.shift();
    var addClasses = '';
    if (cC.length > 0)
    {
        acC = cC.join();
        addClasses = '&addClasses=' + encodeURIComponent(acC);
    }
    var url = rootUrl + '?type=getCities&countryId=' + jQuery('#quotecountryId option:selected').attr('countryid') + '&stateId=' + id + addParams + addClasses;
    var method = "post";
    var data = {};
    jQuery('.quotecities').find("option:eq(0)").html("Please wait..");
    call.send(data, url, method, function (data) {
        jQuery('.quotecities').find("option:eq(0)").html("Select City");
        if (data.tp == 1) {
            var listlen = Object.keys(data['result']).length;

            if (listlen > 0)
            {
                jQuery.each(data['result'], function (key, val) {

                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    jQuery('.quotecities').append(option);
                });
            } else
            {
                var usestate = jQuery('#quotestateId option:selected').val();
                var option = jQuery('<option />');
                option.attr('value', usestate).text(usestate);
                option.attr('selected', 'selected');
                jQuery('.quotecities').append(option);
            }

            jQuery(".quotecities").prop("disabled", false);
        } else {
            alert(data.msg);
        }
    });
}

function confCity(id) {
    //   console.log(id);
    //   console.log('started');
    var rootUrl = "https://geodata.solutions/api/api.php";
    var url = rootUrl + '?type=confCity&countryId=' + jQuery('#quotecountryId option:selected').attr('countryid') + '&stateId=' + jQuery('#quotestateId option:selected').attr('stateid') + '&cityId=' + id;
    var method = "post";
    var data = {};
//    call.send(data, url, method, function (data) {
//        if (data) {
//            //    alert(data);
//        } else {
//            //   alert('No data');
//        }
//    });
};