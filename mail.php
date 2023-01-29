<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'suryafox4@gmail.com';                     //SMTP username
    $mail->Password   = 'vdcowljrzthawxsy';                               //SMTP password
    $mail->SMTPSecure = 'tsl';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('suryafox4@gmail.com', 'Rama');
    $mail->addAddress('ramadhansuryanto44@gmail.com', 'Suryanto Ramadhan');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Haloo';
    $mail->Body    = 'Halo';
    $mail->AltBody = 'PHP Mailer';

    
    if(!$mail->send()){
        echo "Mailer Error : ". $mail->ErrorInfo;
    }else{
        echo "Sukses";
    }
?>