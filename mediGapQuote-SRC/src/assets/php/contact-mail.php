<?php

/*
$to = "hugomartinez@hbcinsure.com";
$subject = "Contact Us";
//$email = 'info@cashforjunkleads.com';
$message = $_REQUEST['message'];
$headers = "From: info@cashforjunkleads.com";
$sent = mail($to, $subject, $message, $headers);
if ($sent) {
    print "Your mail was sent successfully";
} else {
    print "We encountered an error sending your mail";
}
*/

//*********************************************************************************



// subject
$subject = 'MediGap Quote - Info';

// message
$message = '
<html>
<head>
    <title>MediGap Quote - Info</title>
</head>
<body>
<h3>From: <b> ' . $_POST["name"] . '</b></h3>
<h4>Phone Number: ' . $_POST["phone"] . '</h4>
<h4>Email: ' . $_POST["email"] . '</h4>

<h4>Message:</h4>

<div style="width: 500px; border-style: double; border-width: 2px; border-color: #1b6d85;">
    <p>
         ' . $_POST["message"] . '

    </p>
</div>
</body>
</html>
';



// multiple recipients
$to = 'HMartinez@simplehealthplans.com';
//$to .= ', rkneeter@sileads.com';
//$to .= ', HMartinez@simplehealthplans.com';

//$to .=  ', mspiewak@hbcinsure.com';
$to .=  ', slacey@sileads.com';


// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= "To: Hugo <hugomartinez@hbcinsure.com>, Kelly <kelly@example.com>" . "\r\n";
$headers .= 'From: contact@medigapquotes.com' . "\r\n";
$headers .= 'Reply-To: ' . $_POST["name"] . '  ' . $_POST["email"] . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

$_POST["name"] = trim($_POST["name"]);
$_POST["phone"] = trim($_POST["phone"]);
$_POST["email"] = trim($_POST["email"]);
$_POST["message"] = trim($_POST["message"]);

if (isset($_POST["name"]) && $_POST["name"] != "" && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["message"])) {
// Mail it
    mail($to, $subject, $message, $headers);
}


header("Location: ../../index.php");


?>
