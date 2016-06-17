$(document).foundation();

/* show / hide medical conditions */

function h_conditions() {
    document.getElementById('previous_conditons').style.display = "none";
}

function show() {
    document.getElementById('previous_conditons').style.display = "block";
}

/* owl carousel custom js */

$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    nav:false,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive: {
        0: {
            items: 3,
            margin:20,
        },
        600: {
            items: 4,
            margin:30,
        },
        1000: {
            items: 7,
            margin:40,
        }
    }
});


/*
 jQuery Masked Input Plugin
 Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
 Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
 Version: 1.4.1
 */

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});


/* input mask patterns */
jQuery(function ($) {
    $("#date").mask("99/99/9999", {autoclear: false});
    $("#phone").mask("(999) 999-9999", {autoclear: false});
//    $("#phone").mask("(999) 999-9999", {placeholder: "(___)-___-____"});
    $("#tin").mask("99-9999999");
    $("#ssn").mask("999-99-9999");
    $("#hero-zip-submit-input").mask("99999", {autoclear: false}, {placeholder: "_____"})
    $("#zip").mask("99999", {placeholder: "_____"})
});

/* clears form on focus and exit unless entire field is filled */
jQuery(function () {
    var input = jQuery('#medicare input[type=text], #userForm textarea');

    input.focus(function () {

        jQuery(this).attr('data-default', jQuery(this).val());
        jQuery(this).val('');

    }).blur(function () {
        var el = jQuery(this);

        if (el.val() == '')
            el.val(el.attr('data-default'));
    });
});

$("[data-input-type=phone]", "body")
    .mask("(999) 999 99 99")
    .bind("blur", function () {
        // force revalidate on blur.

        var frm = $(this).parents("form");
        // if form has a validator
        if ($.data(frm[0], 'validator')) {
            var validator = $(this).parents("form").validate();
            validator.settings.onfocusout.apply(validator, [this]);
        }
    });

