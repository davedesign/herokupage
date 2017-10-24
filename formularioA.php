
      <?php
     
        use PHPMailer\PHPMailer\PHPMailer;

        require 'phpmailer/PHPMailer.php';
        require 'phpmailer/SMTP.php';

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dcrmonkey@gmail.com';
        $mail->Password = '12261283';
        
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('davidcastillodg@gmail.com');
        $mail->addAddress('davidcastillodg@gmail.com');

        $mail->Subject = 'Mensaje Nuevo';
        $mail->Body = 'Este es el cuerpo del correo';

        if (!$mail->send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
         echo "Message sent!";
         }

     ?>
