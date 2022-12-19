<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';

                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->Mailer = "smtp";
                $mail->SMTPDebug  = 1;  
                $mail->SMTPAuth   = TRUE;
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;
                $mail->Host       = "smtp.gmail.com";
                $mail->Username   = "techsupport@shamlatech.com";
                $mail->Password   = "cqmkpdpnniblcrst";


                $mail->IsHTML(true);
                $mail->AddAddress("marketing@pinksurfing.com", "pinksurfing");
                $mail->SetFrom("techsupport@shamlatech.com", "PinkSurfing Signup");
                $mail->Subject = "Signup";
                $content = " <p> Hi my name is  ".$_POST['text-name']. "</p>
                <p>This product is so exciting, add me to beta list now, to test use, 
                    and give feedback and be the earliest adopter.”</p>";

                $mail->MsgHTML($content); 
                if(!$mail->Send()) {
                echo "Error while sending Email.";
    
                } else {
                echo 'Email sent successfully';
                }
?>