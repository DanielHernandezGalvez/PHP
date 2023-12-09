<?php
if (!empty($nombre)) {
    $nombre = trim($nombre); // elimina espacios
    $nombre = htmlspecialchars($nombre); // el usuario no puede inyectar código
    $nombre = stripslashes($nombre); // evita que haya / y \
    // $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); // elimina los caracteres que sn código
    $nombre = filter_var($nombre, FILTER_SANITIZE_EMAIL); // elimina los caracteres que sn código
    echo "tu nombre es: $nombre";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="valida_envio.php" method="get">
        <input type="text" name="nombre" placeholder="nombre" id="">
        <input type="email" name="correo" placeholder="correo" id="">
        <input type="submit" name="enviar" id="">
    </form>
</body>

</html>