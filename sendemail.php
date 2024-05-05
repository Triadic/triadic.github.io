<?php
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $phone = @trim(stripslashes($_POST['phone'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'admin@admin.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

	echo "Your Information send successfully, please allow us to process your request as earliest as possible..."