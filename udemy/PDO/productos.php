<?php
    require_once("conectar.php");
    $d = new Datos();
    $datos = $d->getDatos(("select category.id, category.name, category.type, category.description as category from category
    inner join categoris on categorias.id = category.categorias_id order by category.id desc;
    "));

    print_r($datos);
?>
