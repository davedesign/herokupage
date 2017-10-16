<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Felicidades</title>
    </head>

    <body>

      <?php
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["usremail"];
        $telefono = $_POST["usrtel"];
        $mensaje = $_POST["msje"];

        $para = "davidcastillodg@gmail.com";

        $asunto = "Mensaje Nuevo";

        $contenido = "
        
        Nombre del remitente: ".$nombre."
        Apellido: ".$apellido."
        E-mail: ".$correo."
        Telefono: ".$telefono."
        Mensaje: ".$mensaje."
        ";
      
        $cabecera .= "From: daviddesign.com <no-reply@herokudave.herokuapp.com/>" . "\r\n";

        mail($para,$asunto,utf8_decode($contenido),$cabecera);

        echo "<h1>Se envio correctamente</h1>";

      ?>

    </body>

  </html>
