<?php
    $name = $POST['name'];
    $visitor_email = $POST['email'];
    $email_from  = 'adityagangwar516@gmail.com';
    $email_subject = "Mailing List Subscribe";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n";
                                             
    $to = "aahana1507.sharma99@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location:contact.php");



?>