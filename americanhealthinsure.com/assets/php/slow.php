<?php
//Redirect to another file that shows that mail queued
// 

echo "here <br>";

function getClientIP(){
    $ip_address = $_SERVER['REMOTE_ADDR'];
    if ((!$ip_address or $ip_address == '127.0.0.1') and array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
        $ip_address = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    return $ip_address;
}

$ip_address = getClientIP();

echo 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
echo 'HTTP_X_FORWARDED_FOR: ' . $_SERVER['HTTP_X_FORWARDED_FOR'] . '<br>';

print_r(getallheaders());

?>
