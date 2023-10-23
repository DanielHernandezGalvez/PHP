<?php

/**
 *  Template Name: Listado de clases
 */
get_header();
?>
<main class="contenedor seccion">
    <ul class="listado-grid">
        <?php
        $args = array(
            "post_type" => "gymfitness_clases",
        );

        // esto es para modificar la consulta
        $clases = new WP_Query($args);

        while ($clases->have_posts()) {
            $clases->the_post();
        ?>
            <li class="card">
                <?php the_post_thumbnail(); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3> <?php the_title(); ?></h3>
                    </a>
                    <?php
                    $hora_inicio = get_field('hora_inicio');
                    $hora_fin = get_field('hora_fin');
                    ?>
                    <!-- esto es nativo de advance custom fields -->
                    <p><?php the_field('dias_clase'); ?> <?php echo $hora_inicio . " - " . $hora_fin;  ?></p>
                </div>
            </li>
        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
</main>
<?php
get_footer();
?>