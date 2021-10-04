<?php
    $name = $POST['name'];
    $visitor_email = $POST['email'];
    $visitor_subject = $POST['subject'];
    $message = $POST['message'];

    $email_from  = 'adityagangwar516@gmail.com';
    $email_subject = "Subject : $visitor_subject \r\n";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
                     
    $to = "aahana1507.sharma99@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location:contact.php");



?>