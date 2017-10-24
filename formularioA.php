
      <?php
     
        use PHPMailer\PHPMailer\PHPMailer;

        require 'phpmailer/PHPMailer.php';
        require 'phpmailer/SMTP.php';

        $mail = new PHPMailer();

        $mail->isSMTP();
        
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'davidcastillodg@gmail.com';
        $mail->Password = '83122612';
        $mail->SMTPDebug = 2;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

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
