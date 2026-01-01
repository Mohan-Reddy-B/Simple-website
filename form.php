<?php
$name =$_POST['name'];
$visiter_email= $_POST['email'];
$number = $_POST['number'];
$message= $_POST['message'];

$email_from = 'info@domainname.com';
$email_subject = 'New Form Submission';
$email_body ="User Name:$name.\n".
             "User Email:$visiter_email.\n".
             "User Number:$number.\n";

$to = 'mohanreddy5772@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Replay-To: $visiter_email \r\n";
mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>