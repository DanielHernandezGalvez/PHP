<?php
session_start();

$_SESSION["nombre"] = "Dani";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de inicio</h1>
    <p></p>
    <a href="pagina2.php">ir a pagina 2</a>
</body>
</html>