<?php

function getzip($ip){

    $url = 'http://api.apigurus.com/iplocation/v1.8/locateip?key=SAK643623NLUL59SJC7Z&ip='.$ip.'&format=JSON';
    $data = json_decode(file_get_contents($url), true);

    return $data["geolocation_data"]["postal_code"];
}
