<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$message = $_POST['message'];


$email_form = 'sarecords713@gmail.com'

$email_subject = 'InfoWeb MSG'

$email_body = "User Name: $name.\n".
                "User Email: $visitor .\n".
                  "User Mesagge: $message .\n"; 
$to = "sebashidalgovillarroel@gmail.com"

$headers ="From: $email_form \r\n";

$headers .= "Re´lay-To: $visitor \r\n";

mail($to,%$email_subject,$email_body,$headers);

header("Locarion: contact.html")