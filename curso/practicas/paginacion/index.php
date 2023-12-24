<?php

try {
    $conexion = new PDO("mysql:host=localhost;dbname=paginacion", "root", ""); # las comillas sin nada son el password

} catch (PDOException $e) {
    echo "ERROR: " .  $e->getMessage();
    die();
}

$pagina = isset($_GET["pagina"]) ? (int)$_GET["pagnia"] : 1;
$post_por_pagina = 5;
$inicio = ($pagina > 1) ? ($pagina * $post_por_pagina - $post_por_pagina) : 0;

$articulos = $conexion->prepare("
        SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT 
        $inicio, $post_por_pagina
    ");

$articulos->execute();
$articulos = $articulos->fetchAll();

if (!$articulos) {
    header("Location:index.php");
}

$total_articulos = $conexion->query("SELECT FOUND_ROWS() as total");
$total_articulos = $total_articulos->fetch()["total"];

$numero_paginas = ceil( $total_articulos / $post_por_pagina);

echo $numero_paginas;

require "view.php";
