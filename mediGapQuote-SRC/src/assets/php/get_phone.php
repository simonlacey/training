<?php



function get_phone($offer_id, $affiliate_id, $aff_sub){

    $servername = "hbcquotes.com";
    $username = "rxonline_intcms";
    $password = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";

    $did = '';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        //$did = 8773869926;
        $did = 8552818493;
    }

    $ver = 50;  // for AHI



    $sql1 = "select * from affiliates_ctrl where version = $ver and offer_ref = $offer_id
              and affiliate_id = $affiliate_id and aff_sub = $aff_sub";
    $rslt1 = $conn->query($sql1);

    if ($rslt1->num_rows > 0) {
        while ($row = $rslt1->fetch_assoc()) {
            $did = $row["did"];
        }
    } else {

        $sql1 = "select * from affiliates_ctrl where version = $ver and offer_ref = $offer_id
              and affiliate_id = $affiliate_id";
        $rslt1 = $conn->query($sql1);

        if ($rslt1->num_rows > 0) {
            while ($row = $rslt1->fetch_assoc()) {
                $did = $row["did"];
            }
        } else {
            //$did = 8773869926;
            $did = 8552818493;
        }

    }


/*

    if ($aff_sub == ''){
        $sql1 = "select * from affiliates_ctrl where version = $ver and offer_ref = $offer_id
              and affiliate_id = $affiliate_id";
        $rslt1 = $conn->query($sql1);

        if ($rslt1->num_rows > 0) {
            while ($row = $rslt1->fetch_assoc()) {
                $did = $row["did"];
            }
        } else {
            $did = 8773869926;
        }

    } else {
        $sql1 = "select * from affiliates_ctrl where version = $ver and offer_ref = $offer_id
              and affiliate_id = $affiliate_id and aff_sub = $aff_sub";
        $rslt1 = $conn->query($sql1);

        if ($rslt1->num_rows > 0) {
            while ($row = $rslt1->fetch_assoc()) {
                $did = $row["did"];
            }
        } else {
            $did = 8773869926;
        }
    }


   */



    $conn->close();

    $phone_number = $did;
    $phone_number = substr_replace($phone_number, '(', 0, 0);
    $phone_number = substr_replace($phone_number, ')', 4, 0);
    $phone_number = substr_replace($phone_number, ' ', 5, 0);
    $phone_number = substr_replace($phone_number, '-', 9, 0);

    return $phone_number;

}


?>


