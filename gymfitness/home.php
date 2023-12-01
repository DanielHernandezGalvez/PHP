<?php
get_header();
?>
<main class="seccion contenedor">
    <ul class="listado-grid">
        <?php
        while (have_posts()) {
            the_post();
            get_template_part("template-parts/blog");
        }
        ?>
    </ul>
    <?php
    // paginación
        // Pagina siguiente
        // posts_nav_link();

        // paginación con números
        the_posts_pagination();
    ?>
</main>
<?php
get_footer();
?>