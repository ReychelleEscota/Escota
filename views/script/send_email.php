<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server address
        $mail->SMTPAuth = true;
        $mail->Username = 'reyscota@gmail.com';  // Replace with your SMTP username
        $mail->Password = 'kfqkwuctyyjztbik';  // Replace with your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender and recipient settings
        $mail->setFrom($email, $name);
        $mail->addAddress('reyscota@gmail.com', 'Reychelle Escota');  // Replace with the recipient's email address and name

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'User Message';
        $mail->Body = "<h3>Name:</h3><p>$name</p><h3>Email:</h3><p>$email</p><h3>Message:</h3><p>$message</p>";

        // Send the email
        $mail->send();
        echo 'Email sent successfully!';
        // header("Location: ./contact?success=Thank you for your message");
    } catch (Exception $e) {
        echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
        // header("Location: ./contact?error=Email could not be sent.");
    }
}
