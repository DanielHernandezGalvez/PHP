<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

// si sale un 0 significa que la conexión fue correcta
// echo $conexion->connect_errno;

if($conexion->connect_errno) {
    die("Lo sentimos, hubo un problema con el servidor"); # cortar la ejecución de la página
} else {
    // codigo
}