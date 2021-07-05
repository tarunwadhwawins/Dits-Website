$(function () {
    
    $('.addQuote').click(function(){
        getQuoteCountries();
    })
    
    jQuery(".quotecountries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).attr('countryid');
        if(countryId != ''){
            getQuoteStates(countryId);
        }
        else{
            jQuery(".quotestates option:gt(0)").remove();
        }
    });
    jQuery(".quotestates").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            getQuoteCities(stateId);
        }
        else{
            jQuery(".quotecities option:gt(0)").remove();
        }
    });

    jQuery(".quotecities").on("change", function(ev) {
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

function getQuoteCountries() {
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

    var countryClasses = jQuery('#quotecountryId').attr('class');

    var cC = countryClasses.split(" ");
    cC.shift();
    var addClasses = '';
    if (cC.length > 0)
    {
        acC = cC.join();
        addClasses = '&addClasses=' + encodeURIComponent(acC);
    }

    var presel = false;
    var iip = 'N';
    jQuery.each(cC, function (index, value) {
        if (value.match("^presel-")) {
            presel = value.substring(7);

        }
        if (value.match("^presel-byi"))
        {
            var iip = 'Y';
        }
    });


    var url = rootUrl + '?type=getCountries' + addParams + addClasses;
    var method = "post";
    var data = {};
    jQuery('.quotecountries').find("option:eq(0)").html("Please wait..");
    call.send(data, url, method, function (data) {
        jQuery('.quotecountries').find("option:eq(0)").html("Select Country");

        if (data.tp == 1) {
            if (presel == 'byip')
            {
                presel = data['presel'];
                console.log('2 presel is set as ' + presel);
            }


            if (jQuery.inArray("group-continents", cC) > -1)
            {
                var $select = jQuery('.quotecountries');
                console.log(data['result']);
                jQuery.each(data['result'], function (i, optgroups) {
                    var $optgroup = jQuery("<optgroup>", {label: i});
                    if (optgroups.length > 0)
                    {
                        $optgroup.appendTo($select);
                    }

                    jQuery.each(optgroups, function (groupName, options) {
                        var coption = jQuery('<option />');
                        coption.attr('value', options.name).text(options.name);
                        coption.attr('countryid', options.id);
                        if (presel) {
                            if (presel.toUpperCase() == options.id) {
                                coption.attr('selected', 'selected');
                            }
                        }
                        coption.appendTo($optgroup);
                    });
                });
            } else
            {
                jQuery.each(data['result'], function (key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    option.attr('countryid', key);
                    if (presel)
                    {
                        if (presel.toUpperCase() == key)
                        {
                            option.attr('selected', 'selected');
                        }
                    }
                    jQuery('.quotecountries').append(option);
                });
            }
            if (presel)
            {
                jQuery('.quotecountries').trigger('change');
            }
            jQuery(".quotecountries").prop("disabled", false);
        } else {
            alert(data.msg);
        }
    });
}

function getQuoteStates(id) {
    jQuery(".quotestates option:gt(0)").remove();
    jQuery(".quotecities option:gt(0)").remove();
    //get additional fields
    var stateClasses = jQuery('#quotestateId').attr('class');

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
    var url = rootUrl + '?type=getStates&countryId=' + id + addParams + addClasses;
    var method = "post";
    var data = {};
    jQuery('.quotestates').find("option:eq(0)").html("Please wait..");
    call.send(data, url, method, function (data) {
        jQuery('.quotestates').find("option:eq(0)").html("Select State");
        if (data.tp == 1) {
            jQuery.each(data['result'], function (key, val) {
                var option = jQuery('<option />');
                option.attr('value', val).text(val);
                option.attr('stateid', key);
                jQuery('.quotestates').append(option);
            });
            jQuery(".quotestates").prop("disabled", false);
        } else {
            alert(data.msg);
        }
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