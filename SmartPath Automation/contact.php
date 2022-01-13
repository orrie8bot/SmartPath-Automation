<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'douglas.webber@smartpathautomation.com';

    $email_subject = "New SmartPath Automation Submission";

    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

    $to = "douglas.webber@smartpathautomation.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html")
?>