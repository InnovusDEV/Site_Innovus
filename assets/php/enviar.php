<?php
    $destino = "david@innovusweb.com";
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $mensaje = $_POST["message"];

    $contenido = "Nombre" . $nombre . "\nCorreo" . $correo . "\nMensaje" . $mensaje;
    mail($destino, "Contacto de Innovus", $contenido);
    echo "<script>alert('Mensaje Enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='https://nayeliaceves.000webhostapp.com/ethereal_Inovus/index.html'\",1000) </script>";
?>