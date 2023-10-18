<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gymfitness</title>
</head>

<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
            </div>
            <nav>
                <a href="/nosotros">Nosotros</a>
                <a href="/contacto">Contacto</a>
                <a href="/blog">Blog</a>
            </nav>
        </div>
    </header>

    <main>
        <?php
        while (have_posts()) :  the_post();

            the_title();

            the_content();

        endwhile;
        ?>
    </main>
</body>

</html>