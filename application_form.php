<?php
 $name = $_POST['name'];
$child_name = $_POST['cname'];
$user_email = $_POST['email'];
$user_number = $_POST['number'];
$start_date = $_POST['start_date'];
$grade_level = $_POST['level'];
$gender = $_POST['gender'];

$email_from = 'application@ecolelaracine.com';
$email_subject = 'New Application';
$email_body = "Applicant: $name.\n".
                "Applicant's email: $user_email.\n".
                "Applicant's Phone Number: $user_number".
                "Student name: $child_name.\n".
                "Desired start date: $start_date".
                "Grade Level: $grade_level.\n".
                "Gender: $gender.\n";
$to = 'jethrobizumuremyi@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply to: $user_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: apply.html");