<?php
    $to = "varsha7chukki@gmail.com";
    $subject = "Test mail";
    $message = "Hello! Good morning... All the vry best for ur bright future....";
    $from = "notaquitter7@gmail.com";
    $headers = "From : $from"."\r\n"."CC : $to";

    if(mail($to, $subject, $message, $headers)){
        echo "Mail Sent";
    }
    else{
        echo "Sorry, failed while sending mail!";
        echo "sorry";
    }
?>