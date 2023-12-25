<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginacón</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="contenedor">
        <h1>Artículos</h1>
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo) :  ?>
                    <li><?php echo $articulo['id'] . ".- " . $articulo["articulo"] ?></li>
                <?php endforeach ?>
            </ul>
        </section>
        <section class="paginacion">
            <ul>
                <?php if ($pagina == 1) : ?>
                    <li class="disabled">&laquo;</li>
                <?php else :  ?>
                    <li class="?pagina=<?php echo $pagina - 1 ?>"><a href="">&laquo;</a></li>
                <?php endif;  ?>

                <?php

                for ($i = 1; $i < $numero_paginas; $i++) {
                    if ($pagina == $i) {
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>

                <?php if ($pagina == $numero_paginas) : ?>
                    <li class="disabled">&raquo;</li>
                <?php else :  ?>
                    <li class="?pagina=<?php echo $pagina + 1 ?>"><a href="">&raquo;</a></li>
                <?php endif;  ?>

            </ul>
        </section>

    </div>
</body>

</html>
