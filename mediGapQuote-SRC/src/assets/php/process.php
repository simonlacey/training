<?php



/*
include 'Mngmnt/inc/config.php';

if (isset($_POST["ver"])) {
    $ver = $_POST["ver"];
} elseif (isset($_GET["ver"])) {
    $ver = $_GET["ver"];
} else {
    echo "Couldn't get the version";
    die();
}

$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
$sql1 = "select * from index_zip_ctrl where index_zip_ver = $ver";
$rslt1 = $conn2->query($sql1);

if ($rslt1->num_rows > 0) {
    while ($row = $rslt1->fetch_assoc()) {
        $campaign_name = $row["campaign_name"];
        $index_zip_exist = $row["index_zip_exist"];
        $index_zip_aspect = $row["index_zip_aspect"];
        $index_zip_lead_type = $row["index_zip_lead_type"];
        $index_zip_default_SRC = $row["index_zip_default_SRC"];
        $index_zip_default_AffRef = $row["index_zip_default_AffRef"];

    }
}
$index_zip_lead_type = (int)$index_zip_lead_type;
$index_zip_aspect = (int)$index_zip_aspect;


$sql2 = "select * from page_ctrl where page_ver = $ver";
$rslt2 = $conn2->query($sql2);

if ($rslt2->num_rows > 0) {
    while ($row = $rslt2->fetch_assoc()) {
        $campaign_name = $row["campaign_name"];
        $page_exist = $row["page_exist"];
        $page_has_phone_number_header = $row["page_has_phone_number_header"];
        $phone_number = $row["phone_number"];
        $self_emp = $row["self_emp"];
        $insured = $row["insured"];
        $Spouse = $row["Spouse"];
        $no_of_children = $row["no_of_children"];
        $est_Income = $row["est_Income"];
        $affordable = $row["affordable"];
        $hospitalized = $row["hospitalized"];
        $physician = $row["physician"];
        $prescription = $row["prescription"];
        $previously_denied = $row["previously_denied"];
        $ss_disabled = $row["ss_disabled"];
        $pregnant = $row["pregnant"];
        $health = $row["health"];
        $Household_size = $row["Household_size"];
        $expected_income = $row["expected_income"];
        $click_agree_terms_cond = $row["click_agree_terms_cond"];
        $affil_contact = $row["affil_contact"];

    }
}

$conn2->close();


$client_zip = $_POST['zipcode'];


$conn4 = new mysqli("hbcquotes.com", "rxonline_zips", "Nhaxvh4m8N2qaXzTw", "rxonline_zipcodes");
if ($conn4->connect_error) {
    die("Connection failed: " . $conn4->connect_error);
}

$sql4 = "select * from zipcode where zip = '$client_zip'";
$rslt4 = $conn4->query($sql4);

if ($rslt4->num_rows > 0) {
    while ($row = $rslt4->fetch_assoc()) {
        $client_city = $row["city"];
        $client_state = $row["state"];
    }
}
$conn4->close();


//$client_state = "CA";

GLOBAL $running_state;

GLOBAL $global_ver;


GLOBAL $global_src;
$global_src = $_POST['SRC'];

$global_ver = $ver;



$conn5 = new mysqli($servername, $username, $password, $dbname);
if ($conn5->connect_error) {
    die("Connection failed: " . $conn5->connect_error);
};

$sql5 = "select * from states_ctrl where states_ver = $ver";
$rslt5 = $conn5->query($sql5);

if ($rslt5->num_rows > 0) {
    while ($row = $rslt5->fetch_assoc()) {
        $running_state = $row[$client_state];
    }
};

$conn5->close();


if (empty($_POST)) {
    die('error');
}
*/


function doLog($text)
{
    $filename = "resp.log";
    $fh = fopen($filename, "a") or die("Could not open log file.");
    fwrite($fh, date("d-m-Y, H:i") . " - $text\n") or die("Could not write file!");
    fclose($fh);
}





