<?php 
use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
$ordernumber = ($_GET['ordernumber']);
 require 'phpmailer/PHPMailer/src/Exception.php';
        require 'phpmailer/PHPMailer/src/PHPMailer.php';
        require 'phpmailer/PHPMailer/src/SMTP.php';
        /* --------------------CREACION DE MAIL PARA USUARIO */
        $mail = new PHPMailer(); // create a new object
        $mail->isSendMail();
        $mail->SMTPDebug = 0;
        $mail->IsHTML(true);
        $mail->SetFrom("info@freenuvana.com", "FreeNuvana" );
        $mail->Subject = "Order Request: ".$ordernumber;
        $body="<h1>$ordernumber</h1>";
        
        $mail->Body = $body;
        $mail->AddAddress("ariel@mvagency.co");
        $mail->AddAddress("jose@mvagency.co");
        
        //send the message, check for errors
        if (!$mail->send()) {
        } else {
        }
?>