<?php

if (!isset($_POST['insurance_type'])) {
    $_POST['insurance_type'] = 'health';
}

echo '
                            <input type="hidden" name="transaction_id" id="transaction_id"
                                   value="' . $_POST["transaction_id"] . '" readonly="readonly">
                            <input type="hidden" name="affiliate_id" id="affiliate_id"
                                   value="' . $_POST["affiliate_id"] . '" readonly="readonly">
                            <input type="hidden" name="sub_affiliate_id" id="sub_affiliate_id"
                                   value="' . $_POST["sub_affiliate_id"] . '" readonly="readonly">
                            <input type="hidden" name="SRC" id="SRC" value="' . $_POST["SRC"] . '"
                                   readonly="readonly">
                            <input type="hidden" name="Full_URL" id="Full_URL"
                                   value="' . $_POST["Full_URL"] . '" readonly="readonly">
                            <input type="hidden" name="Landing_Page" id="Landing_Page"
                                   value="' . $_POST["Landing_Page"] . '" readonly="readonly">
                            <input type="hidden" name="aff_sub" id="aff_sub"
                                   value="' . $_POST["aff_sub"] . '" readonly="readonly">
                            <input type="hidden" name="offer_id" id="offer_id"
                                   value="' . $_POST["offer_id"] . '" readonly="readonly">
                            <input type="hidden" name="Affiliate_Ref" id="Affiliate_Ref"
                                   value="' . $_POST["Affiliate_Ref"] . '" readonly="readonly">
                            <input type="hidden" name="universal_leadid" id="leadid_token"
                                   value="' . $_POST['universal_leadid'] . '" readonly="readonly">
                            <input type="hidden" name="insurance_type" id="insurance_type"
                                   value="' . $_POST['insurance_type'] . '" readonly="readonly">
                            <input type="hidden" name="forensiq_score" id="forensiq_score"
                                   value="" readonly="readonly">
                            <input type="hidden" name="TCPA_Language" id="TCPA_Language"
                                   value="" readonly="readonly">';

include "./assets/php/getcity.php";
?>