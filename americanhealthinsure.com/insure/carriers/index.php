<?php
include ('../../assets/php/env.php');
?>
<!doctype html>
<html>

<head>
    <title>Individual Health Quotes Carriers &amp; Partners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/ahi-carriers.css"/>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 brand">
            <img src="../../assets/imgs/logo.png" alt="ahi logo" width="200" height="58" class="img-responsive"/>
        </div>
    </div>
</div>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Carriers &amp; Partners</h1>
            <!-- <a class="close" href="javascript: close();">close</a> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="carrier-includes">Carriers and partner companies include, but are not limited to, the
                following:</p>
            <ul>
                <?php
                include ('../../../common-LP/php/get_carriers_list.php');
                ?>
            </ul>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col-md-12">
                <div class="button-holder">
                    <a class="btn btn-danger btn-lg btn-close-carriers" href="javascript: close();">Close Window</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="copyright">
                    <script>document.write(new Date().getFullYear())</script>
                    <?php echo $siteName;?>. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>

</div>
<!-- end container -->

</body>
</html>
