<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 11/3/15
 * Time: 10:51
 */

if (isset($_POST["email"])) {
    $email = $_POST["email"];
} elseif (isset($_GET["email"])) {
    $email = $_GET["email"];
}
$url = 'http://hbc.unicorncrm.com/crm/api/v1/marketing/un-subscribers/?format=json';

//$url = 'http://features.unicorncrm.com/crm/api/v1/marketing/un-subscribers/';
$data = array('email' => $email);
$username = "unsubscriber";
$password = "unsubpepito";
$postfields = $data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 1);
// Edit: prior variable $postFields should be $postfields;
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // On dev server only!
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result = curl_exec($ch);
curl_close($ch);
?>

<script>
    window.location.replace("done.php");
</script>
