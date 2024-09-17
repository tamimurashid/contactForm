<?php
require 'vendor/autoload.php'; // Use Composer's autoloader


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fullname = isset($_POST['username']);
    $email = isset($_POST['email']);
    $message = isset($_POST['message']);
}


function email_verification($fullname, $email, $email_subject,  $email_template){
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 2; // Enable detailed debug output

        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com'; //Set the SMTP server to send                       
        $mail->SMTPAuth   = true; //Enable SMTP authentication                               
        $mail->Username   = 'taliantamten@gmail.com';  // sender email or SMTP username             
        $mail->Password   = 'nanz sgco kefd ogfz';  // sender password or key  or SMTP password                        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption          
        $mail->Port       = 465;      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                              

        $mail->setFrom('taliantamten@gmail.com', $fullname);
        $mail->addAddress($email); 

        // Content
        $mail->isHTML(true);
        $mail->Subject = $email_subject;                               
        $mail->Body = $email_template;

        $mail->send();
        return true; 
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false; // Indicate failure
    }
}

?>
