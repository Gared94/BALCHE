<?php

        $name = $_POST['nombre'];
        $asunto = 'Mensaje de mi sitio Web';
        $email = $_POST['email'];
        $para = 'ruiz94.reyes@gmail.com';
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($para, $asunto, $mensaje, $header);
        header("Location:index.html")

?>