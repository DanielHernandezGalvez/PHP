<?php require "header.php"; ?>

    <div class="contenedor">

        <div class="post">
            <article>
                <h2 class="titulo">Título del artículo</h2>
                <p class="fecha">1 de enero del 2023</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/images/1.png" alt="">
                    </a>
                    <p class="extracto">Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Quibusdam ut sed voluptatem cum odio 
                        maiores aspernatur eaque molestiae voluptas accusantium,
                         fuga quidem delectus. Quia illum, asperiores non rerum 
                         iste aliquid?
                    </p>
                    <a href="#" class="continuar">Leer más</a>
                </div>
            </article>
        </div>

        <div class="post">
            <article>
                <h2 class="titulo">Título del artículo</h2>
                <p class="fecha">1 de enero del 2023</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/images/2.png" alt="">
                    </a>
                    <p class="extracto">Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Quibusdam ut sed voluptatem cum odio 
                        maiores aspernatur eaque molestiae voluptas accusantium,
                         fuga quidem delectus. Quia illum, asperiores non rerum 
                         iste aliquid?
                    </p>
                    <a href="#" class="continuar">Leer más</a>
                </div>
            </article>
        </div>

        <?php require "paginacion.php"; ?>

    </div>

<?php require "footer.php"; ?>