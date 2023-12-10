<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre: " value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" />

            <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo: " value="<?php if(!$enviado && isset($correo)) echo $correo ?>" />

            <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="10" placeholder="mensaje" value=""><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif ?>


            <input type="submit" class="btn btn-primary" value="Enviar correo" name="submit">
        </form>
    </div>
</body>

</html>