<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Adjust the path to PHPMailer files based on the cPanel document root
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $name = $_POST['cxname'];
    $email = $_POST['cxemail'];
    $phone = $_POST['cxphone'];
    $message = $_POST['cxmessage'];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Set mailer to use SMTP
        $mail->isSMTP();
        
        // SMTP server settings
        $mail->Host       = 'smtp-relay.brevo.com'; // Your SMTP server host
        $mail->SMTPAuth   = true;
        $mail->Username   = 'k.mahen999@gmail.com'; // Your SMTP username
        $mail->Password   = 'rHPhCUNxJIqmER0c'; // Your SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption; `ssl` also accepted
        $mail->Port       = 587; // TCP port to connect to, use 465 for SSL
        
        // Sender information
        $mail->setFrom($email, $name);
        
        // Recipient information
        $mail->addAddress('k.mahendra999@hotmail.com'); // Add your recipient email address
        
        // Email subject and body
        $mail->Subject = 'New Form Submission';
        $mail->Body    = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
        
        // Send email
        $mail->send();
        
        echo '<script>alert("Query sent successfully, We will contact you soon!");</script>';
        echo '<script>window.location.href = document.referrer;</script>';
    } catch (Exception $e) {
        echo '<script>alert("Email sending failed. ' . $mail->ErrorInfo . '");</script>';
        echo '<script>window.history.back();</script>';
    }
}
?>
