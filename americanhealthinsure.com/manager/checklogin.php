<?php
/**
 * Created by PhpStorm.
 * User: HM9
 * Date: 4/14/2015
 * Time: 5:05 PM
 */

    include 'inc/config.php';

$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$servername", "$username", "$password")or die("cannot connect");
mysql_select_db("$dbname")or die("cannot select DB");

// username and password sent from form
session_start();
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
/*
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
*/
$sql="SELECT * FROM $tbl_name WHERE user_name='$myusername' and user_password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){


    $_SESSION['myusername'] = $myusername;
    $_SESSION['mypassword'] = $mypassword;
    header("location:main_new.php");

}
else {
    echo "Wrong Username or Password";
}



?>



