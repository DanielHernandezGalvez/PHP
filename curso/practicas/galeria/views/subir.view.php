<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripción</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="subir foto">
        </form>
    </div>

    <footer>
        <p class="copyright">Galería creada por el Capitán Kramer</p>
    </footer>

</body>

</html>