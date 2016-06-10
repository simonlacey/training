<?php




if(isset($_POST['zip'])){

    $client_zip = $_POST['zip'];

    $conn4 = new mysqli("hbcquotes.com", "rxonline_zips", "Nhaxvh4m8N2qaXzTw", "rxonline_zipcodes");
    if ($conn4->connect_error) {

        //echo "pepe";
        die("Connection failed: " . $conn4->connect_error);
    }

    $sql4 = "select * from zipcode where zip = '$client_zip'";
    $rslt4 = $conn4->query($sql4);

    if ($rslt4->num_rows > 0) {
        while ($row = $rslt4->fetch_assoc()) {
            $client_city = $row["city"];
            $client_state = $row["state"];
        }
    };

    $city_state['city'] = $client_city;
    $city_state['state'] = $client_state;

    $conn4->close();

    return $city_state;

} else {
    $city_state['city'] = "";
    $city_state['state'] = "";

    return $city_state;
}

