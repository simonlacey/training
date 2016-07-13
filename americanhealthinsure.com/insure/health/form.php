<?php
include('../../assets/php/env.php');
include('../../../common-LP/php/get_HO_url.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $siteName; ?> Form - <?php echo $_POST["aff_ref"]; ?></title>

    <meta name="description" content="<?php echo $siteNameLowercase; ?> for the masses">
    <meta name="keywords" content="<?php echo $siteNameLowercase; ?>">
    <meta name="author" content="simple insurance leads">

    <!-- FAVICON  -->
    <!-- Place your favicon.ico in the images directory -->
    <link rel="shortcut icon" href="../../assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../assets/imgs/favicon.ico" type="image/x-icon">

    <!--<link rel="stylesheet" href="../../assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/icons/iconfont.css">
    <link rel="stylesheet" href="../../assets/css/custom-form.css">
    <link rel="stylesheet" href="../../assets/css/styles-form-v2b.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,400italic,700,900' rel='stylesheet'
          type='text/css'>-->

    <link rel="stylesheet" href="../../assets/css/ahi_form.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        div#preloader {
            position: fixed;
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            overflow: visible;
            opacity: 0.95;
            background: rgba(255, 255, 255, 0.2) url('./../../assets/imgs/preloader.gif') no-repeat center center;
        }
    </style>

</head>

<?php
include "../../../common-LP/php/get_phone.php";
$phone_number = $_POST['phone_number'];
if ($phone_number == '') {
    $offer_id = $_POST['offer_id'];
    $aff_id = $_POST['aff_id'];
    $aff_sub = $_POST['aff_sub'];
    $phone_number = get_phone($offer_id, $aff_id, $aff_sub, $default_phone, $ver);
}
?>

<body>

<?php
echo $formGTM;
echo $formHotJar;
echo get_HO_form_pixel($_POST['offer_id'], $_POST['trans_id']);
?>

<div id="preloader"></div>

<header id="nav1-1">

    <nav class="navbar" id="main-navbar">
        <div class="container">

            <div class="navbar-header col-md-4 8 col-sm-3 col-xs-4 pull-left">
                <a class="navbar-brand smooth-scroll"><img src="../../assets/imgs/logo.png" class="logo-b"
                                                           alt="logo"></a>
            </div>

            <div class="col-md-8 col-sm-9 col-xs-8 navbar-right pull-right speak-agent">
                <div class="pull-right">
                    <h5 class="agent hidden-xs">Speak With a Licensed Agent:</h5>
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    <a class="phone"
                       href="tel:+<?php echo $phone_number; ?>"><strong><?php echo $phone_number; ?></strong></a>
                </div>
            </div>

        </div>
        <!-- /End Container -->
    </nav>
    <!-- /End Navbar -->
</header>

