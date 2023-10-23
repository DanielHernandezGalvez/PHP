    <footer class="footer contenedor">
        <hr>
        <div class="contenido-footer">
        <?php
            $args = array(
                // theme location es para mostrar menus en diferenter lugares
                "theme_location" => "menu-principal",
                "container"=> "nav",
                "container_class"=> "menu-principal nav",
            );
            wp_nav_menu($args);
            ?>
        <p class="copyright"> &copy; reservado. <?php echo get_bloginfo('name')." ". date('Y'); ?></p>
        </div>
    </footer>
    <!-- Esto pone el panel de administración al top del sitio -->
<?php wp_footer(); ?>
</body>
</html>