$map = array(
    "applicant_dob" => "Birthdate",
    "applicant_gender" => "Gender App",
    "applicant_heightFT" => "Height ft App",
    "applicant_heightIN" => "Height in App",
    "applicant_smoker" => "Tobacco User App",
    "applicant_weight" => "Weight App",
    "child_1_age" => "Age Ch1",
    "child_1_dob" => "DOB Ch1",
    "child_1_gender" => "Gender Ch1",
    "child_1_heightIN" => "Height IN Ch1",
    "child_1_heightFT" => "Height ft Ch1",
    "child_1_weight" => "Weight Ch1",
    "child_2_age" => "Age Ch2",
    "child_2_dob" => "DOB Ch2",
    "child_2_gender" => "Gender Ch2",
    "child_2_heightFT" => "Height ft Ch2",
    "child_2_heightIN" => "Height IN Ch2",
    "child_2_weight" => "Weight Ch2",
    "child_3_age" => "Age Ch3",
    "child_3_dob" => "DOB Ch3",
    "child_3_gender" => "Gender Ch3",
    "child_3_heightFT" => "Height ft Ch3",
    "child_3_heightIN" => "Height In Ch3",
    "child_3_weight" => "Weight Ch3",
    "child_4_age" => "Age Ch4",
    "child_4_dob" => "DOB Ch4",
    "child_4_gender" => "Gender Ch4",
    "child_4_heightFT" => "Height ft Ch4",
    "child_4_heightIN" => "Height in Ch4",
    "child_4_weight" => "Weight Ch4",
    "child_5_age" => "Age Ch5",
    "child_5_dob" => "DOB Ch5",
    "child_5_gender" => "Gender Ch5",
    "child_5_heightFT" => "Height ft Ch5",
    "child_5_heightIN" => "Height IN Ch5",
    "child_5_weight" => "Weight Ch5",
    "child_6_age" => "Age Ch6",
    "child_6_dob" => "DOB Ch6",
    "child_6_gender" => "Gender Ch6",
    "child_6_heightFT" => "Height ft Ch6",
    "child_6_heightIN" => "Height IN Ch 6",
    "child_6_weight" => "Weight Ch6",
    "conditions" => "Conditions App",
    "contact_time" => "Contact Time",
    "currently_insured" => "CurrentlyInsured",
    "day_phone" => "Phone",
    "email" => "Email",
    "evening_phone" => "Other Phone",
    "fax" => "Fax",
    "first_name" => "First Name",
    "ip_address" => "Ip Address",
    "last_name" => "Last Name",
    "lead_id" => "External ID",
    "medications" => "Medications",
    "spouse_dob" => "DOB Sp",
    "spouse_gender" => "Gender Sp",
    "spouse_heightFT" => "Height ft Sp",
    "spouse_heightIN" => "Height IN Sp",
    "spouse_smoker" => "Tobacco User Sp",
    "spouse_weight" => "Weight Sp",
    "state" => "Billing State",
    "street1" => "Billing Address",
    "street2" => "Billing Address 2",
    "zipcode" => "Billing Zip/Postal Code",
    "transaction_id" => "transaction_id",
    "affiliate_id" => "affiliate_id",
    "sub_affiliate_id" => "sub_affiliate_id"
);

function curl_wrapper($url, $urlmethod, $fields, $is_b = FALSE)
{

    /*
    $urlmethod, if it
    1 = get
    2 = post
        $fields is an associative array
        $login['email'] = 'me@this.com';
        $login['pw'] = 'secret';
    */
    //set POST variables
    //url-ify the data for the POST


    $fields_string = http_build_query($fields);

    //open connection
    $ch = curl_init();
    // post
    if ($urlmethod == 2) {
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    }
    // get
    if ($urlmethod == 1) {
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url . '?' . $fields_string);

    }
    //execute post
    $result = curl_exec($ch);


    doLog(print_r($fields_string, true));
    doLog(print_r($result, true));

    // if post was to boberdoo check if it was accepted
    if ($is_b) {
        $xml = new SimpleXMLElement($result);
        if ($xml->status != 'Error') {
            $lead_id = $xml->lead_id;
            $pub_id = $fields['Pub_ID'];
            $transaction_id = $fields['Sub_ID'];
        }
    }
    //close connection
    curl_close($ch);
    // if posting to and accepted by boberdoo send postback to hasoffers

/*
    $servername = "hbcquotes.com";
    $username = "rxonline_intcms";
    $password = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from postback_hasoffers where version = 50";
    $rslt = $conn->query($sql);

    if ($rslt->num_rows > 0) {
        while ($row = $rslt->fetch_assoc()) {
            $global_postback_url = $row["postback_url"];
        }
    }

    $conn->close();


    $running_state = 0;

    if ($running_state) {




        GLOBAL $postback_code;
        switch ($global_ver) {
            case 11	:$postback_code = 'SP1U';break;
            case 14	:
                switch($global_src) {
                    case 'HBCQuotes14_aff71'	:$postback_code = 'SP1j';break;
                    case 'HBCQuotes14_affzip71'	:$postback_code = 'SP27';break;
                    default :$postback_code = '';
                };break;
            case 15	:$postback_code = 'SP1l';break;
            case 17	:$postback_code = 'SP1n';break;
            case 18	:$postback_code = 'SP1r';break;
            case 19	:
                switch($global_src) {
                    case 'HBCQuotes19_aff71'	:$postback_code = 'SP2H';break;
                    case 'HBCQuotesjesels19_aff71'	:$postback_code = 'SP2N';break;
                    default :$postback_code = '';
                };break;
            case 29	:$postback_code = 'SP2e';break;
            case 30	:$postback_code = 'SP2c';break;
            case 31	:$postback_code = 'SP2Y';break;
            case 32	:$postback_code = 'SP2m';break;
            case 35	:$postback_code = 'SP2p';break;
            case 36	:$postback_code = 'SP2r';break;
            case 37	:$postback_code = 'SP2t';break;
            case 38	:$postback_code = 'SP2v';break;
            case 39	:$postback_code = 'SP2x';break;
            case 41	:$postback_code = 'SP33';break;
            case 42	:$postback_code = 'SP2z';break;
            default :$postback_code = '';
        };


        if ($global_postback_url != '')
        {



            if (strpos($global_postback_url, 'TRANSACTION_ID') !== false) {
                $global_postback_url = substr($global_postback_url,0,-14);
                $global_postback_url = $global_postback_url . $transaction_id. '&adv_sub=' . $lead_id .'&ad_id=' . $transaction_id;
            }




            //$postback_url = 'http://hbcinsure.go2cloud.org/' . $postback_code . '?adv_sub=' . $lead_id . '&transaction_id=' . $transaction_id . '&ad_id=' . $transaction_id;


            if ($is_b && ($xml->status != 'Error')) {
                $p_fields = array('aff_id' => '2', 'adv_sub' => $lead_id, 'transaction_id' => $transaction_id);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $global_postback_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $pb_result = curl_exec($ch);
                doLog(print_r($pb_result, true));
                doLog(print_r($transaction_id, true));
                curl_close($ch);

            }
        }
    }*/






    //     WAITING FOR NIKIA TI HAVE HASOFFERS CODE
    /*
    $postback_url = 'http://hbcinsure.go2cloud.org/' . $postback_code . '?adv_sub=' . $lead_id . '&transaction_id=' . $transaction_id . '&ad_id=' . $transaction_id;

    if ($is_b && ($xml->status != 'Error')) {
        $p_fields = array('aff_id' => '2', 'adv_sub' => $lead_id, 'transaction_id' => $transaction_id);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $postback_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $pb_result = curl_exec($ch);
        doLog(print_r($pb_result, true));
        doLog(print_r($transaction_id, true));
        curl_close($ch);

    }*/






} // curl wrapper


















