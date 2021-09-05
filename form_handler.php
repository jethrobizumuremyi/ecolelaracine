<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'info@ecoleracine.com';
    $email_subject = 'Message from our contact page';
    $email_body = "Sender: $name.\n\n".
                    "Sender Email: $visitor_email.\n\n".
                    "Subject: $subject.\n\n".
                     "Message: $message.\n";
    $to = 'jethrobizumuremyi@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body,$headers);
    header("Location: contact.html");

