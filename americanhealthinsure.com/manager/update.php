<?php
/**
 * Created by PhpStorm.
 * User: HM9
 * Date: 4/20/2015
 * Time: 2:27 PM
 */



include 'inc/config.php';


if(function_exists($_GET['f'])) {
    $_GET['f']();
}else{
    echo $_GET['f'];
    echo "didnt get the function name";
    die();
}



function intro(){

}


function index_update()
{
    include 'inc/config.php';
    session_start();

    if (isset($_POST["index_ver"])) {
        $ver = $_POST["index_ver"];
    } elseif (isset($_GET["index_ver"])) {
        $ver = $_GET["index_ver"];
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



    $index_ver = $_POST["index_ver"];
    $campaign_name = $_POST["campaign_name"];
    $index_aspect = $_POST["index_aspect"];
    $index_default_SRC = $_POST["index_default_SRC"];
    $index_default_AffRef = $_POST["index_default_AffRef"];
    $lead_type_id = $_POST["lead_type_id"];
    $index_exist = intval($_POST["index_exist"]);
    $index_has_phone_number_header = intval($_POST["index_has_phone_number_header"]);
    $phone_number = $_POST["phone_number"];
    $index_has_phone_number_footer = intval($_POST["index_has_phone_number_footer"]);

    $sql1 = "UPDATE `$dbname`.`index_ctrl`
         SET `campaign_name`='$campaign_name', `index_aspect`='$index_aspect', `index_default_SRC`='$index_default_SRC', `index_default_AffRef`='$index_default_AffRef',
         `lead_type_id`='$lead_type_id', `index_exist`=$index_exist, `index_has_phone_number_header`=$index_has_phone_number_header,
           `phone_number`='$phone_number', `index_has_phone_number_footer`=$index_has_phone_number_footer WHERE `index_ver`='$index_ver';";

//        echo $sql1;
//        echo "<br>";
//        echo $sql2;

    if ($conn2->query($sql1) === TRUE) {
        header("location:edit.php?ver=$index_ver");
    } else {
        echo "Error updating record for index: " . $conn2->error;
    }



//$result=mysql_query($sql1);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row




}




function index_zip_update()
{
    include 'inc/config.php';

    session_start();

    if (isset($_POST["index_zip_ver"])) {
        $ver = $_POST["index_zip_ver"];
    } elseif (isset($_GET["index_zip_ver"])) {
        $ver = $_GET["index_zip_ver"];
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

    $index_zip_aspect = $_POST["index_zip_aspect"];
    $index_zip_lead_type = $_POST["index_zip_lead_type"];
    $index_zip_default_SRC = $_POST["index_zip_default_SRC"];
    $index_zip_default_AffRef = $_POST["index_zip_default_AffRef"];

    $index_zip_exist = intval($_POST["index_zip_exist"]);

    $index_zip_has_phone_number_header = intval($_POST["index_zip_has_phone_number_header"]);
    $index_zip_has_phone_number_footer = intval($_POST["index_zip_has_phone_number_footer"]);
    $banner_position = intval($_POST["banner_position"]);

    $banner_position_1 = 0;
    $banner_position_2 = 0;
    $banner_position_3 = 0;

    if($banner_position == 1)
    {
        $banner_position_1 = 1;
    } elseif($banner_position == 2){
        $banner_position_2 = 1;
    } elseif($banner_position == 3)
    {
        $banner_position_3 = 1;
    } else{}

    $sql_index_zip = "UPDATE `$dbname`.`index_zip_ctrl`
                  SET `index_zip_lead_type`='$index_zip_lead_type', `index_zip_aspect`='$index_zip_aspect', `index_zip_default_SRC`='$index_zip_default_SRC',
                  `index_zip_default_AffRef`='$index_zip_default_AffRef',
                  `index_zip_exist`=$index_zip_exist, `index_zip_has_phone_number_header`=$index_zip_has_phone_number_header,
                  `index_zip_has_phone_number_footer`=$index_zip_has_phone_number_footer,
                  `banner_position_1`=$banner_position_1, `banner_position_2`=$banner_position_2, `banner_position_3`=$banner_position_3
                  WHERE `index_zip_ver`='$ver';";

 //   echo $sql_index_zip;

    if ($conn2->query($sql_index_zip) === TRUE) {
        header("location:edit.php?ver=$ver");
    } else {
        echo "Error updating record for index _zip: " . $conn2->error;
    }
}











function page_update()
{
    include 'inc/config.php';

    session_start();

    if (isset($_POST["index_ver"])) {
        $ver = $_POST["index_ver"];
    } elseif (isset($_GET["index_ver"])) {
        $ver = $_GET["index_ver"];
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

    $page_exist = intval($_POST["page_exist"]);
    $page_has_phone_number_header = intval($_POST["page_has_phone_number_header"]);
    $self_emp = intval($_POST["self_emp"]);
    $insured = intval($_POST["insured"]);
    $Spouse = intval($_POST["Spouse"]);
    $no_of_children = intval($_POST["no_of_children"]);
    $est_Income = intval($_POST["est_Income"]);
    $affordable = intval($_POST["affordable"]);
    $hospitalized = intval($_POST["hospitalized"]);
    $physician = intval($_POST["physician"]);
    $prescription = intval($_POST["prescription"]);
    $previously_denied = intval($_POST["previously_denied"]);
    $ss_disabled = intval($_POST["ss_disabled"]);
    $pregnant = intval($_POST["pregnant"]);
    $health = intval($_POST["health"]);
    $Household_size = intval($_POST["Household_size"]);
    $expected_income = intval($_POST["expected_income"]);
    $click_agree_terms_cond = intval($_POST["click_agree_terms_cond"]);
    $affil_contact = intval($_POST["affil_contact"]);




    $sql_page = "UPDATE `$dbname`.`page_ctrl` SET `page_exist`=$page_exist, `page_has_phone_number_header`=$page_has_phone_number_header,
              `self_emp`=$self_emp, `insured`=$insured, `Spouse`=$Spouse, `no_of_children`=$no_of_children, `est_Income`=$est_Income,
               `affordable`=$affordable, `hospitalized`=$hospitalized, `physician`=$physician, `prescription`=$prescription,
                `previously_denied`=$previously_denied, `ss_disabled`=$ss_disabled, `pregnant`=$pregnant, `health`=$health,
                 `Household_size`=$Household_size, `expected_income`=$expected_income, `click_agree_terms_cond`=$click_agree_terms_cond,
                  `affil_contact`=$affil_contact WHERE `page_ver`='$ver';";







    //   echo $sql_index_zip;

    if ($conn2->query($sql_page) === TRUE) {
        header("location:edit.php?ver=$ver");
    } else {
        echo "Error updating record for index _zip: " . $conn2->error;
    }
}





function thankyou_update()
{
    include 'inc/config.php';

    session_start();

    if (isset($_POST["index_ver"])) {
        $ver = $_POST["index_ver"];
    } elseif (isset($_GET["index_ver"])) {
        $ver = $_GET["index_ver"];
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

    $index_ver = $_POST["index_ver"];
    $thankyou_exist = intval($_POST["thankyou_exist"]);
    $thankyou_has_phone_number_header = intval($_POST["thankyou_has_phone_number_header"]);




    $sql_thankyou = "UPDATE `$dbname`.`thankyou_ctrl`
         SET `thankyou_exist`=$thankyou_exist, `thankyou_has_phone_number_header`=$thankyou_has_phone_number_header
           WHERE `thankyou_ver`='$index_ver';";

  //  $sql2 = "UPDATE `webpagedb`.`thankyou_ctrl` SET `thankyou_exist`=1, `thankyou_has_phone_number_header`=1 WHERE `thankyou_ver`='7';";

 //       echo $sql_thankyou;
  //      echo "<br>";
  //      echo $sql2;



    if ($conn2->query($sql_thankyou) === TRUE) {
        header("location:edit.php?ver=$index_ver");
    } else {
        echo "Error updating record for index: " . $conn2->error;
    }



//$result=mysql_query($sql1);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row


}

























function states_update()
{
    include 'inc/config.php';

    session_start();

    if (isset($_POST["index_ver"])) {
        $ver = $_POST["index_ver"];
    } elseif (isset($_GET["index_ver"])) {
        $ver = $_GET["index_ver"];
    } else {
        echo "Couldn't get the version";
        die();
    }


    $states_list = array("AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "FL", "GA", "HI", "ID", "IL", "IN", "IA", "KS",
        "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH",
        "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY", "PR", "DC");

    $states_list_name = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut",
        "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky",
        "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri",
        "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina",
        "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota",
        "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming",
        "Puerto Rico", "District of Columbia");



    if (isset($_SESSION['myusername'])) {

        $conn2 = new mysqli($servername, $username, $password, $dbname);
        if ($conn2->connect_error) {
            die("Connection failed: " . $conn2->connect_error);
        }
    } else {
        echo "Couldn't log in";
        die();
    };



//      UPDATE states_ctrl SET `CA` = 0, `DE` = 0, `HI`=1 WHERE states_ver=5;

    $sql_states_update = "UPDATE states_ctrl SET ";

    for ($x = 0; $x < count($states_list); $x++) {
        $sql_states_update .= "`" . $states_list[$x] . "` = " . intval($_POST["$states_list[$x]"]);

        if ($x != (count($states_list) - 1)) {
            $sql_states_update .= ',';
        } else
        {
            $sql_states_update .= '  WHERE states_ver=' . $ver . ';';
        }
    };

    //   echo $sql_index_zip;

    if ($conn2->query($sql_states_update) === TRUE) {
        header("location:edit.php?ver=$ver");
    } else {
        echo "Error updating record for index _zip: " . $conn2->error;
    };

};






function states_update_allcamp()
{
    include 'inc/config.php';

    session_start();

    if (isset($_POST["index_ver"])) {
        $ver = $_POST["index_ver"];
    } elseif (isset($_GET["index_ver"])) {
        $ver = $_GET["index_ver"];
    } else {
        echo "Couldn't get the version";
        die();
    }


    if ($_POST["add_state"] == "--" && $_POST["remove_state"] == "--") {
        header("location:edit.php?ver=$ver");
    } else if ($_POST["add_state"] != "--") {
        $add_state = $_POST["add_state"];
        $states_update_allcamp = "UPDATE states_ctrl SET `$add_state` = 1 WHERE states_ver>0;";
    } else if ($_POST["remove_state"] != "--") {
        $remove_state = $_POST["remove_state"];
        $states_update_allcamp = "UPDATE states_ctrl SET `$remove_state` = 0 WHERE states_ver>0;";
    } else {
        header("location:edit.php?ver=$ver");
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


    if ($conn2->query($states_update_allcamp) === TRUE) {
        header("location:edit.php?ver=$ver");
    } else {
        echo "Error updating record for index _zip: " . $conn2->error;
    };

};





function postback_hasoffers()
{
    include 'inc/config.php';
    session_start();

    if (isset($_POST["version"])) {
        $ver = $_POST["version"];
    } elseif (isset($_GET["version"])) {
        $ver = $_GET["version"];
    } else {
        echo "Couldn't get the version";
        die();
    }

    $postback_url = $_POST['postback_url'];

    $make_postback = $_POST['make_postback'];


    $conn2 = new mysqli($servername, $username, $password, $dbname);
    //$sql15 = "select * from postback_hasoffers where version = $ver";

    $sql15 = "INSERT INTO postback_hasoffers (version,postback_url) VALUES ($ver,'$postback_url');";

    //$rslt15 = $conn2->query($sql15);


    if ($conn2->query($sql15) === TRUE) {
        header("location:edit.php?ver=$ver");
    } else {
        echo $sql15;
        echo "Error updating record for postback_hasoffers: " . $conn2->error;
    };

};








function affiliates()
{
    include 'inc/config.php';

    session_start();

    if (isset($_POST["version"])) {
        $ver = $_POST["version"];
    } elseif (isset($_GET["version"])) {
        $ver = $_GET["version"];
    } else {
        echo "Couldn't get the version";
        die();
    }


    $conn20 = new mysqli($servername, $username, $password, $dbname);
    if ($conn20->connect_error) {
        die("Connection failed: " . $conn20->connect_error);
    };

    $offer_ref = $_POST["offer_ref"];
    $affiliate_id = $_POST["affiliate_id"];
    $affiliate_name = $_POST["affiliate_name"];
    $aff_sub = $_POST["aff_sub"];
    $did = $_POST["did"];


    $sql_affiliate = "INSERT INTO rxonline_intcms.affiliates_ctrl (version, offer_ref, affiliate_id,
                      aff_sub, did) VALUES ($ver, $offer_ref, '$affiliate_id', '$aff_sub', $did);";


    if ($conn20->query($sql_affiliate) === TRUE) {
        header("location:edit.php?ver=$ver");
    } else {
        echo $sql_affiliate;
        echo "Error updating record for index: " . $conn20->error;
    }





};












function del_postback_url()
{
    include 'inc/config.php';

    session_start();

    $conn20 = new mysqli($servername, $username, $password, $dbname);
    if ($conn20->connect_error) {
        die("Connection failed: " . $conn20->connect_error);
    };

    $ver = $_GET["ver"];
    $postback_url = base64_decode($_GET["postback_url"]);

    $del_postback_url = "DELETE FROM rxonline_intcms.postback_hasoffers WHERE version = '$ver' and postback_url = '$postback_url';";


    if ($conn20->query($del_postback_url) === TRUE) {
        header("location:edit.php?ver=$ver");
    } else {
        echo $del_postback_url;
        echo "Error updating record for index: " . $conn20->error;
    }
};













function del_affiliate()
{
    include 'inc/config.php';

    session_start();

    $conn20 = new mysqli($servername, $username, $password, $dbname);
    if ($conn20->connect_error) {
        die("Connection failed: " . $conn20->connect_error);
    };

    $id = $_GET["id"];

    $ver = $_GET["ver"];

    $del_affiliate = "DELETE FROM rxonline_intcms.affiliates_ctrl WHERE id = '$id';";

    if ($conn20->query($del_affiliate) === TRUE) {

        header("location:edit.php?ver=$ver");
    } else {
        echo $del_affiliate;
        echo "Error updating record for index: " . $conn20->error;
    }
};










function carrier_add()
{
    include 'inc/config.php';
    session_start();

    $carrier_name = $_POST['carrier_name'];


    $conn2 = new mysqli($servername, $username, $password, $dbname);
    //$sql15 = "select * from postback_hasoffers where version = $ver";

    $sql15 = "INSERT INTO carriers (carrier_name) VALUES ('$carrier_name');";

    //$rslt15 = $conn2->query($sql15);


    if ($conn2->query($sql15) === TRUE) {
        header("location:main_new.php");
    } else {
        echo $sql15;
        echo "Error updating record for postback_hasoffers: " . $conn2->error;
    };

};






function carrier_del()
{
    include 'inc/config.php';

    session_start();

    $conn20 = new mysqli($servername, $username, $password, $dbname);
    if ($conn20->connect_error) {
        die("Connection failed: " . $conn20->connect_error);
    };

    $id = $_POST["carrier_id"];

    $carrier_name = $_POST['carrier_name'];

    $del_carrier = "DELETE FROM rxonline_intcms.carriers WHERE id = $id;";

    if ($conn20->query($del_carrier) === TRUE) {

        header("location:main_new.php");
    } else {
        echo $del_carrier;
        echo "Error updating record for index: " . $conn20->error;
    }
};




?>