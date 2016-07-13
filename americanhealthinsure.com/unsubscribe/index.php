<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 11/3/15
 * Time: 13:30
 */
if (isset($_POST["email"])) {
    $email = $_POST["email"];
} elseif (isset($_GET["email"])) {
    $email = $_GET["email"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unsubscribe from AmericanHealthInsure.com</title>
    <link rel="icon" href="imgs/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/unsub.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container logo">
    <div class="col-md-6 col-md-offset-3">
        <div class="navbar-header">
            <img src="imgs/logo-trans.png">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 panel panel-default">
            <p class="warning-text"><strong>Warning!</strong> You have requested to unsubscribe from our mailing list.
            </p>
            <form action="unsub.php" method="post" class="margin-base-vertical">
                <p class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="email" class="form-control input-lg" id="email" name="email"
                           placeholder="Enter Your Email Address" required value="<?php echo $email; ?>"/>
                </p>
                <p class="text-center unsub-button">
                    <button type="submit" class="btn btn-success btn-lg">Unsubscribe Me</button>
                </p>
                <p class="help-block text-center">
                    <small>We won't send you spam. Unsubscribe at any time.</small>
                </p>
                </span>
            </form>
        </div><!-- //main content -->
    </div><!-- //row -->
</div> <!-- //container -->
</body>
</html>