$(document).ready(function()
{

    function autoComplete(e){
        var eventKeyCode = e.which;
    }


    function updateZip2()
    {
        var zip1 = $("#hero-zip-submit-input").val();
        $("#zip").val(zip1);
        $.debounce(200, autoComplete(e));
    }


    function updateZip1()
    {
        var zip2 = $("#zip").val();
        $("#hero-zip-submit-input").val(zip2);
    }

    $(document).on("change, keyup", "#hero-zip-submit-input", updateZip2);

    //$(document).on("change, keyup", "#zip", updateZip1);
});




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
        var myOffset = new Date().getTimezoneOffset() / 60;
        var myLocalHr = new Date().getHours();
        var UTCHr = myLocalHr + myOffset;
        var PacifHr = UTCHr - 7;
        //Also we would like to have Agile in place for after-hours (8pm pacific to 6am pacific)
        return (PacifHr >= 20 || PacifHr < 6);
    };



    function get_dob_fastquote () {
        if ($('#date').length){
            var dob_fastquote = $('#date').val();
            dob_fastquote = dob_fastquote.replace('/', '-');
            dob_fastquote = dob_fastquote.replace('/', '-');
            return dob_fastquote;

        }

    }

    $('#date').change(get_dob_fastquote());





    var isAfterHrs = afterHrs();

    $('#actionform').load(function () {
        //data = Base64.encode($('#email').val());
        var state = $('#state').val();
        var agile_restricted_state = ["MA", "MD", "MI", "MN", "MT", "NJ", "NY", "RI", "VT"];

        var thankyou_short = 'thank-you.php?form=short'
            + '&zip=' + $('#zip').val() + '&offer_id=' + $('#offer_id').val()
            + '&affiliate_id=' + $('#affiliate_id').val() + '&aff_sub=' + $('#aff_sub').val()
            + '&inty=' + $('#insurance_type').val() + '&transaction_id=' + $('#transaction_id').val()
            + '&aff_ref=' + $('#Affiliate_Ref').val();

        var thankyou_long = 'thank-you.php?form=long'
            + '&zip=' + $('#zip').val() + '&offer_id=' + $('#offer_id').val()
            + '&affiliate_id=' + $('#affiliate_id').val() + '&aff_sub=' + $('#aff_sub').val()
            + '&inty=' + $('#insurance_type').val() + '&transaction_id=' + $('#transaction_id').val()
            + '&aff_ref=' + $('#Affiliate_Ref').val();

        var agile_health = 'http://agilehealthinsurance.7eer.net/c/251325/284493/3530?'
            + 'p.census[location][zip]=' + $('#zip').val() + '&p.census[member][0][dob]=' + get_dob_fastquote ()
            + '&p.census[member][0][gender]=' + $('#gender').val() + '&p.census[member][0][role]=P';

        var formid = 1;

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
                var a = Math.floor(10 * Math.random());
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
        $('#previous_conditions').slideToggle(200);
    });

    $('#lb_conditions2').on('click', function () {
        $('#previous_conditions').slideUp(200);
    });

    function getAge() {
        //var birthDate = new Date($('#applicant_dob').val());
        var birthDate = new Date($('#date').val());
        var ageMs = Date.now() - birthDate.getTime();
        var age = ageMs / 1000 / 60 / 60 / 24 / 365;
        return age;
    }

    if ($('#form_title').text() == 'Fill in this short medicare form and click submit.') {
        $('#health_only').hide();
    }

    //$('#DateOfBirth_Day,#DateOfBirth_Month,#DateOfBirth_Year').change(function () {
    $('#date').change(function () {
        //$('#applicant_dob').val($('#DateOfBirth_Month option:selected').val() + ' ' + $('#DateOfBirth_Day option:selected').val() + ' ' + $('#DateOfBirth_Year option:selected').val());

        if (getAge() >= 64.5) {
            $('#health_only').slideUp(300);
            $('#insurance_type').val('medicare');
            $('#form_title').text(function () {
                return $(this).text().replace("health", "medicare");
            });
            $('#form_info').text(function () {
                return $(this).text().replace("health", "medicare");
            });
            $("#household-size").prop('required', false);
            $("#income").prop('required', false);

        } else {

            if (getAge() < 64.5) {
                $('#health_only').slideDown(300);
                $('#insurance_type').val('health');
                $('#form_title').text(function () {
                    return $(this).text().replace("medicare", "health");
                });
                $('#form_info').text(function () {
                    return $(this).text().replace("medicare", "health");
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
        document.getElementById('previous_conditions').style.display = "none";
    }

    function show() {
        document.getElementById('previous_conditions').style.display = "block";
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






    $("#household-size").change(function () {
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
        ;
    });



    $("form").submit(function(){
        $("#preloader").css("z-index", "10");
    });
    var terms = $('.terms').text();
    $("#TCPA_Language").val(terms);


/*


    let dobpattern = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;

    let dobpattern2 = /^(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;

    let dobpattern3 = "[0-9]{2}/[0-9]{2}/[0-9]{4}";


    //$("#date").attr("pattern", dobpattern2);


    function f(){
        let exp = "^(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:(?:XXX)$",
            year = new Date().getFullYear(),
            maxYear = year - 0,
            minYear = year - 120;

        let arr = [];
        for (let i = minYear; i<maxYear; i+=1 ) {
            arr.push(i)
        }
        return exp.replace('XXX', arr.join('|'))
    }

pp = ^(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:(?:1[6-9]|20)?\d{2})$

*/


/*
    //This will execute when your page is loaded
    $(function () {
        //Required attribute fallback
        $('#medicare').submit(function () {
            if (!attributeSupported("required") || ($.browser.safari)) {
                //If required attribute is not supported or browser is Safari
                // (Safari thinks that it has this attribute, but it does not work), then check all fields that has required attribute
                $("#medicare [required]").each(function (index) {
                    if (!$(this).val()) {
                        //If at least one required value is empty, then ask to fill all required fields.
                        alert("Please fill all required fields.");
                        return false;
                    }
                });
            }
            return false; //This is a test form and I'm not going to submit it
        });
    });

    */


    //This checks if a specific attribute is supported
    function attributeSupported(attribute) {
        return (attribute in document.createElement("input"));
    }



    function isSafari() {
        return /safari/.test(navigator.userAgent.toLowerCase());
    }

    //Required attribute fallback
    $('#medicare').submit(function() {
        if (!attributeSupported("required") || isSafari()) {
            //If required attribute is not supported or browser is Safari
            // (Safari thinks that it has this attribute, but it does not work), then check all fields that has required attribute
            $("#medicare [required]").each(function(index) {
                if (!$(this).val()) {
                    //If at least one required value is empty, then ask to fill all required fields.
                    alert("Please fill all required fields.");
                    return false;
                }
            });
        }
        return false; //This is a test form and I'm not going to submit it
    });







});




