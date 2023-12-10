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

            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre: " value="">

            <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo: " value="">

            <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="10" placeholder="mensaje"></textarea>

            

            <input type="submit" class="btn btn-primary" value="Enviar correo" name="submit">
        </form>
    </div>
</body>

</html>