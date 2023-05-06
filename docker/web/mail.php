<?php
$to = 'you@example.com';
$subject = 'Test email';
$message = 'This is a test email sent using the mail() function from PHP ' . phpversion() . '.';
$headers = 'From: sender@example.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Error sending email.';
}