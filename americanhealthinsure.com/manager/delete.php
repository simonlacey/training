<?php
/**
 * Created by PhpStorm.
 * User: HM9
 * Date: 4/15/2015
 * Time: 5:00 PM
 */

include 'inc/config.php';

session_start();

ob_start();


echo "<h4><center> Logged In as :  " . $_SESSION['myusername'] . "</center><h4/><br>";
echo "<center><a href=\"logout.php\">Logout</a></center><br>";

if (isset($_POST["ver"])) {
    $ver = $_POST["ver"];
} elseif (isset($_GET["ver"])) {
    $ver = $_GET["ver"];
} else {
    echo "Couldn't get the version";
    die();
}

if (isset($_SESSION['myusername'])) {

    $conn2 = new mysqli($servername, $username, $password, $dbname);
    if ($conn2->connect_error) {
        die("Connection failed: " . $conn2->connect_error);
    }
} else {
    echo "Couldn't log in";
    die();
};


$sql6 = "DELETE FROM `$dbname`.`index_ctrl` WHERE `index_ver`='$ver';";
$sql7 = "DELETE FROM `$dbname`.`index_zip_ctrl` WHERE `index_zip_ver`='$ver';";
$sql8 = "DELETE FROM `$dbname`.`page_ctrl` WHERE `page_ver`='$ver';";
$sql9 = "DELETE FROM `$dbname`.`thankyou_ctrl` WHERE `thankyou_ver`='$ver';";
$sql10 = "DELETE FROM `$dbname`.`states_ctrl` WHERE `states_ver`='$ver';";
$sql11 = "DELETE FROM `$dbname`.`states_ctrl` WHERE `states_ver`='$ver';";


/*
if ($conn5->query($sql6) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn5->error;
}
*/

if (mysqli_query($conn2, $sql6)) {
    echo "Record deleted successfully". "<br>";
} else {
    echo "Error: " . $sql6 . "<br>" . mysqli_error($conn2);
};
if (mysqli_query($conn2, $sql7)) {
    echo "Record deleted successfully". "<br>";
} else {
    echo "Error: " . $sql7 . "<br>" . mysqli_error($conn2);
};
if (mysqli_query($conn2, $sql8)) {
    echo "Record deleted successfully". "<br>";
} else {
    echo "Error: " . $sql8 . "<br>" . mysqli_error($conn2);
};
if (mysqli_query($conn2, $sql9)) {
    echo "Record deleted successfully". "<br>";
} else {
    echo "Error: " . $sql9 . "<br>" . mysqli_error($conn2);
};
if (mysqli_query($conn2, $sql10)) {
    echo "Record deleted successfully". "<br>";
} else {
    echo "Error: " . $sql10 . "<br>" . mysqli_error($conn2);
};

//  $conn5->query("");

$conn2->close();



header("location:main_new.php");


?>


<script type="text/javascript">
/*    window.location.href = 'main_new.php';    */
</script>

