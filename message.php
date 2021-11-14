<?php

$name = $_POST['name'];
$email = $_POST['Email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = "rawezhhame@gmail.com";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\Phone: $phone\Website: $website\Message: $message\n\nRegards, \n$namel:";
        $sender = "From $email";

        if (mail($receiver, $subject, $body, $sender)) {
            echo "Yout message has been sent";
        } else {
            echo "Sorry, failed to send your message!";
        }
    } else {
        echo "Enter a valid emal adresse!";
    }
} else {
    echo "Email and password field is required!";
}