$phone_complete = trim($_POST['day_phone']);
if (empty($phone_complete)) {
    $_POST['day_phone'] = '(' . $_POST['phone'] . ')' . $_POST['phone2'] . $_POST['phone3'];
}
foreach ($_POST as $key => $value) {
    if (isset($map_fields[$_POST['form_id']][$key])) {
        $params[$map_fields[$_POST['form_id']][$key]] = $value;
    }
}
if (isset($params['smoker'])) {
    $params['smoker'] = 'Y';
}






// ****************************************  ********************
// ****************************************  send lead to Boberdoo
// ****************************************  ********************


$url = 'https://leads.simpleinsuranceleads.com/genericPostlead.php';


//$dob = date("m/d/Y", strtotime($_POST['dob']));
$dob = date("m/d/Y", strtotime($_POST['applicant_dob']));


//$dob = date("m/d/Y", strtotime($_POST['applicant_dob']));


list($m, $d, $y) = explode("/", $dob);
$diff = mktime() - mktime(0, 0, 0, $m, $d, $y);
$age = (int)date('Y', $diff) - 1970;
$params = array();


$age_decimals = strtotime(date('Y/m/d')) - strtotime($_POST['applicant_dob']);

$age_decimals = $age_decimals/(60*60*24*365);



/*if($age_decimals >= 64.5){
    $lead_type = 79;
} else {
    $lead_type = 75;
};*/


if($_POST['insurance_type'] == 'health'){
    $lead_type = 75;
} else if($_POST['insurance_type'] == 'medicare'){
    $lead_type = 79;
};


$smoker = '';
if ($_POST['applicant_smoker'] == 'No') {
    $smoker = 'No';
} else if ($_POST['applicant_smoker'] == '') {
    $smoker = 'No';
} else {
    $smoker = 'Yes';
};


