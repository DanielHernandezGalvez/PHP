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
            <h1 class="titulo">Galería dinámica</h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">

            <?php foreach ($fotos as $foto) : ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto["id"] ?>">
                        <img src="fotos/<?php echo $foto["imagen"] ?>" alt="<?php $foto["titulo"] ?>">
                    </a>
                </div>
            <?php endforeach ?>

            <div class="paginacion">
                <?php if ($pagina_actual > 1) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"> Página Anterior </a>
                <?php endif; ?>

                <?php if ($total_paginas != $pagina_actual) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha"> Página Siguiente </a>
                <?php endif; ?>
          
            </div>
        </div>


    </section>
    <footer>
        <p class="copyright">Galería creada por el Capitán Kramer</p>
    </footer>

</body>

</html>