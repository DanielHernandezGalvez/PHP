<?php
while (have_posts()) :  the_post();

    the_title("<h1 class='text-center text-primary'>", "</h1>");

    // para poner imágenes
    if (has_post_thumbnail()) {
        the_post_thumbnail("full", array("class" => "imagen-destacada"));
    }

    if (is_single()) {
        $hora_inicio = get_field('hora_inicio');
        $hora_fin = get_field('hora_fin');
?>
        <!-- esto es nativo de advance custom fields -->
        <p class="informacion-clase"><?php the_field('dias_clase'); ?> <?php echo $hora_inicio . " - " . $hora_fin;  ?></p>
<?php
    }
    the_content();

endwhile;
