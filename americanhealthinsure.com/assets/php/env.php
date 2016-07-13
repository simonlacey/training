<?php

$domain = 'americanhealthinsure.com';
$domainCap = 'AmericanHealthInsure.com';
$siteName = 'American Health Insure';
$siteNameLowercase = 'american health insure';
$ver = 50;
$default_zipcode = "";

$default_params = array(
    'aff_ref' => '1001'
);


$default_phone = 8552818493;


$indexGTM = "
<!-- Google Tag Manager -->
<noscript>
    <iframe src='//www.googletagmanager.com/ns.html?id=GTM-5GFRKS'
            height='0' width='0' style='display: none; visibility: hidden'></iframe>
</noscript>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5GFRKS');
</script>
<!-- End Google Tag Manager -->
";


$indexHotJar = '';


$formGTM = $indexGTM;


$formHotJar = "";


$thankyouGTM = $indexGTM;


$thankyouHotJar = "";


$impressionPixelHO = '<img src="http://hbcinsure.go2cloud.org/aff_i?offer_id='
    . $offer_id . '&aff_id=' . $aff_id . '" width="1" height="1" style="display: none;" />';


$universal_lead_id_script = "
<!--  UNIVERSAL LEAD ID   -->
<script id='LeadiDscript' type='text/javascript'>
    // <!--
    (function () {
        var s = document.createElement('script');
        s.id = 'LeadiDscript_campaign';
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//create.lidstatic.com/campaign/3c5ff132-c09f-1ab0-4475-08e1bb1e727a.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    // -->
</script>
<noscript>
    <img
        src='//create.leadid.com/noscript.gif?lac=33a0d976-59b0-cc2f-6160-c04c4b7dca3f&lck=3c5ff132-c09f-1ab0-4475-08e1bb1e727a&snippet_version=2'/>
</noscript>
";


function MediaAlpha_Thankyou_Medicare($zip, $uid) {
    return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / Medicare - Thank You  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "8koKgQoF569PUH7Bk3x6_9WLOY2shA",
            "version": "17",
            "sub_1": "'.$uid.'",
            "data": {
                "zip": "'.$zip.'"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
}


function MediaAlpha_Thankyou_Health($zip, $uid) {
    return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / American Health Insure - Thank You */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "zURs5u74hUaunDE6M2F1MtJhYCuaLw",
            "version": "17",
            "sub_1": "'.$uid.'",
            "data": {
                "zip": "'.$zip.'"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
}


$Forensiq_script = '<script
    src="//c.securepaths.com/js/implement.js?org=iw2gjLz9IveY5JlBtsgl&s='. $form_token.'&p='.
    $aff_id.'&a='. $aff_sub.'&cmp='. $offer_id.'&rt=action&sl=1&stId='. $trans_id.'"></script>
<noscript>
    <img
        src="https://www.securepaths.com/pixel.cgi?org=iw2gjLz9IveY5JlBtsgl&s='. $form_token.'&p='.
    $aff_id.'&a='. $aff_sub.'&cmp='. $offer_id.'&rt=action&sl=1&stId='. $trans_id.'"
        width="1" height="1" border="0"/>
</noscript>';
