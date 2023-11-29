<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <!-- imagenes dinámicas -->
                <a href="<?php echo site_url("/"); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
                </a>
                <!-- <h3 class="text-primary">Ecommerce</h3> -->
            </div>
            <div class="burguer-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-deep" width="60" height="60" viewBox="0 0 24 24" stroke-width="3" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6h16" />
                    <path d="M7 12h13" />
                    <path d="M10 18h10" />
                </svg>
            </div>
            <div class="contenedor-menu">
                <?php
                $args = array(
                    // theme location es para mostrar menus en diferenter lugares
                    "theme_location" => "menu-principal",
                    "container" => "nav",
                    "container_class" => "menu-principal nav",
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
        <?php if (is_front_page()) { ?>
            <div class="tagline text-center contenedor">
                <h1 class="ml2">
                    <?php the_field('hero_heading'); ?>
                </h1>
                <p><?php the_field('hero_texto'); ?></p>
            </div>
        <?php } ?>
    </header>