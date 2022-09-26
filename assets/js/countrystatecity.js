$(function () {
    getCountries();
    
    jQuery(".countries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).data('countryid');
        console.log(countryId);
        if(countryId != ''){
            getStates(countryId);
        }
        else{
            jQuery(".states option:gt(0)").remove();
        }
    });
    // jQuery(".states").on("change", function(ev) {
    //     var stateId = jQuery("option:selected", this).data('stateid');
    //     if(stateId != ''){
    //         getCities(stateId);
    //     }
    //     else{
    //         jQuery(".cities option:gt(0)").remove();
    //     }
    // });

    jQuery(".cities").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            confCity(cityId);
        }
    });
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

function getCountries() {
    var rootUrl = "core/ajax?action=getCountry";
    
    var call = new ajaxCall();

    var url = rootUrl;
    var method = "get";
    var data = {};
    jQuery('.countries').find("option:eq(0)").html("Please wait..");
    call.send(data, url, method, function (data) {
        jQuery('.countries').find("option:eq(0)").html("Select Country");
        countryOption = data.Output;
        jQuery('.countries').append(countryOption);
       
    });
}

function getStates(id) {
    jQuery(".states option:gt(0)").remove();
    jQuery(".cities option:gt(0)").remove();
    //get additional fields
    var stateClasses = jQuery('#stateId').attr('class');

    var rootUrl = "core/ajax?action=getState";
    var call = new ajaxCall();
    var url = rootUrl + '&countryId=' + id;
    var method = "get";
    var data = {};
    jQuery('.states').find("option:eq(0)").html("Please wait..");
    call.send(data, url, method, function (data) {
        jQuery('.states').find("option:eq(0)").html("Select State");
        stateOption = data.Output;
        jQuery('.states').append(stateOption);
        
    });
}

function getCities(id) {
    jQuery(".cities option:gt(0)").remove();
    //get additional fields
    var stateClasses = jQuery('#cityId').attr('class');

    var rootUrl = "core/ajax?action=getCity";


    var call = new ajaxCall();

    
    var url = rootUrl + '&stateId=' + id ;
    var method = "get";
    var data = {};
    jQuery('.cities').find("option:eq(0)").html("Please wait..");
    call.send(data, url, method, function (data) {
        jQuery('.cities').find("option:eq(0)").html("Select City");
        cityOption = data.Output;
        jQuery('.cities').append(cityOption);
    });
}

function confCity(id) {
    //   console.log(id);
    //   console.log('started');
    var rootUrl = "https://geodata.solutions/api/api.php";
    var url = rootUrl + '?type=confCity&countryId=' + jQuery('#countryId option:selected').attr('countryid') + '&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
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


