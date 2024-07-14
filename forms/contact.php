<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = 'abdullahharishjagrala@gmail.com';

$phone = 'Enquiry From Revia Industries';

$headers = "From: info@yourcompany.com";
$headers .= "Reply-To: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

if (mail($to, $phone, $message, $headers)) {
    echo '

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="shortcut icon" href="/assets/image/company-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container redirect d-flex align-items-center justify-content-center">
        <h1 class="text-black">Thank you for contacting me. I will get back to you as soon as possible!<p
            class="back fs-5 mt-3">Go back to the <a href="index.html">Homepage</a>.</p>
        </h1>
    </div>
</body>

</html>
    
    ';
} else {
    echo 'There was a problem sending the email.';
}
