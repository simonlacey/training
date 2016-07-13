<?php
include('../../assets/php/env.php');
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $siteName; ?> Thank You - <?php echo $_GET["aff_ref"]; ?></title>

    <meta name="description" content="<?php echo $siteNameLowercase; ?> for the masses">
    <meta name="keywords" content="<?php echo $siteNameLowercase; ?>">
    <meta name="author" content="simple insurance leads">

    <link rel="icon" href="../../assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/ahi_ty.css">

    <!--<link rel="stylesheet" href="../../assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/custom-thankyou.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,400italic,700,900' rel='stylesheet'
          type='text/css'>-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="//insurance.mediaalpha.com/js/serve.js"></script>

</head>

<body>
<?php
echo $thankyouGTM;
echo $thankyouHotJar;
?>
<!-- Start Navigation -->
<header id="nav1-1">
    <nav class="navbar" id="main-navbar">
        <div class="container">

            <div class="navbar-header col-md-4 col-sm-3 col-xs-4 pull-left">
                <a class="navbar-brand smooth-scroll"><img src="../../assets/imgs/logo.png" class="logo"
                                                           alt="logo"></a>
            </div>

            <div class="col-md-8 col-sm-9 col-xs-8 navbar-right pull-right speak-agent">

                <div class="pull-right hidden-xs">
                    <h5 class="agent">Speak With a Licensed Agent:</h5><span
                        class="glyphicon glyphicon-phone hidden-xs" aria-hidden="true"></span>
                    <a class="phone"
                       href="tel:+<?php echo $_GET['ph']; ?>"><strong><?php echo $_GET['ph']; ?></strong></a>
                </div>
                <span class="pull-right hidden-lg hidden-md hidden-sm">
                    <p class="agent-standing-by hidden-lg hidden-md hidden-sm visible-xs-block">Agents are
                        standing by</p>
                    <span
                        class="glyphicon glyphicon-phone hidden-lg hidden-md hidden-sm visible-xs-inline-block"
                        aria-hidden="true"></span>
                    <a class="phone visible-xs-inline-block"
                       href="tel:+<?php echo $_GET['ph']; ?>"><strong><?php echo $_GET['ph']; ?></strong></a>
                </span>
            </div>

        </div>
        <!-- /End Container -->
    </nav>
    <!-- /End Navbar -->
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 thank-you-block">
            <h2>Thank you for filling out our form!</h2>

            <p>One of our licensed agents is reviewing the info and will be getting in touch with you shortly. Have a
                great day.</p></div>
    </div>
</div>

<?php

//$insurance_type = 'health';
$zip = $_GET['zip'];
if ($zip == "") {
    $zip = "33021";  // If cant have the ip then serve for zip = 33021
};
$uid = $_GET['uid'];

if ($_GET['inty'] == 'medicare') {
    echo '
<section style="margin-top:1em; max-width: 920px; margin: auto">
    ' . MediaAlpha_Thankyou_Medicare($zip, $uid) . '
</section>
';
} else {
    echo '
<section style="margin-top:1em; max-width: 920px; margin: auto">
    ' . MediaAlpha_Thankyou_Health($zip, $uid) . '
</section>
    ';
}
?>

<footer id="footer1-2" class="p-y-md footer f1 bg-edit bg-dark">
    <div class="container">
        <div class="row">
            <!-- Copy -->
            <div class="col-md-8 col-sm-6 col-xs-12 text-white">
                <p>Copyright &copy; American Health Insure, All rights reserved
                    <a href="#" class="f-w-900 inverse"></a>
                </p>
            </div>
            <!-- Privacy Policy and Terms of Use -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <p class="text-white privacy-info">
                    <a href="#modal-privacy" data-toggle="modal" style="color:#ffffff;">Privacy
                        Policy</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="#modal-terms" data-toggle="modal" style="color:#ffffff;">Terms of
                        Use</a>
                </p>
            </div>
        </div>
        <!-- /End Row -->
        <!-- Modal HTML -->
        <div id="modal-privacy" class="modal fade bs-example-modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Privacy Policy</h4>
                    </div>
                    <div class="modal-body">
                        <?php include '../../../common-LP/php/privacy-policy.php';
                        echo $privacy_policy; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-terms" class="modal fade bs-example-modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Terms of Use</h4>
                    </div>
                    <div class="modal-body">
                        <?php include '../../../common-LP/php/terms-of-use.php';
                        echo $terms_of_use; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Container -->
</footer>

<?php
session_start();
$form_token = md5(session_id() . time());
$_SESSION['form_token'] = $form_token;
$aff_id = $_GET['aff_id'];
$aff_sub = $_GET['aff_sub'];
$offer_id = $_GET['offer_id'];
$trans_id = $_GET['trans_id'];

echo $Forensiq_script;
?>

<!--<script src="../../assets/js/plugins/jquery1.11.2.min.js"></script>
<script src="../../assets/js/plugins/bootstrap.min.js"></script>
<script src="../../assets/js/plugins/jquery.easing.1.3.min.js"></script>-->
<script src="../../assets/js/ahi.min.js"></script>

</body>

</html>