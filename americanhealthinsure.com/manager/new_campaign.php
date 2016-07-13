<?php
/**
 * Created by PhpStorm.
 * User: HM9
 * Date: 4/15/2015
 * Time: 11:10 AM
 */

   include 'inc/config.php';

ob_start();

session_start();

if (isset($_SESSION['myusername'])) {

    $conn5 = new mysqli($servername, $username, $password, $dbname);
    if ($conn5->connect_error) {
        die("Connection failed: " . $conn5->connect_error);
    }
} else {
    echo "Couldn't log in";
    die();
};


$rslt5 = $conn5->query("SELECT MAX(index_ver) FROM index_ctrl");
if ($rslt5->num_rows > 0) {
    while ($row = $rslt5->fetch_assoc()) {
        $highest_id = $row["MAX(index_ver)"];
//    $sql4 = "INSERT INTO 'webpagedb'.'index_ctrl' ('index_ver', 'campaign_name') VALUES ('6', 'test3')";
    }
}

$newVer = $highest_id + 1;

if (isset($_POST["newCampaign"])) {
    $newCamp = ($_POST["newCampaign"]);

    $sql6 = "INSERT INTO `$dbname`.`index_ctrl` (`index_ver`, `campaign_name`) VALUES ('$newVer', '$newCamp');";
//    $sql6 = "INSERT INTO `$dbname`.`index_ctrl` (`campaign_name`) VALUES ('$newCamp');";
    $sql7 = "INSERT INTO `$dbname`.`index_zip_ctrl` (`index_zip_ver`) VALUES ('$newVer');";
    $sql8 = "INSERT INTO `$dbname`.`page_ctrl` (`page_ver`) VALUES ('$newVer');";
    $sql9 = "INSERT INTO `$dbname`.`thankyou_ctrl` (`thankyou_ver`) VALUES ('$newVer');";
    $sql10 = "INSERT INTO $dbname.states_ctrl (states_ver) VALUES ('$newVer');";

    /*
    if ($conn5->query($sql6) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn5->error;
    }
*/

    if (mysqli_query($conn5, $sql6)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql6 . "<br>" . mysqli_error($conn5);
    }
    if (mysqli_query($conn5, $sql7)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql7 . "<br>" . mysqli_error($conn5);
    }
    if (mysqli_query($conn5, $sql8)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql8 . "<br>" . mysqli_error($conn5);
    }
    if (mysqli_query($conn5, $sql9)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql9 . "<br>" . mysqli_error($conn5);
    }
    if (mysqli_query($conn5, $sql10)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql10 . "<br>" . mysqli_error($conn5);
    }


    //  $conn5->query("");
}


$conn5->close();

header("location:main_new.php");

