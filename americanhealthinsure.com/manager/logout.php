<?php
/**
 * Created by PhpStorm.
 * User: HM9
 * Date: 4/14/2015
 * Time: 5:07 PM
 */

session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
//echo "Logged out.!!  Thanks.";
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Website Campaign Manager</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login2.css" rel="stylesheet">
    <script src="js/login2.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .fieldset-auto-width {
            display: inline-block;
        }
    </style>

    <script>
        $(function () {
            $("#check").button();
            $("#format").buttonset();
        });
    </script>

    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>


</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Successfully Logged Out..!!</h4>
            <a class="btn btn-default" href="login.php" role="button">Log Back In..!</a><br>
        </div>

    </div>
</div>


</body>
</html>
