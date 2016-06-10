<?php

include('ip2locationlite.class.php');

//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('038142ece4c0343bb25c06104cbc55802ae6df12faa8e41bd6f64414712a85e1');

//Get errors and locations
$locations = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
$errors = $ipLite->getError();

//Getting the result
/*
echo "<p>\n";
echo "<strong>First result</strong><br />\n";
if (!empty($locations) && is_array($locations)) {
    foreach ($locations as $field => $val) {
        echo $field . ' : ' . $val . "<br />\n";
    }
}
echo "</p>\n";*/



//echo $locations[zipCode];
return $locations[zipCode];



//Show errors
/*
echo "<p>\n";
echo "<strong>Dump of all errors</strong><br />\n";
if (!empty($errors) && is_array($errors)) {
    foreach ($errors as $error) {
        echo var_dump($error) . "<br /><br />\n";
    }
} else {
    echo "No errors" . "<br />\n";
}
echo "</p>\n";
*/


function getZip($ip) {

    $ipLite = new ip2location_lite;
    $ipLite->setKey('038142ece4c0343bb25c06104cbc55802ae6df12faa8e41bd6f64414712a85e1');

//Get errors and locations
    $locations = $ipLite->getCity($ip);
    $zip = $locations[zipCode];

    return $zip;
}



