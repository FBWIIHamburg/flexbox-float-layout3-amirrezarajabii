<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'rajabi.amirreza27@gmail.com';

$email_subject = "New from submission";

$email_body = "user name: $name.\n".
                "user email: $visitor_email.\n".
                    "user message: $message.\n";

$to = "amirrezarajabiiii@gmail.com";

$headers = "from $mail_form \r\n";

$headers .="replay_to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");

?>





