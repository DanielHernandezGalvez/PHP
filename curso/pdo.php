<?php

try {
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', "root", "");
    // echo "Conexión OK";

    // $resultados = $conexion->query("SELECT * FROM usuarios");
    $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = 2");

    foreach ($resultados as $fila) {
        echo $fila["id"] . " - " . $fila["nombre"] . "<br />";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
