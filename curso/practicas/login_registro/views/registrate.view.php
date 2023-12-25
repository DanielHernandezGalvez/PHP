<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="css/styles.css
    ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRsA==" crossorigin="anonymous">

</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Registrate</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="formulario" name="login">
        <div class="form-group">
        <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="usuario">

        </div>
    </form>
    </div>
</body>

</html>