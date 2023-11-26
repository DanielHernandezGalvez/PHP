<?php
get_header();
?>

<section class="bienvenida seccion contededor text-center">
    <h2 class="text-primary">
        <?php the_field("encabezado_bienvenida"); ?>
    </h2>
    <p><?php the_fielD("texto_bienvenida_"); ?></p>
</section>

<section class="areas">
    <div class="area">
        <?php
        $area1 = get_field("area_1");

        //    echo "<pre>";
        //    var_dump($area1["imagen"]["sizes"]["medium_large"]);
        //    echo "</pre>";
        $imagen = $area1["imagen"]["sizes"]["medium_large"];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($area1["texto"]); ?>">
        <p><?php echo esc_html($area1["texto"]); ?></p>
    </div>

    <div class="area">
        <?php
        $area2 = get_field("area_2");
        $imagen = $area2["imagen"]["sizes"]["medium_large"];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($area2["texto"]); ?>">
        <p><?php echo esc_html($area2["texto"]); ?></p>
    </div>

    <div class="area">
        <?php
        $area3 = get_field("area_3");
        $imagen = $area3["imagen"]["sizes"]["medium_large"];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($area3["texto"]); ?>">
        <p><?php echo esc_html($area3["texto"]); ?></p>
    </div>

    <div class="area">
        <?php
        $area4 = get_field("area_4");
        $imagen = $area4["imagen"]["sizes"]["medium_large"];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($area4["texto"]); ?>">
        <p><?php echo esc_html($area4["texto"]); ?></p>
    </div>

</section>

<main class="contenedor seccion">
    <h2 class="text-center text-primary">Nuestras Clases</h2>
    <?php gymfitness_lista_clases(4); ?>
    <div class="contenedor-boton">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title("Nuestros productos"))); ?>" class="boton boton-primario">Ver todas las clases</a>
    </div>
</main>
<section class="contenedor seccion">
    <h2 class="text-primary">Nuestros Instructores </h2>
<p>Instructores profesionales</p>
</section>
<?php
get_footer();
?>