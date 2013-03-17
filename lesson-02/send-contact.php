<?php
 /*?>$to = 'jperetz@santarosa.edu';<?php */
$to = 'sbone@bearcubs.santarosa.edu';
$subject = "Sign me up!";
$message = $_POST['customername'] . 'membership request';
 /*?>$headers = 'From: jperetz@santarosa.edu' . "\r\n" .
    'Reply-To: jperetz@santarosa.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();<?php */
$headers = 'From: sbone@bearcubs.santarosa.edu' . "\r\n" .
    'Reply-To: sbone@bearcubs.santarosa.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>