//  VV  Using CMS
/*

$params = array(
    'TYPE' => $index_zip_lead_type,
    'SRC' => $_REQUEST['SRC'] ? $_REQUEST['SRC'] : $index_zip_default_SRC,
//    'SRC' => $_REQUEST['SRC'] ? $_REQUEST['SRC'] : 'HBCQuotes_web',
    'Landing_Page' => $_REQUEST['Landing_Page'] ? $_REQUEST['Landing_Page'] : 'www.hbcquotes.com',
    'IP_Address' => $_SERVER['REMOTE_ADDR'],
    'Sub_ID' => $_REQUEST['Sub_ID'] ? $_REQUEST['Sub_ID'] : $_POST['sub_affiliate_id'],
    'Pub_ID' => $_REQUEST['Pub_ID'] ? $_REQUEST['Pub_ID'] : $_POST['affiliate_id'],
    'Aff_Sub' => $_REQUEST['aff_sub'] ? $_REQUEST['aff_sub'] : $_POST['aff_sub'],
    'Affiliate_Ref' => $_REQUEST['Affiliate_Ref'] ? $_REQUEST['Affiliate_Ref'] : $index_zip_default_AffRef,
    'Universal_Lead_ID' => $_REQUEST['universal_leadid'] ? $_REQUEST['universal_leadid'] : $_POST['universal_leadid'],
    'First_Name' => $_POST['first_name'],
    'Last_Name' => $_POST['last_name'],
    'Address' => $_POST['street1'],
    'City' => $_POST['city'],
    'State' => $_POST['state'],
    'Zip' => $_POST['zipcode'],
    'Primary_Phone' => preg_replace("`\D`", "", $_POST['day_phone']),
    'Secondary_Phone' => '',
    'Email' => $_POST['email'],
    'Gender' => $_POST['applicant_gender'],
    'DOB' => $dob,
    'Age' => $age,
    'Month_Of_Birth' => substr($_POST['DateOfBirth_Month'], 0, 3),
    'Day_Of_Birth' => $_POST['DateOfBirth_Day'],
    'Year_Of_Birth' => $_POST['DateOfBirth_Year'],
    'Height_Feet' => $_POST['applicant_heightFT'],
    'Height_Inches' => $_POST['applicant_heightIN'],
    'Weight' => $_POST['applicant_weight'],
    'Smoker' => $smoker
);

if ($self_emp) {
    $_POST['self_emp'] == 'Y' ? $params['Self_Employed'] = 'Yes' : $params['Self_Employed'] = 'No';
};
if ($insured) {
    $_POST['insured'] == 'Y' ? $params['Currently_Insured'] = 'Yes' : $params['Currently_Insured'] = 'No';
};
if ($hospitalized) {
    $_POST['hospitalized'] == 'Y' ? $params['Hospitalized'] = 'Yes' : $params['Hospitalized'] = 'No';
};
if ($physician) {
    $_POST['physician'] == 'Y' ? $params['Treated_By_Physician'] = 'Yes' : $params['Treated_By_Physician'] = 'No';
};
if ($prescription) {
    $_POST['prescription'] == 'Y' ? $params['Prescription_Medications'] = 'Yes' : $params['Prescription_Medications'] = 'No';
};
if ($no_of_children) {
    $params['Number_Of_Children'] = $_POST['no_of_children'];
};
if ($est_Income) {
    $params['Estimated_Income'] = $_POST['est_Income'];
};
if ($affordable) {
    $_POST['affordable'] == 'Y' ? $params['Able_To_Afford'] = 'Yes' : $params['Able_To_Afford'] = 'No';
};
if ($health) {
    $_POST['health'] == 'Y' ? $params['Health_Conditions'] = 'Yes' : $params['Health_Conditions'] = 'No';
    (isset($_POST['hiv'])) ? $params['AIDS_HIV'] = 'Yes' : $params['AIDS_HIV'] = 'No';
    (isset($_POST['diabetes'])) ? $params['Diabetes'] = 'Yes' : $params['Diabetes'] = 'No';
    (isset($_POST['liver-disease'])) ? $params['Liver_Disease'] = 'Yes' : $params['Liver_Disease'] = 'No';
    (isset($_POST['alzheimers'])) ? $params['Alzheimers_Disease'] = 'Yes' : $params['Alzheimers_Disease'] = 'No';
    (isset($_POST['lung-disease'])) ? $params['Lung_Disease'] = 'Yes' : $params['Lung_Disease'] = 'No';
    (isset($_POST['substance-abuse'])) ? $params['Substance_Abuse'] = 'Yes' : $params['Substance_Abuse'] = 'No';
    (isset($_POST['mental-illness'])) ? $params['Mental_Illness'] = 'Yes' : $params['Mental_Illness'] = 'No';
    (isset($_POST['cancer'])) ? $params['Cancer'] = 'Yes' : $params['Cancer'] = 'No';
    (isset($_POST['heart-disease'])) ? $params['Heart_Disease'] = 'Yes' : $params['Heart_Disease'] = 'No';

};
if ($previously_denied) {
    $_POST['previously-denied'] == 'Y' ? $params['Previously_Denied'] = 'Yes' : $params['Previously_Denied'] = 'No';
};
if ($pregnant) {
    $_POST['pregnant'] == 'Y' ? $params['Pregnant'] = 'Yes' : $params['Pregnant'] = 'No';
};
if ($ss_disabled) {
    $_POST['ss-disabled'] == 'Y' ? $params['Social_Security_Or_Disability'] = 'Yes' : $params['Social_Security_Or_Disability'] = 'No';
};
if ($Household_size) {
    $params['Number_Household'] = $_POST['howMany'];
};
if ($expected_income) {
    $params['Income'] = $_POST['income'];;
};

*/

// ----^^ USING CMS




