<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    die("Lo sentimos, hubo un problema con el servidor"); # cortar la ejecución de la página
} else {
    $sql = "INSERT INTO usuarios(id, nombre) VALUES(null, 'Pamela')";
    $resultado = $conexion->query($sql);
    if($conexion->affected_rows >= 1){
        echo "Filas agregadas: $conexion->affected_rows";
    }
}
