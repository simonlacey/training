<?php
    include "./assets/php/get_phone.php";

    $offer_id = $_GET['offer_id'];
    $affiliate_id = $_GET['affiliate_id'];
    $aff_sub = $_GET['aff_sub'];
    $phone_number = get_phone($offer_id, $affiliate_id, $aff_sub);

    // GET ZIP from IP using function in geoip.php
    include './assets/php/geoip.php';
    $zip = getZip($_SERVER['REMOTE_ADDR']);
    if ($zip == "") {
        $zip = "33021";  // If cant have the ip then serve for zip = 33021
    };
?>