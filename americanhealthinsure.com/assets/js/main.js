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


    $.ajax({
        url: 'http://' + http_host + '/lp/api/v1/ext-misc/zipcode-by-ip/',
        type:'GET',
        data: {
            format: 'json'
        },
        success: function (response) {
            $('#zip').val(response.zip_code);
        }
    });

    /*$.ajax({
        url: 'http://' + http_host + '/lp/api/v1/core/phone/',
        type:'GET',
        data: {
            format: 'json',
            offer_id: $('#offer_id').val(),
            aff_sub: $('#aff_sub').val(),
            affiliate_id: $('#aff_id').val()
        },
        success: function (response) {
            response.phone = response.phone.replace(/(\d\d\d)(\d\d\d)(\d\d\d\d)/, '($1) $2-$3');
            $('.phone').attr('href', response.phone);
            $('.phone').html('<strong>' + response.phone + '</strong>');
            $('input[name=phone_number]').val(response.phone);
        }
    });*/

    $.ajax({
        url: 'http://' + http_host + '/lp/api/v1/core/cities',
        type:'GET',
        data: {
            format: 'json',
            zip_code: $('#zip').val(),
        },
        success: function (response) {
            $('#state').val(response.state);
            $('#city').val(response.city);
        }
    });


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
        var myOffset = new Date().getTimezoneOffset() / 60;
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
        if (dob_day < 10) {
            dob_day = '0' + dob_day;
        }
        ;
        dob_fastquote = dob_year + '-' + dob_month + '-' + dob_day;
    });

    var isAfterHrs = afterHrs();

    $('#actionform').load(function () {
        data = Base64.encode($('#email').val());
        state = $('#state').val();
        var agile_restricted_state = ["MA", "MD", "MI", "MN", "MT", "NJ", "NY", "RI", "VT"];

        thankyou_short = 'thankyou.php?form=short' + '&var=' + data
            + '&zip=' + $('#zip').val() + '&offer_id=' + $('#offer_id').val()
            + '&aff_id=' + $('#aff_id').val() + '&aff_sub=' + $('#aff_sub').val()
            + '&inty=' + $('#insurance_type').val() + '&trans_id=' + $('#trans_id').val()
            + '&aff_ref=' + $('#aff_ref').val();

        thankyou_long = 'thankyou.php?form=long' + '&var=' + data
            + '&zip=' + $('#zip').val() + '&offer_id=' + $('#offer_id').val()
            + '&aff_id=' + $('#aff_id').val() + '&aff_sub=' + $('#aff_sub').val()
            + '&inty=' + $('#insurance_type').val() + '&trans_id=' + $('#trans_id').val()
            + '&aff_ref=' + $('#aff_ref').val();

        agile_health = 'http://agilehealthinsurance.7eer.net/c/251325/284493/3530?'
            + 'p.census[location][zip]=' + $('#zip').val() + '&p.census[member][0][dob]=' + dob_fastquote
            + '&p.census[member][0][gender]=' + $('#gender').val() + '&p.census[member][0][role]=P';

        if ($('#insurance_type').val() == 'health') {
            if (($.inArray(state, agile_restricted_state) > -1)) {
                if (formid == 1) {
                    $(location).attr('href', thankyou_short);
                } else {
                    $(location).attr('href', thankyou_long);
                }
            } else if (isAfterHrs) {
                $(location).attr('href', agile_health);
            } else {
                a = Math.floor(10 * Math.random());
                var isEven = function (number) {
                    return (number % 2 == 0) ? true : false;
                };
                if (isEven(a)) {
                    if (formid == 1) {
                        $(location).attr('href', thankyou_short);
                    } else {
                        $(location).attr('href', thankyou_long);
                    }
                } else {
                    $(location).attr('href', agile_health);
                }
            }
        } else {
            if (formid == 1) {
                $(location).attr('href', thankyou_short);
            } else {
                $(location).attr('href', thankyou_long);
            }
        }
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
    }
    ;

    $('#DateOfBirth_Day,#DateOfBirth_Month,#DateOfBirth_Year').change(function () {
        $('#applicant_dob').val($('#DateOfBirth_Month option:selected').val() + ' ' + $('#DateOfBirth_Day option:selected').val() + ' ' + $('#DateOfBirth_Year option:selected').val());

        if (getAge() >= 64.5) {
            $('#health_only').slideUp(300);
            $('#insurance_type').val('medicare');
            $('#form_title').text(function () {
                return $(this).text().replace("Health", "Medicare");
            });
            $("#household-size").prop('required', false);
            $("#income").prop('required', false);

        } else {

            if (getAge() < 64.5) {
                $('#health_only').slideDown(300);
                $('#insurance_type').val('health');
                $('#form_title').text(function () {
                    return $(this).text().replace("Medicare", "Health");
                });
                $("#household-size").prop('required', true);
                $("#income").prop('required', true);
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


    function fill_income() {
        $("#income").empty();
        switch ($("#household-size").val()) {
            case '1':
                $("#income").append(new Option("$0 to $29,000", "0-29,000"));
                $("#income").append(new Option("$29,000 to $47,000", "29,000-47,000"));
                $("#income").append(new Option("$47,000 or more", "47,000 or more"));
                $("#income").val("29,000-47,000");
                break;
            case '2':
                $("#income").append(new Option("$0 to $40,000", "0-40,000"));
                $("#income").append(new Option("$40,000 to $64,000", "40,000-64,000"));
                $("#income").append(new Option("$64,000 or more", "64,000 or more"));
                $("#income").val("40,000-64,000");
                break;
            case '3':
                $("#income").append(new Option("$0 to $50,000", "0-50,000"));
                $("#income").append(new Option("$50,000 to $80,000", "50,000-80,000"));
                $("#income").append(new Option("$80,000 or more", "80,000 or more"));
                $("#income").val("50,000-80,000");
                break;
            case '4':
                $("#income").append(new Option("$0 to $61,000", "0-61,000"));
                $("#income").append(new Option("$61,000 to $97,000", "61,000-97,000"));
                $("#income").append(new Option("$97,000 or more", "97,000 or more"));
                $("#income").val("61,000-97,000");
                break;
            case '5':
                $("#income").append(new Option("$0 to $71,000", "0-71,000"));
                $("#income").append(new Option("$71,000 to $114,000", "71,000-114,000"));
                $("#income").append(new Option("$114,000 or more", "114,000 or more"));
                $("#income").val("71,000-114,000");
                break;
            case '6':
                $("#income").append(new Option("$0 to $81,000", "0-81,000"));
                $("#income").append(new Option("$81,000 to $130,000", "81,000-130,000"));
                $("#income").append(new Option("$130,000 or more", "130,000 or more"));
                $("#income").val("81,000-130,000");
                break;
            case '7':
                $("#income").append(new Option("$0 to $92,000", "0-92,000"));
                $("#income").append(new Option("$92,000 to $147,000", "92,000-147,000"));
                $("#income").append(new Option("$147,000 or more", "147,000 or more"));
                $("#income").val("92,000-147,000");
                break;
            case '8+':
                $("#income").append(new Option("$0 to $102,000", "0-102,000"));
                $("#income").append(new Option("$102,000 to $164,000", "102,000-164,000"));
                $("#income").append(new Option("$164,000 or more", "164,000 or more"));
                $("#income").val("102,000-164,000");
                break;
        }

    }

    $(document).ready(fill_income)
    $("#household-size").change(fill_income)



    /*
     jQuery Masked Input Plugin
     Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
     Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
     Version: 1.4.1
     */

    !function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});


    /* input mask patterns */
    jQuery(function ($) {
        $("#tel").mask("(999) 999-9999", {autoclear: false});
        $("#zip").mask("99999", {placeholder: "_____"})
    });


    /*$(window).load(function () {
        var phones = [{"mask": "(###) ###-####"}];
        $('#tel').inputmask({
            mask: phones,
            greedy: false,
            definitions: {'#': {validator: "[0-9]", cardinality: 1}}
        });
        var zips = [{"mask": "#####"}];
        $('#zip').inputmask({
            mask: zips,
            greedy: false,
            definitions: {'#': {validator: "[0-9]", cardinality: 1}}
        });
    });*/


    $("form").submit(function(e) {
        var ref = $(this).find("[required]");
        $(ref).each(function(){
            if ( $(this).val() == '' )
            {
                alert("Required field should not be blank.");
                $(this).focus();
                e.preventDefault();
                return false;
            }
        });  return true;
    });


    $("form").submit(function(){
        $("#preloader").css("z-index", "10");
    });
    terms = $('.terms').text();
    $("#TCPA_Language").val(terms);

});