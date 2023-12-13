<?php

// $id = $_GET["id"];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', "root", "");
    // echo "Conexión OK";

    # Metodo query
    // $resultados = $conexion->query("SELECT * FROM usuarios");
    // $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id");

    // foreach ($resultados as $fila) {
    //     echo $fila["id"] . " - " . $fila["nombre"] . "<br />";
    // }
    $statement = $conexion->prepare("INSERT INTO usuarios VALUES(null, 'jose')");
    $statement->execute(
        // array(
        //     ":id" => $id,
        // )
    );

    // $resultados = $statement->fetch(); // trae 1
    $resultados = $statement->fetchAll(); // trae todo
    foreach($resultados as $usuario){
      echo  $usuario["nombre"] . "<br />";
    }
    // echo "<pre>";
    // print_r($resultados);
    // echo "</pre>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
