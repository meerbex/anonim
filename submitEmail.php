<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once './phpmailer/src/Exception.php';
require_once './phpmailer/src/PHPMailer.php';
require_once './phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

if (isset($_POST['receiver_email'])){
    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
    
        $mail->Username = 'info.anonymnotes@gmail.com'; // YOUR gmail email
        $mail->Password = 'MeerbekRomizAiza'; // YOUR gmail password
    
        // Sender and recipient settings
        $mail->setFrom('meerbek.kg@gmail.com', 'Anonymous Email');
        $mail->addAddress($_POST['receiver_email'], 'Receiver');
    
        // Setting the email content
        $mail->IsHTML(true);
        $mail->Subject = "Anonymous email for you!!!";
        $mail->Body = 'The anonymous person have texted you the following text: '.$_POST['text_for_receiver'];
        $mail->AltBody = 'The anonymous person have texted you the following text: '.$_POST['text_for_receiver'];
    
        $mail->send();
        echo "Email message sent.";
        header('Location: emailForm.php?msg=success');
    } catch (Exception $e) {
        echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>