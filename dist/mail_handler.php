<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "byjiarong@gmail.com";
$subject = "New form submission";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@demosite.com";

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "byjiarong@gmail.com";
$mail->Password = "Ceramics123!";

$mail->setFrom($email, $name);
$mail->addAddress("byjiarong@gmail.com", "Joyce");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent"