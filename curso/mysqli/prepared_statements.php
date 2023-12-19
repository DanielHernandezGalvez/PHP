<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    die("Lo sentimos, hubo un problema con el servidor"); # cortar la ejecución de la página
} else {
    $statement = $conexion->prepare("INSERT INTO usuarios(id, nombre) VALUES(?, ?)");
    // una s por cada signo de interrogaciòn
    $statement->bind_param("ss", $id, $nombre);
    $id = NULL;
    if (isset($_GET["nombre"])) {
        $nombre = $_GET["nombre"];
    }

    $statement->execute();
    echo "filas añadidas: $conexion->affected_rows";


}
