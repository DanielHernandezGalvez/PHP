<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <!-- imagenes dinámicas -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
                <!-- <h3 class="text-primary">Ecommerce</h3> -->
            </div>
            <?php
            $args = array(
                // theme location es para mostrar menus en diferenter lugares
                "theme_location" => "menu-principal",
                "container"=> "nav",
                "container_class"=> "menu-principal nav",
            );
            wp_nav_menu($args);
            ?>
        </div>
    </header>