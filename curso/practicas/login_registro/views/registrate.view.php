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
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="USsuario">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password-btn" placeholder="Repetir Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
            <?php if (!empty($errores)) : ?>
                <div class="error">
                    <ul>
                        <?php echo $errores ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
        <p class="texto-registrate">¿Ya tienes cuenta?
            <a href="login.php">Iniciar sesión</a>
        </p>
    </div>
</body>

</html>