<div class="container form-container">
    <div class="row">
        <!-- header text -->
        <div class="col-md-12 col-sm-12">
            <div class="form-header">
                <h2 id="form_title">The Fastest Way To Get Free <?php if ($_POST['insurance_type'] == 'medicare') {
                        echo 'Medicare';
                    } else {
                        echo 'Health';
                    }; ?> Insurance Quotes</h2>

                <p class="intro">Please fill in your information below to get your free quote today.</p>
            </div>
        </div>
    </div>
    <!-- form wrap -->

    <script type="text/javascript">var formid = '2';</script>
    <form id="form1" name="form1" class="form-inline" role="form" action="../../assets/php/process2.php" method="post">

        <!-- start container -->
        <div class="container">
            <div class="personal-form">
                <div class="row">
                    <div class="col-md-12 personal-info">

                        <?php

                        if (!isset($_POST['insurance_type'])) {
                            $_POST['insurance_type'] = 'health';
                        }

                        include "../../../common-LP/php/getcity.php";
                        include "../../../common-LP/php/hidden_fields_form.php";
                        ?>

                        <input type="hidden" name="form_id" value="2" readonly>

                        <div class="form-group col-md-5 col-sm-12">
                            <label class="expand-label" for="gender">Gender:</label>
                            <select class="required" name="applicant_gender" required id="gender">
                                <option value=""> -Select-</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>

                        <!-- todo change bday input, use input mask -->
                        <!--<div class="inputWrapp">
                            <label class="quest">Birthdate <span class="tag">(mm/dd/yyyy)</span></label>
                            <input class="dob" type="text" name="applicant_dob" id="applicant_dob" maxlength="10" data-type="birthdate" data-message="Type the date with the format: mm/dd/yyyy." value="mm/dd/yyyy" tabindex="6">
                        </div>-->

                        <div class="form-group col-md-7 col-sm-12" id="birthday_selects">
                            <label class="expand-label birthday" id="" for="DateOfBirth_Month">Birthdate:</label>

                            <select id="DateOfBirth_Month" name="DateOfBirth_Month" required class="required">
                                <option value="">-MM-</option>
                                <option value="January">01</option>
                                <option value="Febuary">02</option>
                                <option value="March">03</option>
                                <option value="April">04</option>
                                <option value="May">05</option>
                                <option value="June">06</option>
                                <option value="July">07</option>
                                <option value="August">08</option>
                                <option value="September">09</option>
                                <option value="October">10</option>
                                <option value="November">11</option>
                                <option value="December">12</option>
                            </select>
                            <select id="DateOfBirth_Day" name="DateOfBirth_Day" required class="required">
                                <option value="">-DD-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select id="DateOfBirth_Year" name="DateOfBirth_Year" required class="required">
                                <option value="">-YYYY-</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>

                                <option <?php if ($_POST['insurance_type'] == 'medicare') {
                                    echo 'selected';
                                } ?>
                                    value="1952">1952
                                </option>

                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                                <option value="1904">1904</option>
                                <option value="1903">1903</option>
                                <option value="1902">1902</option>
                                <option value="1901">1901</option>
                                <option value="1900">1900</option>
                            </select>
                        </div>

                        <input id="applicant_dob" name="applicant_dob" type="hidden" value=""/>

                    </div>

                    <div id="health_only">
                        <div class="form-group col-md-5 col-sm-12">
                            <label class="expand-label height" for="household-size">Household Size:</label>
                            <select class="required" name="household-size" required id="household-size">
                                <option value="">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8+">8+</option>
                            </select>
                        </div>

                        <div class="form-group col-md-7 col-sm-12">
                            <label class="expand-label height" for="income">Expected Income:</label>
                            <select class="required" name="income" required id="income">
                            </select>
                        </div>

                        <div class="col-md-12 spacer hidden-xs hidden-sm"><img src="" alt=""></div>
                        <!-- DIVIDER -->

                        <div id="medial_conditions" class="container medical-history">
                            <div class="row">
                                <div class="form-group col-md-12 col-xs-12">
                                    <label class="questions" for="">Do you have any medical conditions?</label>
                                    <label class="radio-inline">
                                        <!--<input onclick="show()" id="lb_conditions" type="radio" name="health" class="required" value="Y"> Yes-->
                                        <input onclick="show()" id="lb_conditions" required type="radio" name="health"
                                               class="required" title="Please choose either Yes or No."
                                               value="Y"><span>Yes</span>
                                    </label>
                                    <label class="radio-inline">
                                        <!--<input onclick="h_conditions()" id="lb_conditions2" type="radio" name="health" class="required" value="N"> No-->
                                        <input onclick="h_conditions()" id="lb_conditions2" type="radio" name="health"
                                               class="required" title="Please choose either Yes or No." value="N"
                                               checked="checked"><span>No</span>
                                    </label>
                                </div>
                            </div>
                            <!-- health condtions start - hidden -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="previous_conditons" class="row" style="display:none">
                                        <div class="form-group col-md-12">
                                            <div class="conditions-checklist-holder">
                                                <div class="col-md-2 col-sm-3">
                                                    <ul class="checklist">
                                                        <li>
                                                            <input class="health-conditions-list" id="hiv" name="hiv"
                                                                   type="checkbox" value="Y"/>
                                                            <label for="hiv">AIDS/HIV</label>
                                                        </li>
                                                        <li>
                                                            <input class="health-conditions-list" id="diabetes"
                                                                   name="diabetes"
                                                                   type="checkbox" value="Y"/>
                                                            <label for="diabetes">Diabetes</label>
                                                        </li>
                                                        <li>
                                                            <input class="health-conditions-list" id="liver-disease"
                                                                   name="liver-disease" type="checkbox" value="Y"/>
                                                            <label for="liver-disease">Liver Disease</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2 col-sm-3 health-list-padding">
                                                    <ul class="checklist" style="">
                                                        <li>
                                                            <input class="health-conditions-list" id="alzheimers"
                                                                   name="alzheimers" type="checkbox" value="Y"/>
                                                            <label for="alzheimers">Alzeimers Disease</label>
                                                        </li>
                                                        <li>
                                                            <input class="health-conditions-list" id="lung-disease"
                                                                   name="lung-disease" type="checkbox" value="Y"/>
                                                            <label for="lung-disease">Lung Disease</label>
                                                        </li>
                                                        <li>
                                                            <input class="health-conditions-list" id="substance-abuse"
                                                                   name="substance-abuse" type="checkbox" value="Y"/>
                                                            <label for="substance-abuse">Substance Abuse</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2 col-sm-3">
                                                    <ul class="checklist" style="">
                                                        <li>
                                                            <input class="health-conditions-list" id="mental-illness"
                                                                   name="mental-illness" type="checkbox" value="Y"/>
                                                            <label for="mental-illness">Mental Illness</label>
                                                        </li>
                                                        <li>
                                                            <input class="health-conditions-list" id="cancer"
                                                                   name="cancer"
                                                                   type="checkbox" value="Y"/>
                                                            <label for="cancer">Cancer</label>
                                                        </li>
                                                        <li>
                                                            <input class="health-conditions-list" id="heart-disease"
                                                                   name="heart-disease" type="checkbox" value="Y"/>
                                                            <label for="heart-disease">Heart Disease</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- health condtions end -->
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label class="questions" for="">Are you a smoker?</label>
                                    <label class="radio-inline">
                                        <input id="field_smoker" type="radio" name="applicant_smoker" class="required"
                                               required value="Yes"><span>Yes</span></label>
                                    <label class="radio-inline">
                                        <input id="field_smoker2" type="radio" name="applicant_smoker" class="required"
                                               value="No" checked="checked"><span>No</span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label class="questions" for="">Are you currently insured?</label>
                                    <label class="radio-inline">
                                        <input id="lb_insured" type="radio" name="insured" class="required"
                                               required value="Y">
                                        <span>Yes</span>
                                    </label>
                                    <label class="radio-inline">
                                        <input id="lb_insured2" type="radio" name="insured" class="required" value="N"
                                               checked="checked">
                                        <span>No</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label class="questions" for="">Do you currently take any medications?</label>
                                    <label class="radio-inline">
                                        <input id="medications" type="radio" name="medications" class="required"
                                               required value="Y">
                                        <span>Yes</span>
                                    </label>
                                    <label class="radio-inline">
                                        <input id="medications2" type="radio" name="medications" class="required"
                                               value="N" checked="checked">
                                        <span>No</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 spacer hidden-xs hidden-sm start-personal" style="padding-top:15px;">
                            <img src="" alt="">
                        </div>
                    </div>


                    <!-- DIVIDER -->

                    <div class="form-group col-md-6 col-sm-12">
                        <label class="expand-label" for="firstname">First Name:</label>
                        <input type="text" class="required" name="first_name" id="firstname" required placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label class="expand-label" for="lastname">Last Name:</label>
                        <input type="text" class="required" name="last_name" id="lastname" required placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label class="expand-label" for="address">Street:</label>
                        <input name="street1" id="address" type="text" class="required" required placeholder="">
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label class="expand-label" for="city">City:</label>
                        <input type="text" class="required" name="city" id="city"
                               value="" required placeholder="">
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label class="expand-label required" for="state">State:</label>
                        <select id="state" name="state" required class="required">
                            <option value="">Choose State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label class="expand-label" for="zip">Zip:</label>
                        <input type="tel" class="required" id="zip" required name="zipcode" pattern="\d{5}"
                               value="<?php echo $_POST['zip']; ?>"
                               placeholder="">  <!--  input type tel so it shows numpad on mobile devices  -->
                    </div>
                    <!--<br>-->
                    <div class="form-group col-md-6 col-sm-12">
                        <label class="expand-label" for="tel">Primary Phone:</label>
                        <input class="required" name="day_phone" id="tel" type="tel" size="14" maxlength="20"
                               required pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label class="expand-label" for="email">Email Address:</label>
                        <input type="email" class="required" name="email" id="email" value="" required
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="">
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>

        <div class="row terms-container">

            <div class="col-md-4 col-sm-12 col-xs-12 pull-right">
                <button type="submit" class="btn btn-shadow btn-red" style="font-size:20px;">Continue <span
                        class="glyphicon glyphicon-arrow-right" aria-hidden="true"
                    ></span>
                </button>
            </div>

            <div class="col-md-8 col-xs-12 push-left">
                <p class="terms">By clicking "Continue" I provide my signature, expressly authorizing American Health
                    Insurance or one of these <a href="../carriers/"
                                                 target="_blank"
                                                 style="text-decoration:underline;">carriers</a> to contact
                    me at the number and address provided with insurance quotes or to obtain additional information for
                    such purpose, via live, prerecorded or auto-dialed calls, text messages or email. I understand that
                    my signature is not a condition of purchasing any property, goods or services and that I may revoke
                    my consent at any time. To speak directly to a representative for a quote, please call
                    americanhealthinsure.com at 1-877-386-9926. By using this form, you agree to the terms of our <a
                        href="#modal-privacy" class="privacy-info-link" data-toggle="modal" style="">Privacy
                        Policy</a>.</p>
            </div>
        </div>

    </form>

</div>

<div class="row footer">
    <div class="col-md-12 col-sm-12 privacy">
        <p><a href="#modal-privacy" class="" data-toggle="modal">Privacy Policy</a> | <a href="#modal-terms"
                                                                                         class="privacy-info-link"
                                                                                         data-toggle="modal">Terms of
                Use</a> | <a href="../carriers/" target="_blank">Carriers</a>
            <br>Copyright &copy; 2016 | americanhealthinsure.com | All Rights Reserved</p>
    </div>
</div>
<!-- Modal HTML -->

<div id="modal-privacy" class="modal fade bs-example-modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Privacy Policy</h4>
            </div>
            <div class="modal-body modal-body-privacy">
                <?php include '../../../common-LP/php/privacy-policy.php';
                echo $privacy_policy;
                ?>
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

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
<script type="text/javascript" src="../../assets/js/main.js"></script>-->

<script>
    <?php
    include '../../../common-LP/php/getHttpHost.php';
    ?>
</script>

<script src="../../assets/js/ahi.min.js"></script>

<img height="0" width="0" src="//agilehealthinsurance.7eer.net/i/251325/284493/3530"
     style="position:absolute;visibility:hidden;" border="0"/>

</body>

</html>