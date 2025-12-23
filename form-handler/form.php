<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$to = "zg5Yt@example.com";
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
    "User Email: $vistor_email.\n".
    "Subject: $subject.\n".
    "User Message: $message.\n";

$to = "zg5Yt@example.com";
$headers = "From: $vistor_email \r\n";
$headers .= "Reply-To: $vistor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>