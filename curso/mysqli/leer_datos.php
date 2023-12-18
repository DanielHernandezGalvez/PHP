<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

// si sale un 0 significa que la conexión fue correcta
// echo $conexion->connect_errno;

if($conexion->connect_errno) {
    die("Lo sentimos, hubo un problema con el servidor"); # cortar la ejecución de la página
} else {
    $sql = "SELECT * FROM usuarios LIMIT 5";
    $resultado = $conexion->query($sql);
    
    if( $resultado->num_rows) {
        // echo "<pre>";
        // var_dump( $resultado->fetch_assoc()); #muestra una fila del resultado
        // echo "</pre>";

        while($fila = $resultado->fetch_assoc()){
            echo $fila['id'] . " - " . $fila["nombre"] . "<br />";
        }
    } else {
        echo "No hay datos";
    }
}