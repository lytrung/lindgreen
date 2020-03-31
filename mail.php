<?php

$subject = 'Lindgreen Fencing Website Enquiry';

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = $_POST['FullName'].' from '.$_POST['EmailAddress'].' sent you a message: ';
$message .= $_POST['CAT_Custom_20005859'];

//$to = 'nzmikejp@gmail.com';
$to = 'lytrung@gmail.com';

$headers = "From: Lindgreen Fencing Website <no-reply@lindgreenfencing.co.nz>\r\n";
$headers .= "Reply-To: no-reply@lindgreenfencing.co.nz\r\n";

// Send
mail($to, $subject, $message, $headers);

// header('Location: index.html')
echo 'sent';
?>