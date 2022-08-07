<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'eduford_uni@edu.ch';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n ".
                "User Email: $visitor_email.\n".
                    "Subect: $subject.\n".
                        "User message: $message .\n";
                      
$to = 'johnyan9511@gmail.com'

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contacts.html");
?>