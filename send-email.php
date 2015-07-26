<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "harrisonwallin@gmail.com";
    $subject = "Portfolio email";
    $headers = "From: " . $name . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $email_body = $message;

    mail($to,$subject,$email_body,$headers);

    header('Location: /#future');
    die();

?>