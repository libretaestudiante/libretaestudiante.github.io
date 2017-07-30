<?php
    $destino= "spintos@estudiante.ceibal.edu.uy"    
    $nombre = $_POST["nombre"]
    $correo = $_POST["correo"]
    $asunto = $_POST["asunto"]
    $mensaje = $_POST["mensaje"]
    
    $contenido = "Nombre: ".$nombre . "\nCorreo:".$correo . "\Mensaje: ".$mensaje;

    mail($destino, "Mensaje de pagina web", $asunto, $contenido);
    header("Location: ../index.html");
?>