switch ($lead_type) {
    case 65:
        // params def  ;
        break;
    case 67:
        // params def  ;
        break;
    case 69:
        // params def  ;
        break;
    case 71:
        // params def  ;
        break;
    case 73:
        // params def  ;
        break;
    case 75:  //  Health 2

        $test_lead = 0;

        $phone_validation = 'Success';
        $Browser = '';
        $Keyword_ID = '';
        $Aff_ID = '';
        $Full_URL = '';
        $Landing_Page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $Landing_Page = substr($Landing_Page, 0, -22);

        $params = array(
            'TYPE' => $lead_type,
            'Test_Lead' => $test_lead,
            //Here goes some other fields that are not being sent
            'TCPA_Language' => $_REQUEST['TCPA_Language'] ? $_REQUEST['TCPA_Language'] : 'None',
            'TCPA_Consent' => 'Yes',
            'QE_Eligible' => '',
            'Interaction_ID' => '',
            'Trusted_Form' => 'Yes',
            'Universal_Lead_ID' => $_REQUEST['universal_leadid'] ? $_REQUEST['universal_leadid'] : $_POST['universal_leadid'],
            'Phone_Validation' => $phone_validation,
            'Browser' => $browser,
            'Keyword_ID' => $Keyword_ID,
            'Aff_ID' => $Aff_ID,
            'Full_URL' => $_POST['Full_URL'],
            'IP_Address' => $_SERVER['REMOTE_ADDR'],
            'SRC' => $_REQUEST['SRC'] ? $_REQUEST['SRC'] : 'default_75',
            'Landing_Page' => $_REQUEST['Landing_Page'] ? $_REQUEST['Landing_Page'] : $Landing_Page,
            'Sub_ID' => $_REQUEST['Sub_ID'] ? $_REQUEST['Sub_ID'] : $_POST['sub_affiliate_id'],
            'Pub_ID' => $_REQUEST['Pub_ID'] ? $_REQUEST['Pub_ID'] : $_POST['affiliate_id'],
            'Optout' => '',
            'Unique_Identifier' => '',
            'forensiq_score' => $_REQUEST['forensiq_score'] ? $_REQUEST['forensiq_score'] : $_POST['forensiq_score'],
            'Affiliate_Ref' => $_REQUEST['Affiliate_Ref'] ? $_REQUEST['Affiliate_Ref'] : '1001',
            'INCOMENUMBER' => '',
            'Number_Of_Applicants' => '',
            'First_Name' => $_POST['first_name'],
            'Last_Name' => $_POST['last_name'],
            'Address' => $_POST['street1'],
            'City' => $_POST['city'],
            'State' => $_POST['state'],
            'Zip' => $_POST['zipcode'],
            'Email' => $_POST['email'],
            'Day_Phone' => preg_replace("`\D`", "", $_POST['day_phone']),
            'Household_Income' => $_POST['income'],
            'Household_People' => $_POST['household-size'],
            'Gender' => $_POST['applicant_gender'],
            'DOB' => $dob,
            // Height and weight added with isset
            'Age' => $age,
            // pregnant added as isset


            //'Aff_Sub' => $_REQUEST['aff_sub'] ? $_REQUEST['aff_sub'] : $_POST['aff_sub'],
            //'Secondary_Phone' => '',

            //'Month_Of_Birth' => substr($_POST['DateOfBirth_Month'], 0, 3),
            //'Day_Of_Birth' => $_POST['DateOfBirth_Day'],
            //'Year_Of_Birth' => $_POST['DateOfBirth_Year'],
            'Tobacco' => $smoker
        );

        (isset($_POST['applicant_heightFT'])) ? $params['Height_Feet'] = $_POST['applicant_heightFT'] : $params['Height_Feet'] = '0';
        (isset($_POST['applicant_heightIN'])) ? $params['Height_Inches'] = $_POST['applicant_heightIN'] : $params['Height_Inches'] = '0';
        (isset($_POST['applicant_weight'])) ? $params['Weight'] = $_POST['applicant_weight'] : $params['Weight'] = '0';

        $_POST['pregnant'] == 'Y' ? $params['Pregnant'] = 'Yes' : $params['Pregnant'] = 'No';
        $_POST['health'] == 'Y' ? $params['Health_Conditions'] = 'Yes' : $params['Health_Conditions'] = 'No';

        $_POST['insured'] == 'Y' ? $params['Currently_Covered'] = 'Yes' : $params['Currently_Covered'] = 'No';

        $_POST['previously-denied'] == 'Y' ? $params['Coverage_Denied'] = 'Yes' : $params['Coverage_Denied'] = 'No';



        //Insurance_Company
        //Conditions
        //Diabetic
        (isset($_POST['diabetes'])) ? $params['Diabetic'] = 'Yes' : $params['Diabetic'] = 'No';

        //Hospitalized_Last_5_Years
        $_POST['hospitalized'] == 'Y' ? $params['Hospitalized_Last_5_Years'] = 'Yes' : $params['Hospitalized_Last_5_Years'] = 'No';

        //Prescription_Medication
        $_POST['prescription'] == 'Y' ? $params['Prescription_Medication'] = 'Yes' : $params['Prescription_Medication'] = 'No';

        //Employment_Status
        //Spouse_Gender
        //Spouse_Height_Feet
        //Spouse_Height_Inches
        //Spouse_Weight
        //Spouse_DOB
        //Spouse_Health_Conditions
        //Spouse_Conditions
        //Child_1_Gender
        //Child_1_Height_Feet
        //Child_1_Height_Inches
        //Child_1_Weight
        //Child_1_DOB
        //Child_1_Health_Conditions
        //Child_1_Conditions
        //Child_2_Gender
        //Child_2_Height_Feet
        //Child_2_Height_Inches
        //Child_2_Weight
        //Child_2_DOB
        //Child_2_Health_Conditions
        //Child_2_Conditions
        //Child_3_Gender
        //Child_3_Height_Feet
        //Child_3_Height_Inches
        //Child_3_Weight
        //Child_3_DOB
        //Child_3_Health_Conditions
        //Child_3_Conditions
        //Child_4_Gender
        //Child_4_Height_Feet
        //Child_4_Height_Inches
        //Child_4_Weight
        //Child_4_DOB
        //Child_4_Health_Conditions
        //Child_4_Conditions
        //Child_5_Gender
        //Child_5_Height_Feet
        //Child_5_Height_Inches
        //Child_5_Weight
        //Child_5_DOB
        //Child_5_Health_Conditions
        //Child_5_Conditions
        //State2
        //Income2
        //Ehealth_Income
        //Email_OptIn
        //household_income_revalue
        //Qualifying_Life_Event_Type
        //Date_Of_Event
/*
        $_POST['self_emp'] == 'Y' ? $params['Self_Employed'] = 'Yes' : $params['Self_Employed'] = 'No';


        $_POST['physician'] == 'Y' ? $params['Treated_By_Physician'] = 'Yes' : $params['Treated_By_Physician'] = 'No';

        $params['Number_Of_Children'] = $_POST['no_of_children'];
        $params['Estimated_Income'] = $_POST['est_Income'];
        $_POST['affordable'] == 'Y' ? $params['Able_To_Afford'] = 'Yes' : $params['Able_To_Afford'] = 'No';

        (isset($_POST['hiv'])) ? $params['AIDS_HIV'] = 'Yes' : $params['AIDS_HIV'] = 'No';

        (isset($_POST['liver-disease'])) ? $params['Liver_Disease'] = 'Yes' : $params['Liver_Disease'] = 'No';
        (isset($_POST['alzheimers'])) ? $params['Alzheimers_Disease'] = 'Yes' : $params['Alzheimers_Disease'] = 'No';
        (isset($_POST['lung-disease'])) ? $params['Lung_Disease'] = 'Yes' : $params['Lung_Disease'] = 'No';
        (isset($_POST['substance-abuse'])) ? $params['Substance_Abuse'] = 'Yes' : $params['Substance_Abuse'] = 'No';
        (isset($_POST['mental-illness'])) ? $params['Mental_Illness'] = 'Yes' : $params['Mental_Illness'] = 'No';
        (isset($_POST['cancer'])) ? $params['Cancer'] = 'Yes' : $params['Cancer'] = 'No';
        (isset($_POST['heart-disease'])) ? $params['Heart_Disease'] = 'Yes' : $params['Heart_Disease'] = 'No';

        $_POST['ss-disabled'] == 'Y' ? $params['Social_Security_Or_Disability'] = 'Yes' : $params['Social_Security_Or_Disability'] = 'No';
        $params['Number_Household'] = $_POST['household-size'];*/


        break;
    case 77:
        // params def  ;
        break;
    case 79:   //  Medicare

        $test_lead = 0;

        $phone_validation = 'Success';
        $Browser = '';
        $Keyword_ID = '';
        $Aff_ID = '';
        $Full_URL = '';
        $Landing_Page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $Landing_Page = substr($Landing_Page, 0, -22);

        $params = array(
            'TYPE' => $lead_type,
            'Test_Lead' => $test_lead,

            //    NO	Skip_XSL
            //    NO	Match_With_Partner_ID
            //    NO	Redirect_URL
            //    NO	High_Budget_Sales
            //    NO	Low_Budget_Sales
            //    NO	Disposition
            //    NO	Interaction_ID
            //    NO	Trusted_Form

            'Universal_Lead_ID' => $_REQUEST['universal_leadid'] ? $_REQUEST['universal_leadid'] : $_POST['universal_leadid'],
            'Phone_Validation' => $phone_validation,
            'Browser' => $Browser,
            'Keyword_ID' => $Keyword_ID,
            'Full_URL' => $_POST['Full_URL'],
            'SRC' => $_REQUEST['SRC'] ? $_REQUEST['SRC'] : 'default_mgq',
            'Landing_Page' => $_REQUEST['Landing_Page'] ? $_REQUEST['Landing_Page'] : $Landing_Page,
            'IP_Address' => $_SERVER['REMOTE_ADDR'],
            'Sub_ID' => $_REQUEST['Sub_ID'] ? $_REQUEST['Sub_ID'] : $_POST['sub_affiliate_id'],
            'Pub_ID' => $_REQUEST['Pub_ID'] ? $_REQUEST['Pub_ID'] : $_POST['affiliate_id'],
            'Optout' => '',
            'Unique_Identifier' => '',
            'forensiq_score' => $_REQUEST['forensiq_score'] ? $_REQUEST['forensiq_score'] : $_POST['forensiq_score'],
            'Affiliate_Ref' => $_REQUEST['Affiliate_Ref'] ? $_REQUEST['Affiliate_Ref'] : '1001',
            'First_Name' => $_POST['first_name'],
            'Last_Name' => $_POST['last_name'],
            'Address' => $_POST['street1'],
            'City' => $_POST['city'],
            'State' => $_POST['state'],
            'Zip' => $_POST['zipcode'],
            'Primary_Phone' => preg_replace("`\D`", "", $_POST['day_phone']),

            'Secondary_Phone' => '',
            'Email' => $_POST['email'],


            //    NO	End_Stage_Renal_Disease
            //    NO	Medicare_Coverage

            'Gender' => $_POST['applicant_gender'],
            'Tobacco' => $smoker,
            'DOB' => $dob,
            'Age' => $age_decimals,
            // Height and weight added with isset


            // ****  Fields Below are not in boberdoo Specs for this lead type

            //    'TCPA_Language' => $_REQUEST['TCPA_Language'] ? $_REQUEST['TCPA_Language'] : 'None',
            //    'TCPA_Consent' => 'Yes',
            //    'QE_Eligible' => '',
            //    'Interaction_ID' => '',
            //    'Trusted_Form' => 'Yes',
            //    'Aff_ID' => $Aff_ID,
            //    'INCOMENUMBER' => '',
            //    'Number_Of_Applicants' => '',
            //    'Household_Income' => $_POST['income'],
            //    'Household_People' => $_POST['household-size'],
            //    'Aff_Sub' => $_REQUEST['aff_sub'] ? $_REQUEST['aff_sub'] : $_POST['aff_sub'],
            //
            //
            //    'Month_Of_Birth' => substr($_POST['DateOfBirth_Month'], 0, 3),
            //    'Day_Of_Birth' => $_POST['DateOfBirth_Day'],
            //    'Year_Of_Birth' => $_POST['DateOfBirth_Year'],
        );



        (isset($_POST['applicant_heightFT'])) ? $params['Height_Feet'] = $_POST['applicant_heightFT'] : $params['Height_Feet'] = '0';
        (isset($_POST['applicant_heightIN'])) ? $params['Height_Inches'] = $_POST['applicant_heightIN'] : $params['Height_Inches'] = '0';
        (isset($_POST['applicant_weight'])) ? $params['Weight'] = $_POST['applicant_weight'] : $params['Weight'] = '0';



        //    $_POST['pregnant'] == 'Y' ? $params['Pregnant'] = 'Yes' : $params['Pregnant'] = 'No';
        //    $_POST['health'] == 'Y' ? $params['Health_Conditions'] = 'Yes' : $params['Health_Conditions'] = 'No';
        //    $_POST['insured'] == 'Y' ? $params['Currently_Covered'] = 'Yes' : $params['Currently_Covered'] = 'No';
        //    $_POST['previously-denied'] == 'Y' ? $params['Coverage_Denied'] = 'Yes' : $params['Coverage_Denied'] = 'No';
        //    (isset($_POST['diabetes'])) ? $params['Diabetic'] = 'Yes' : $params['Diabetic'] = 'No';
        //    $_POST['hospitalized'] == 'Y' ? $params['Hospitalized_Last_5_Years'] = 'Yes' : $params['Hospitalized_Last_5_Years'] = 'No';
        //    $_POST['prescription'] == 'Y' ? $params['Prescription_Medication'] = 'Yes' : $params['Prescription_Medication'] = 'No';

        break;
    case 81:
        // params def  ;
        break;
}




