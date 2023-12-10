<?php
$errores = "";
$enviado = false;

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        // $nombre = htmlspecialchars($nombre);
    } else {
        $errores .= "Por favor ingresa un nombre <br />";
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= "Por favor ingrese un correo válido <br />";
        }
    } else {
        $errores .= "Por favor ingresa un correo <br />";
    }

    if (empty($errores)) {
        $enviado = true;
        // Implementar el envío del correo electrónico
    } else {
        $enviado = false;
    }

    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= "Por favor ingresa el mensaje";
    }

    if(!$errores == "") {
        $enviar_a = "hernandezgalvezalejandro@gmail.com";
        $asunto = "correo enviado desde miWeb.com";
        $mensaje_preparado = "De: $nombre \n ";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: $mensaje";

        mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado = true;
    }
}

require "index.view.php";
