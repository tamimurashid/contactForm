<?php
require 'vendor/autoload.php'; // Use Composer's autoloader
include 'configure.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fullname = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';


$email_subject = 'Hello  you get email from' . ' '. $fullname;

            
    $mail = new PHPMailer(true);

    try {
        //$mail->SMTPDebug = 2; // Enable detailed debug output

        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com'; //Set the SMTP server to send                       
        $mail->SMTPAuth   = true; //Enable SMTP authentication                               
        $mail->Username   = $youremail;  // sender email or SMTP username             
        $mail->Password   = $yourkey;  // sender password or key  or SMTP password                        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption          
        $mail->Port       = 465;      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                              

        $mail->setFrom($email, $fullname);
        $mail->addAddress($youremail); 

        // Content
        $mail->isHTML(true);
        $mail->Subject = $email_subject;                               
        $mail->Body = $message;

        $mail->send();
        header('Location: email-succes.html');
        exit();
        // return true; 
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header('Location: contact.html');
        exit();
    }

}