<input type="hidden" name="ip_address" id="ip_address" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
<input type="hidden" name="form_id" value="2" readonly>
<input type="hidden" name="transaction_id" id="transaction_id" value="<?php echo $_GET['transaction_id'];?>" readonly>
<input type="hidden" name="affiliate_id" id="affiliate_id" value="<?php echo $_GET['affiliate_id'];?>" readonly>
<input type="hidden" name="offer_id" id="offer_id" value="<?php echo $_GET['offer_id'];?>" readonly>
<input type="hidden" name="sub_affiliate_id" id="sub_affiliate_id" value="" readonly>
<input type="hidden" name="aff_sub" id="aff_sub" value="<?php echo $_GET['aff_sub'];?>" readonly>
<input type="hidden" name="SRC" id="SRC" value="" readonly>
<input type="hidden" name="Full_URL" id="Full_URL"
       value='http://<?php echo "$_SERVER[HTTP_HOST]" . "$_SERVER[REQUEST_URI]";?>' readonly>
<input type="hidden" name="Landing_Page" id="Landing_Page" value="" readonly>
<input type="hidden" name="Affiliate_Ref" id="Affiliate_Ref" value="<?php echo $_GET['Affiliate_Ref'];?>" readonly>
<input type="hidden" name="universal_leadid" id="leadid_token" value=""/>
<input type="hidden" name="phone_number" value="<?php echo $phone_number;?>">