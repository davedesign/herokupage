
      <?php
     
        use PHPMailer\PHPMailer\PHPMailer;

        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'davidcastillodg@gmail.com';
        $mail->Password = '*********';
        
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 25;

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
