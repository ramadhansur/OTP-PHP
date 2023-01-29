<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';
    include 'connection.php';
    function randomString($length)
    {
        $str        = "";
        $characters = '123456789';
        $max        = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = "mt_rand"(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    $email = $_POST['email'];
    $otp = randomString(5);
    $object =  " Don't send this mail for Anyone."."<br>OTP : <b>".$otp."</b>";

    $inputQuery = mysqli_query($koneksi,"INSERT INTO tb_otp (email,otp) VALUE ('$email','$otp')");

    if($inputQuery){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'suryafox4@gmail.com';                     //SMTP username
        $mail->Password   = 'vdcowljrzthawxsy';                               //SMTP password
        $mail->SMTPSecure = 'tsl';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('suryafox4@gmail.com', 'Rama');
        $mail->addAddress($email, 'Client');
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'OTP Code';
        $mail->Body    = $object;
        $mail->AltBody = 'OTP Sender With PHP';
    
        
        if(!$mail->send()){
            echo "Mailer Error : ". $mail->ErrorInfo;
        }else{
            echo "
                <script>
                    alert('Success for Send OTP code to your E-mail');
                    window.location = 'otp-verif.php?email=$email';
                </script>
            ";
        };
    }

?>