/*

 $.ajax({
 url: 'http://api.apigurus.com/iplocation/v1.8/locateip',
 type:'GET',
 dataType: 'json',
 data: { key: "ExampleKey123456789", ip : $('#ip_address').val()} ,


 ?key=&ip=12.25.222.242&format=JSON


 success: function (response) {
 var city = response.city;
 window.state = city[city.length - 2] + city[city.length - 1];
 console.log(state);
 }
 });

 */


$(window).load(function () {


    /*$('#carousel').flexslider({
     animation: "slide",
     controlNav: false,
     animationLoop: true,
     slideshow: false,
     itemWidth: 210,
     itemMargin: 0
     });*/

    $('input#state').val(window.state);

    //$(".validate").validate();


    /*
     $('#submit').on('click', function (e) {
     var passed = true,
     errors = [],
     errorCount = 0,
     html = '',
     errs;

     /!*if(typeof(LincxSettings) != "undefined") {
     LincxSettings.typvr120 = "off";
     }
     //e.preventDefault();
     $('#error-list').remove();*!/
     // check all the radio buttons

     /!* if(self_emp) {
     if ( ! $('input[name=self_emp]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Are You Self-Employed Must be Answered';
     ++errorCount;
     }
     };

     if(insured) {
     if ( ! $('input[name=insured]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Are You Currently Insured Must be Answered';
     ++errorCount;
     }
     };

     if(Spouse) {
     if ( ! $('input[name=Spouse]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Include Spouse Must be Answered';
     ++errorCount;
     }
     };

     if(affordable) {
     if ( ! $('input[name=affordable]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Is this something you would be able to afford Must be Answered';
     ++errorCount;
     }
     };

     if(hospitalized) {
     if ( ! $('input[name=hospitalized]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Anyone Hospitalized in Last 5 Years Must be Answered';
     ++errorCount;
     }
     };

     if(physician) {
     if ( ! $('input[name=physician]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Anyone Treated by Physician in Last 12 Months Must be Answered';
     ++errorCount;
     }
     };

     if(prescription) {
     if ( ! $('input[name=prescription]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Anyone Taking Prescription Medications Must be Answered';
     ++errorCount;
     }
     };

     if(health) {
     if ( ! $('input[name=health]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Any Major Health Conditions Must be Answered';
     ++errorCount;
     }
     };

     if(previously_denied) {
     if ( ! $('input[name=previously-denied]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Have You Ever Been Denied Health Insurance Must be Answered';
     ++errorCount;
     }
     };

     if(ss_disabled) {
     if ( ! $('input[name=ss-disabled]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Are You Currently on Social Security or Disability Must be Answered';
     ++errorCount;
     }
     };

     if(pregnant) {
     if (!$('input[name=pregnant]:checked').val()) {
     passed = false;
     errors[errorCount] = 'Is There Anyone on the Policy Who is Pregnant Must be Answered';
     ++errorCount;
     }
     };*!/


     $('#h-conditions .checklist input').each(function (i, v) {
     if (this.checked) {
     $(this).val('Y');
     } else {
     $(this).val('N');
     }
     });

     if ($('.validate').valid() && passed) {
     return true;
     } else {
     if (!passed) {
     errs = $('<div id="error-list" class="error"></div>');
     html = '<ul class="error-list">';
     for (i = 0; i < errorCount; ++i) {
     html = html + '<li>' + errors[i] + '</li>';
     }
     html = html + '</ul>';
     errs.html(html);
     $('#submit').parent().before(errs[0]);
     passed = true;
     }
     return false;
     }

     });
     */


    $('#birthday_selects select').change(function () {
        $('#applicant_dob').val($('#DateOfBirth_Month option:selected').val() + ' ' + $('#DateOfBirth_Day option:selected').val() + ' ' + $('#DateOfBirth_Year option:selected').val());
    });

    $('#phone_container input').focusout(function () {
        $('#main_phone').val('(' + $('#phone').val() + ')' + $('#phone2').val() + $('#phone3').val());
    });

    $('#fname').focus(function () {
        if ($('#fname').val() == 'First Name') {
            $('#fname').val("");
        }
    });

    $('#fname').focusout(function () {
        if ($('#fname').val() == '') {
            $('#fname').val("First Name");
        }
    });

    $('#lname').focus(function () {
        if ($('#lname').val() == 'Last Name') {
            $('#lname').val("");
        }
    });

    $('#lname').focusout(function () {
        if ($('#lname').val() == '') {
            $('#lname').val("Last Name");
        }
    });

    function afterHrs() {
        var myOffset = new Date().getTimezoneOffset()/60;
        myLocalHr = new Date().getHours();
        UTCHr = myLocalHr + myOffset;
        PacifHr = UTCHr - 7;
        //Also we would like to have Agile in place for after-hours (8pm pacific to 6am pacific)
        return (PacifHr >= 20 || PacifHr < 6);
    };

    $('#birthday_selects select').change(function () {
        var dob_month = $('#DateOfBirth_Month option:selected').text();
        var dob_day = $('#DateOfBirth_Day option:selected').val();
        var dob_year = $('#DateOfBirth_Year option:selected').val();
        if (dob_day < 10){
            dob_day = '0' + dob_day;
        };
        dob_fastquote = dob_year + '-' + dob_month + '-' + dob_day;
    });

    $('#actionform').load(function () {
        data = Base64.encode($('#email').val());
        state = $('#state').val();
        var agile_restricted_state = ["MA", "MD", "MI", "MN", "MT", "NJ", "NY", "RI", "VT"];

        if (($.inArray(state, agile_restricted_state) < 0) && afterHrs()) {
            $(location).attr('href', 'https://www.agilehealthinsurance.com/term-health-insurance/quote?'
                + 'census[location][zip]=' + $('#zip').val() + '&census[member][0][dob]=' + dob_fastquote
                + '&census[member][0][gender]=' + $('#gender').val() + '&census[member][0][role]=P');
        } else {
            if (formid == 1) {
                $(location).attr('href', 'thankyou.php?form=short' + '&var=' + data
                    + '&zip=' + $('#zip').val() + '&offer_id=' + $('#offer_id').val()
                    + '&affiliate_id=' + $('#affiliate_id').val() + '&aff_sub=' + $('#aff_sub').val()
                    + '&inty=' + $('#insurance_type').val() + '&sub_affiliate_id=' + $('#sub_affiliate_id').val()
                    + '&aff_ref=' + $('#Affiliate_Ref').val());
            } else {
                $(location).attr('href', 'thankyou.php?form=long' + '&var=' + data
                    + '&zip=' + $('#zip').val() + '&offer_id=' + $('#offer_id').val()
                    + '&affiliate_id=' + $('#affiliate_id').val() + '&aff_sub=' + $('#aff_sub').val()
                    + '&inty=' + $('#insurance_type').val() + '&sub_affiliate_id=' + $('#sub_affiliate_id').val()
                    + '&aff_ref=' + $('#Affiliate_Ref').val());
            }
        };
    });

    //$(".modal-inline").colorbox({inline:true, width:"60%",height:"70%"});

    $('#lb_conditions').on('change', function () {
        $('#h-conditions').slideToggle(200);
    });

    $('#lb_conditions2').on('click', function () {
        $('#h-conditions').slideUp(200);
    });

    function getAge() {
        var birthDate = new Date($('#applicant_dob').val());
        var ageMs = Date.now() - birthDate.getTime();
        var age = ageMs / 1000 / 60 / 60 / 24 / 365;
        return age;
    };

    if ($('#form_title').text() == 'The Fastest Way To Get Free Medicare Insurance Quotes') {
        $('#health_only').hide();
    };

    $('#DateOfBirth_Day,#DateOfBirth_Month,#DateOfBirth_Year').change(function () {
        $('#applicant_dob').val($('#DateOfBirth_Month option:selected').val() + ' ' + $('#DateOfBirth_Day option:selected').val() + ' ' + $('#DateOfBirth_Year option:selected').val());

        if (getAge() >= 64.5) {
            $('#health_only').slideUp(300);
            $('#insurance_type').val('medicare');
            $('#form_title').text(function () {
                return $(this).text().replace("Health", "Medicare");
            });
            $("#household-size").prop('required',false);
            $("#income").prop('required',false);

        } else {

            if (getAge() < 64.5) {
                $('#health_only').slideDown(300);
                $('#insurance_type').val('health');
                $('#form_title').text(function () {
                    return $(this).text().replace("Medicare", "Health");
                });
                $("#household-size").prop('required',true);
                $("#income").prop('required',true);
            }
        }
    });


    $(function () {

        /*
         $(document).delegate("a","click",function() {
         window.onbeforeunload = null;
         });*/

        /*$(document).delegate("form","click",function() {
         window.onbeforeunload = null;
         });
         */

    });


    /* function to hide/show health condtions on long form - Simon Lacey */

    function h_conditions() {
        document.getElementById('previous_conditons').style.display = "none";
    }

    function show() {
        document.getElementById('previous_conditons').style.display = "block";
    }


    /* BrokersWeb Exit Script ---------------------------
     var closewindow = true;
     // leave page code for BorkersWeb
     window.onbeforeunload = function() {
     if (closewindow) {
     var ifrm = $('<iframe></iframe>');
     ifrm.attr({
     'src': 'partners-list.php?state=' + window.state,
     'width': '100%',
     'height': '1200',
     'frameborder': '0'
     });
     $('body').empty().append(ifrm[0]);
     //location = 'partners-list.php?state=' + window.state;
     return "Congratulations! You're prequalified by the following providers." + "\n\r" + "Stay on this page to view them now.";
     }
     };

     $('a').on('click', function(){
     closewindow = false;
     });
     $('input[type=submit]').on('click', function(){
     closewindow = false;
     });
     */

});