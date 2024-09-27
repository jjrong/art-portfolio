<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "byjiarong@gmail.com";
$subject = "New form submission";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@demosite.com";

if($email != NULL) {
    mail($to, $subject, $txt, $headers);
    echo "Hi " . $name . "! Thank you for checking out my art and reaching out. I will follow up with you shortly.";
}
?>

/*
if(isset($_POST['submit'])){
    $to = "byjiarong@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = . $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Hi " . $name . "! Thank you for checking out my art and reaching out. I will follow up with you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?> 
*/