
      <?php

        require 'phpmailer/PHPMailer.php';
        require 'SMTP.php';

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'davidcastillodg@gmail.com';
        $mail->Password = '83122612';

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('davidcastillodg@gmail.com');
        $mail->addAddress('davidcastillodg@gmail.com');

        $mail->Subject = 'Mensaje Nuevo';
        $mail->Body = 'Este es el cuerpo del correo';

        $mail->send();

      ?>
