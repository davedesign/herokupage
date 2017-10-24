
      <?php

        include "phpmailer/PHPMailer.php";
        include "phpmailer/SMTP.php";

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'davidcastillodg@gmail.com';
        $mail->Password = '83122612';

        $mail->SMTPSecure = 'ssl';
        $mail->Port = 25;

        $mail->setFrom('davidcastillodg@gmail.com');
        $mail->addAddress('davidcastillodg@gmail.com');

        $mail->Subject = 'Mensaje Nuevo';
        $mail->Body = 'Este es el cuerpo del correo';

        $mail->Send();

      ?>
