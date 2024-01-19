<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0(css/font-awesome.min.css">
    <title>Blog</title>
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
</head>

<body>
    <header>
        <div class="contenedor">

            <div class="logo izquierda">
                <p><a href="#">Mi primer blog</a></p>
            </div>

            <div class="derecha">

                <form 
                    name="busqueda" 
                    class="buscar" 
                    action="<?php echo RUTA; ?>/buscar.php" 
                    method="get"
                >
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>

                <nav class="menu">
                    <ul>
                        <li><a href="#">Github</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>
</body>

</html>