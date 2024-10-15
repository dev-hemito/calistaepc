<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject']; // Updated from 'message' to 'subject'
$address = $_POST['address']; // Updated from 'message' to 'address'

// Create the email body content
$mailbody = 'Enquiry from Website' . PHP_EOL . PHP_EOL .
            'Name: ' . $name . PHP_EOL .
            'Email: ' . $email . PHP_EOL .
            'Phone Number: ' . $phone . PHP_EOL .
            'Subject: ' . $subject . PHP_EOL . // Include subject
            'Address: ' . $address . PHP_EOL; // Include address

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'web.form.enquiry.123@gmail.com'; // SMTP username
$mail->Password = 'czfeonldeymnuftm'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to

$mail->setFrom('web.form.enquiry.123@gmail.com', 'Mail from website'); // Admin ID
$mail->addAddress('calista.epc07@gmail.com', 'calista'); 

// info@alveoli.in

$mail->addReplyTo($email, $name); // Form Submitter's ID

$mail->isHTML(false); // Set email format to HTML

$mail->Subject = 'Enquiry from Website';
$mail->Body    = $mailbody;

if(!$mail->send()) {
    echo 'success';
}

?>