/*
$params = array(
    'TYPE' => $lead_type,
    'SRC' => $_REQUEST['SRC'] ? $_REQUEST['SRC'] : 'HBCQuotes_main_web',
//    'SRC' => $_REQUEST['SRC'] ? $_REQUEST['SRC'] : 'HBCQuotes_web',
    'Landing_Page' => $_REQUEST['Landing_Page'] ? $_REQUEST['Landing_Page'] : 'www.hbcquotes.com',
    'IP_Address' => $_SERVER['REMOTE_ADDR'],
    'Sub_ID' => $_REQUEST['Sub_ID'] ? $_REQUEST['Sub_ID'] : $_POST['sub_affiliate_id'],
    'Pub_ID' => $_REQUEST['Pub_ID'] ? $_REQUEST['Pub_ID'] : $_POST['affiliate_id'],
    'Aff_Sub' => $_REQUEST['aff_sub'] ? $_REQUEST['aff_sub'] : $_POST['aff_sub'],
    'Affiliate_Ref' => $_REQUEST['Affiliate_Ref'] ? $_REQUEST['Affiliate_Ref'] : '1000',
    'Universal_Lead_ID' => $_REQUEST['universal_leadid'] ? $_REQUEST['universal_leadid'] : $_POST['universal_leadid'],
    'First_Name' => $_POST['first_name'],
    'Last_Name' => $_POST['last_name'],
    'Address' => $_POST['street1'],
    'City' => $_POST['city'],
    'State' => $_POST['state'],
    'Zip' => $_POST['zipcode'],
    'Primary_Phone' => preg_replace("`\D`", "", $_POST['day_phone']),
    'Secondary_Phone' => '',
    'Email' => $_POST['email'],
    'Gender' => $_POST['applicant_gender'],
    'DOB' => $dob,
    'Age' => $age,
    'Month_Of_Birth' => substr($_POST['DateOfBirth_Month'], 0, 3),
    'Day_Of_Birth' => $_POST['DateOfBirth_Day'],
    'Year_Of_Birth' => $_POST['DateOfBirth_Year'],
//    'Height_Feet' => $_POST['applicant_heightFT'],
//    'Height_Inches' => $_POST['applicant_heightIN'],
//    'Weight' => $_POST['applicant_weight'],
    'Smoker' => $smoker




);

    (isset($_POST['applicant_heightFT'])) ? $params['Height_Feet'] = $_POST['applicant_heightFT'] : $params['Height_Feet'] = '0';
    (isset($_POST['applicant_heightIN'])) ? $params['Height_Inches'] = $_POST['applicant_heightIN'] : $params['Height_Inches'] = '0';
    (isset($_POST['applicant_weight'])) ? $params['Weight'] = $_POST['applicant_weight'] : $params['Weight'] = '0';

    $_POST['self_emp'] == 'Y' ? $params['Self_Employed'] = 'Yes' : $params['Self_Employed'] = 'No';

    $_POST['insured'] == 'Y' ? $params['Currently_Insured'] = 'Yes' : $params['Currently_Insured'] = 'No';

    $_POST['hospitalized'] == 'Y' ? $params['Hospitalized'] = 'Yes' : $params['Hospitalized'] = 'No';
    $_POST['physician'] == 'Y' ? $params['Treated_By_Physician'] = 'Yes' : $params['Treated_By_Physician'] = 'No';
    $_POST['prescription'] == 'Y' ? $params['Prescription_Medications'] = 'Yes' : $params['Prescription_Medications'] = 'No';
    $params['Number_Of_Children'] = $_POST['no_of_children'];
    $params['Estimated_Income'] = $_POST['est_Income'];
    $_POST['affordable'] == 'Y' ? $params['Able_To_Afford'] = 'Yes' : $params['Able_To_Afford'] = 'No';
    $_POST['health'] == 'Y' ? $params['Health_Conditions'] = 'Yes' : $params['Health_Conditions'] = 'No';
    (isset($_POST['hiv'])) ? $params['AIDS_HIV'] = 'Yes' : $params['AIDS_HIV'] = 'No';
    (isset($_POST['diabetes'])) ? $params['Diabetes'] = 'Yes' : $params['Diabetes'] = 'No';
    (isset($_POST['liver-disease'])) ? $params['Liver_Disease'] = 'Yes' : $params['Liver_Disease'] = 'No';
    (isset($_POST['alzheimers'])) ? $params['Alzheimers_Disease'] = 'Yes' : $params['Alzheimers_Disease'] = 'No';
    (isset($_POST['lung-disease'])) ? $params['Lung_Disease'] = 'Yes' : $params['Lung_Disease'] = 'No';
    (isset($_POST['substance-abuse'])) ? $params['Substance_Abuse'] = 'Yes' : $params['Substance_Abuse'] = 'No';
    (isset($_POST['mental-illness'])) ? $params['Mental_Illness'] = 'Yes' : $params['Mental_Illness'] = 'No';
    (isset($_POST['cancer'])) ? $params['Cancer'] = 'Yes' : $params['Cancer'] = 'No';
    (isset($_POST['heart-disease'])) ? $params['Heart_Disease'] = 'Yes' : $params['Heart_Disease'] = 'No';

    $_POST['previously-denied'] == 'Y' ? $params['Previously_Denied'] = 'Yes' : $params['Previously_Denied'] = 'No';
    $_POST['pregnant'] == 'Y' ? $params['Pregnant'] = 'Yes' : $params['Pregnant'] = 'No';
    $_POST['ss-disabled'] == 'Y' ? $params['Social_Security_Or_Disability'] = 'Yes' : $params['Social_Security_Or_Disability'] = 'No';
    $params['Number_Household'] = $_POST['household-size'];
    $params['Income'] = $_POST['income'];;*/



/*
// list vars to file for testing
$fp = fopen('postvars.txt', 'a');
foreach($params as $key=>$value) {
  fwrite($fp, $key.' => .$value."\n");
}
fclose($fp);
*/


curl_wrapper($url, 2, $params, TRUE);

// send email with data
$body = '<h3>Data sent to Boberdoo:</h3>';
$body .= '<ul>';
foreach ($params as $key => $value) {
    $body .= '<li><b>' . $key . '</b>:' . $value . '</li>';
}
$body .= '</ul>';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: <boberdoo@hbcinsure.com>' . "\r\n";
//$headers .= 'Bcc: edward@studiopersona.com' . "\r\n";

//mail("hugomartinez@hbcinsure.com", "New Prospect at hbcquotes", $body, $headers);
//mail("hrankin@sileads.com", "New Prospect at hbcquotes", $body, $headers);



//mail("HMartinez@simplehealthplans.com", "New Prospect at hbcquotes", $body, $headers);

?>